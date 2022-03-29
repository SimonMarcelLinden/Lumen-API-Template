<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $admin = new Role();
        $admin->name = 'admin';
        $admin->description = 'Administrator';
        $admin->save();

        $developer = new Role();
        $developer->name = 'operator';
        $developer->description = 'Operator';
        $developer->save();

        $user = new Role();
        $user->name = 'user';
        $user->description = 'User';
        $user->save();

    }
}
