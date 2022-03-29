<?php
namespace App\Http\Middleware;

use Closure;
use Exception;
use App\Models\User;
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;

class JwtMiddleware {

    public function handle($request, Closure $next, $guard = null) {

        $token = $request->header('Authorization');

        if (!$token) {
            return responseFromCode(102020);
        }

        try {
            $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']);
        } catch(ExpiredException $e) {
            return responseFromCode(102030);
        } catch(Exception $e) {
            return responseFromCode(102040, $e);
        }

        try {
            $user = User::with('roles')->findOrFail($credentials->sub);
        } catch (Exception $exception) {
            return responseFromCode( 122010, $exception );
        }

        // Now let's put the user in the request class so that you can grab it from there
        $request->auth = $user;

        return $next($request);
    }
}
