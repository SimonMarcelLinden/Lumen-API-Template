<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $role = Role::where('name', 'admin')->first();

        $user = User::create([
            "firstname" => "John",
            "lastname" => "Doe",
            "email" => "admin@lumen-template.de",
            "email_verified_at" => Carbon::now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $user->roles()->attach( $role );

        $role = Role::where('name', 'user')->first();
        User::factory(10)->create()->each(function ($user) use ($role) {
            $user->roles()->attach( $role );
        });
    }
}
