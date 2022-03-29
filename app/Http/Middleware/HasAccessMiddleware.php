<?php
namespace App\Http\Middleware;
use Closure;
use Exception;

use App\Models\Role;

class HasAccessMiddleware {

    public function handle( $request, Closure $next, $role_label ) {

        $user = $request->auth;

        // dd($user);

        // // get user role permissions
        // $role = Role::findOrFail(auth()->user()->role_id);
        // $permissions = $role->permissions;



        $role = Role::where('name', $role_label)->first();

        if ( empty($user) ) {
            return responseFromCode(102050);
        }

        if ( $role->access_level < $request->auth->role->access_level ) {
            return responseFromCode(102050);
        }

        return $next($request);

    }
}
