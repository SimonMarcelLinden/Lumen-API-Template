<?php
namespace App\Http\Middleware;
use Closure;
use Exception;
use App\User;
use App\Role;

class HasAccessMiddleware {

    public function handle( $request, Closure $next, $role_label ) {

        $user = $request->auth;
        $role = Role::where('label', $role_label)->first();

        if ( empty($user) ) {
            return responseFromCode(102050);
        }

        if ( $role->access_level < $request->auth->role->access_level ) {
            return responseFromCode(102050);
        }

        return $next($request);

    }
}
