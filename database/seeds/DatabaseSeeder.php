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
=======
        $this->call(RoleTableSeeder::class);
        $this->call(UserForDevelopmentSeeder::class);
>>>>>>> 46dff0d07655cfecc9d2f8bf2db6480ccfc570d0
    }
}
