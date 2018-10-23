<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        $role = Role::create(['name' => 'user']);
        $role = Role::create(['name' => 'moderator']);
        $role = Role::create(['name' => 'admin']);
    }
}
