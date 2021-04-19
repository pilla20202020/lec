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
        $this->call(UserTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
//        $this->call(PagesTableSeeder::class);
//        $this->call(SlidersTableSeeder::class);
    }
}
