<?php

namespace Database\Seeders;

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
            $this->call(SeederUsers::class);
            $this->call(SeederUsersManager::class);
            $this->call(CategorySeeder::class);
            $this->call(KeyboardSeeder::class);
    }
}
