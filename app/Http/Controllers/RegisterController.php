<?php

namespace App\Http\Controllers;

use \Validator;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class RegisterController extends Controller {
    /**
     * @description Creates a user
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse()
     */
    function register ( request $request ) {

        try {
            $this->validateUser($request);
            $request_all = $request->all();
            $request_all["password"] = app('hash')->make($request->password);

            $user = User::create($request_all);
            $user->save();

            $default_role = Role::where('name', 'user')->first();
            $user->roles()->attach( $default_role );
        } catch ( Exception $exception ) {
            return responseFromCode($exception->getMessage());
        }

        return responseFromCode(121000, $user);
    }

        /** Helpfer functions **/
    /**
     * @description Validates the entries when creating a user
     * @param Request $request
     * @throws Exception
     */
    function validateUser ( request $request ) {

        $rules = array(
            'firstname'    => ['required'],
            'lastname'     => ['required'],
            'email'        => ['unique:users,email', 'email'],
            'password'     => ['required', 'min:6'],
            // 'password'     => ['required', 'min:6', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/'/*, 'confirmed'*/],
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            throw new Exception(122000);
        }
    }
}
