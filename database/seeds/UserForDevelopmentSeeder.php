<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserForDevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'id' => '1',
            'name' => 'Super Admin',
            'email' => 'super_admin@example.com',
            'role' => '1',
            'password' => bcrypt('superadmin')
        ]);

        DB::table('users')->insert([
        	'id' => '2',
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => '2',
            'password' => bcrypt('admin123')
        ]);

        DB::table('users')->insert([
        	'id' => '3',
            'name' => 'Teacher',
            'email' => 'teacher@example.com',
            'role' => '3',
            'password' => bcrypt('teacher123')
        ]);

        DB::table('users')->insert([
        	'id' => '4',
            'name' => 'Student',
            'email' => 'student@example.com',
            'role' => '4',
            'password' => bcrypt('student123')
        ]);

        $faker = Faker::create();
 
    	foreach(range(5,20) as $i){
 
    	    DB::table('users')->insert([
                'id' => $i,
    			'name' => $faker->name,
    			'email' => $faker->email,
    			'role' => $faker->numberBetween(1,4),
                'password' => bcrypt('password'),
    		]);
 
    	}
    }
}
