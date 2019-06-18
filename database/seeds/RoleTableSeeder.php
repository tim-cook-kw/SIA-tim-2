<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
        	'id' => '1',
        	'role' => 'Super Admin'
        ]);

        DB::table('role')->insert([
        	'id' => '2',
        	'role' => 'Admin'
        ]);

        DB::table('role')->insert([
        	'id' => '3',
        	'role' => 'Teacher'
        ]);

        DB::table('role')->insert([
        	'id' => '4',
        	'role' => 'Student'
        ]);
    }
    
}
