<?php

namespace Database\Seeders;

use Database\Seeders\Settings\SettingSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            PermissionSeeder::class,
			SettingSeeder::class,
        ]);
    }
}
