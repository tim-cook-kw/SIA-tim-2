<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->call(RoleTableSeeder::class);
        $this->call(UserForDevelopmentSeeder::class);
>>>>>>> 46dff0d07655cfecc9d2f8bf2db6480ccfc570d0
=======
        $this->call(RoleTableSeeder::class);
        $this->call(UserForDevelopmentSeeder::class);
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
    }
}
