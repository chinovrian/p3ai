<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role = [
        	[
        		'name' => 'Admin',
        		'display_name' => 'Administrator',
        		'description' => 'Semua Akses'
        	],
        	[
        		'name' => 'Kap3ai',
        		'display_name' => 'UserA-Kap3ai',
        		'description' => 'Sebagian Akses'
        	],
        	[
        		'name' => 'Dosen',
        		'display_name' => 'UserB-Dosen',
        		'description' => 'Sebagian Akses'
        	]
        ];

        foreach ($role as $key => $value) {
        	Role::create($value);
        }
    }
}