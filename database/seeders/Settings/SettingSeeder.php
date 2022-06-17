<?php

namespace Database\Seeders\Settings;

use App\Models\Settings\Setting;
use App\Models\Settings\Option;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $contact = Setting::create([
            "title" => "contact",
            "desc" => "Contact information",
            "value" => "Contact"
        ]);

		$option = Option::create([
			"name" => 'phone',
			'type' => "text",
			'label' => 'Phone',
            "value" => "+49 (0)2221 0815998",
			'rules' => 'required',
			'setting_id' => $contact->id,
		]);

		$option = Option::create([
			"name" => 'address',
			'type' => "text",
			'label' => 'Address',
            "value" => "2684 Buckhannan Avenue",
			'rules' => 'required',
			'setting_id' => $contact->id,
		]);

		$option = Option::create([
			"name" => 'city',
			'type' => "text",
			'label' => 'City',
            "value" => "Syracuse",
			'rules' => 'required',
			'setting_id' => $contact->id,
		]);

		$option = Option::create([
			"name" => 'state',
			'type' => "text",
			'label' => 'State',
            "value" => "New York",
			'rules' => 'required',
			'setting_id' => $contact->id,
		]);

		$option = Option::create([
			"name" => 'country',
			'type' => "text",
			'label' => 'Country',
            "value" => "USA",
			'rules' => 'required',
			'setting_id' => $contact->id,
		]);
    }
}
