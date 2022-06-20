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
		$app = Setting::create([
			'title' => 'app_name',
			'desc' => 'App Name',
			'value' => 'Fachschaft ET - API',
			'icon' => 'glyphicon-home'
		]);

		$contact = Setting::create([
			'title' => 'contact',
			'desc' => 'Contact information',
			'value' => 'Contact'
		]);

		$option = Option::create([
			'name' => 'phone',
			'type' => 'text',
			'label' => 'Phone',
			'value' => '+49 (0)2221 0815998',
			'rules' => 'required',
			'setting_id' => $contact->id,
		]);

		$option = Option::create([
			'name' => 'address',
			'type' => 'text',
			'label' => 'Address',
			'value' => '2684 Buckhannan Avenue',
			'rules' => 'required',
			'setting_id' => $contact->id,
		]);

		$option = Option::create([
			'name' => 'city',
			'type' => 'text',
			'label' => 'City',
			'value' => 'Syracuse',
			'rules' => 'required',
			'setting_id' => $contact->id,
		]);

		$option = Option::create([
			'name' => 'state',
			'type' => 'text',
			'label' => 'State',
			'value' => 'New York',
			'rules' => 'required',
			'setting_id' => $contact->id,
		]);

		$option = Option::create([
			'name' => 'country',
			'type' => 'text',
			'label' => 'Country',
			'value' => 'USA',
			'rules' => 'required',
			'setting_id' => $contact->id,
		]);

		$mail = Setting::create([
			'title' => 'mail',
			'desc' => 'Mail Settings',
			'value' => 'Mail'
		]);

		$option = Option::create([
			'name' => 'mailer',
			'type' => 'text',
			'label' => 'Mailer',
			'value' => 'smtp',
			'rules' => 'required',
			'setting_id' => $mail->id,
		]);

		$option = Option::create([
			'name' => 'host',
			'type' => 'text',
			'label' => 'Host',
			'value' => 'smtp.mailtrap.io',
			'rules' => 'required',
			'setting_id' => $mail->id,
		]);

		$option = Option::create([
			'name' => 'port',
			'type' => 'number',
			'label' => 'Port',
			'value' => '2525',
			'rules' => 'required',
			'setting_id' => $mail->id,
		]);

		$option = Option::create([
			'name' => 'username',
			'type' => 'text',
			'label' => 'Username',
			'value' => 'your username',
			'rules' => 'required',
			'setting_id' => $mail->id,
		]);

		$option = Option::create([
			'name' => 'password',
			'type' => 'text',
			'label' => 'Password',
			'value' => 'your password',
			'rules' => 'required',
			'setting_id' => $mail->id,
		]);

		$option = Option::create([
			'name' => 'eycryption',
			'type' => 'text',
			'label' => 'Eycryption',
			'value' => 'tls',
			'rules' => 'required',
			'setting_id' => $mail->id,
		]);
	}
}
