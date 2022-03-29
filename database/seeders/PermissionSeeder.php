<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $permission_ids = []; // an empty array of stored permission IDs
        // iterate though all routes

        $routes = \Route::getRoutes();
        // dd($routes);
        // iterate though all routes
        foreach ($routes as $route) {
            $action     = $route['action']['uses'];
            $_action    = explode('@',$action);
            $controller = $_action[0];
            $method     = end($_action);
            $uri        = $route['uri'];

            $permission_check = Permission::where( ['controller' => $controller, 'method' => $method] )->first();
            if (!$permission_check) {
                $permission             = new Permission;
                $permission->key        = $route['method'];
                $permission->controller = $controller;
                $permission->method     = $method;
                $permission->uri        = $uri;
                $permission->save();
                // add stored permission id in array
                $permission_ids[] = $permission->id;
            }
        }
        // Find admin role.
        $role = Role::where('name', 'admin')->first();
        // Atache all permissions to admin role
        $role->permissions()->attach($permission_ids);
    }
}
