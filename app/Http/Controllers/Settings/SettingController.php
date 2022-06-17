<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller {

	public function index(Request $request, Setting $settings) {
		return config('settings');
	}
}
