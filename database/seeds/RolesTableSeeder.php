<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')->insert([
        	'name' => 'Manager',
        	'level' => 1
        ]);

        DB::table('roles')->insert([
        	'name' => 'Client',
        	'level' => 0
        ]);
    }
}
