<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_client = new Role();
        $role_client->name = 'client';
        $role_client->save();

        $role_manager = new Role();
        $role_manager->name = 'manager';
        $role_manager->save();
    }
}
