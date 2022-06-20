<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\Setting;
use App\Http\Resources\Settings\Setting as SettingResource;

use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Factory;

use \Validator;
use Exception;

class SettingController extends Controller {

	/**
	 * Throws an exception if validation fails, otherwise nothing will be returned
	 *
	 * @param Request $request
	 * @return mixed|Exception
	 *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
	 *
     * @author Simon Marcel Linden
	 */
	function validateSetting(request $request): mixed {
		$rules = [
			'id' 	=> 'required_without:title',
			'value' => 'required',
		];
		$messages = [
			'id.required_without' => 'The id field is required when title is not present.',
			'value.required' => 'The value field is required.'
		];

		$validator = Validator::make($request->all(), $rules, $messages);

		if ($validator->fails()) {
			if ($validator->messages()->get('id'))
				throw new Exception(92020);
			else
				throw new Exception(92021);
		}
	}

	/**
	 * Shows the complete config.
	 *
	 * @return \Illuminate\Http\Response
     * @author Simon Marcel Linden
	 */
	public function index() {
		if(($setting = Setting::getAllSettings()) == null) {
			return responseFromCode(92000);
		}
		return responseFromCode(91000, $setting);
	}

	/**
	 * Resolve the given $key from the config.
	 * Ideally, Value should match the value passed to config().
	 *
	 * @param  string $key
	 * @return \Illuminate\Http\Response
     * @author Simon Marcel Linden
	 */
	public function show($key) {
		if(($setting = Setting::get($key)) == null) {
			return responseFromCode(92010);
		}
		return responseFromCode(91010, $setting);
	}

	/**
	 * Set/Update the specified configuration value..
	 * Ideally, Value should match the value passed to config().
	 *
	 * @param Request $request
	 * @param Factory $cache
	 * @param Setting $setting
	 *
	 * @return \Illuminate\Http\Response
     * @author Simon Marcel Linden
	 */
	public function update(Request $request, Factory $cache, Setting $setting) {
		if ($request->isMethod('PATCH')) {
			try {
				$this->validateSetting($request);

				if( $request->get('id'))
					$setting = Setting::where('id', $request->get('id'))->first();
				else
					$setting = Setting::where('title', $request->get('title'))->first();

				if(!$setting) {
					return responseFromCode(92010);
				}

				$setting = new SettingResource($setting);
				$setting->update($request->all());
				// forgot cache & reload setting via ServieProvider
				Setting::flushCache();
			} catch ( Exception $exception ) {
				return responseFromCode($exception->getMessage());
			}
			return responseFromCode(91020);
		}

		return responseFromCode(92000);
	}

	/**
	 * Createe the specified configuration value.
	 *
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\Response
     * @author Simon Marcel Linden
	 */

	public function store(Request $request) {
		$rules 		= ['title' => 'required', 'value' => 'required',];

		$request_for_setting = $request->all();
		$request_for_options = $request->get('elements');
		if($request->input('elements'))
			unset($request_for_setting['elements']);

		// Check if all validation rules for the setting are met
		if (($validator = Validator::make($request->all(), $rules))->fails()) {
			if ($validator->messages()->get('title'))
				return responseFromCode(92022);
			else
				return responseFromCode(92021);
		} else {
			if(Setting::has($request->get('title')))
				return responseFromCode(92011);
		}

		// Check if all validation rules for the option are met
		if($request->input('elements')) {
			foreach($request->get('elements') as $item) {
				$rules = ['name' => 'required', 'value' => (isset($item['rules'])) ? $item['rules'] : 'required',];

				if (($validator = Validator::make($item, $rules))->fails()) {
					if ($validator->messages()->get('name'))
						return responseFromCode(92050);
					else
						return responseFromCode(92051);
				}
			}
		}

		$setting = Setting::create($request_for_setting);
		$setting->elements()->createMany($request_for_options);
		$setting = new SettingResource($setting);

		Setting::flushCache();
		return responseFromCode(91030, $setting);
	}
}
