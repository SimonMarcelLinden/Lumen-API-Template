<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Routing\Controller as BaseController;

class CustomerLoginController extends BaseController {
    /**
     * The request instance.
     * @var Request
     */
    private $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    /**
     * Create a new token.
     *
     * @param Customer $customer
     * @return string
     */
    protected function jwt(Customer $customer): string {
        $payload = [
            'iss' => "lumen-jwt",       // Issuer of the token
            'sub' => $customer->id,         // Subject of the token
            'iat' => time(),            // Time when JWT was issued.
            'exp' => time() + 60 * 60   // Expiration time
        ];

        return JWT::encode($payload, env('JWT_SECRET'));
    }

    /**
     * Authenticate a Customer and return the token if the provided credentials are correct.
     *
     * @param Customer $customer
     * @return mixed
     * @throws ValidationException
     */
    public function authenticate(Customer $customer) {
        $this->validate($this->request, [
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        $customer = Customer::where('email', $this->request->input('email'))->first();

        if (!$customer) {
            return responseFromCode( 112000 );
        }

        if (Hash::check($this->request->input('password'), $customer->password)) {
            $additionalData = [ 'token' => $this->jwt($customer) ];

            return responseFromCode( 111000, array_merge( $customer->toArray(), $additionalData ) );
        }

        return responseFromCode( 112000 );
    }
}
