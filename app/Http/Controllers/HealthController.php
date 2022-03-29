<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller {

    public function version(){
        return App()->app->version();
    }

    public function health() {
        return responseFromCode( 101000, ['version' => App()->app->version()]);
    }
}
