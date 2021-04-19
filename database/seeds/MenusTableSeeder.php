<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'slug'       => 'home',
                'name'       => 'Home',
                'url'        => '/',
                'order'      => 0,
                'is_primary' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
//            [
//                'slug'       => 'about',
//                'name'       => 'About',
//                'name_np'       => 'About',
//                'url'        => 'about-us',
//                'order'      => 1,
//                'is_primary' => 1,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ],
//            [
//                'slug'       => 'services',
//                'name'       => 'Services',
//                'name_np'       => 'Services',
//                'url'        => 'services',
//                'order'      => 2,
//                'is_primary' => 1,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ],
//            [
//                'slug'       => 'branches',
//                'name'       => 'Branches',
//                'name_np'       => 'Branches',
//                'url'        => 'branches',
//                'order'      => 3,
//                'is_primary' => 1,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ],
//            [
//                'slug'       => 'resources',
//                'name'       => 'Resources',
//                'name_np'       => 'Resources',
//                'url'        => '#',
//                'order'      => 4,
//                'is_primary' => 1,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ],
//            [
//                'slug'       => 'information',
//                'name'       => 'Information',
//                'name_np'       => 'Information',
//                'url'        => '#',
//                'order'      => 5,
//                'is_primary' => 1,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ],
//            [
//                'slug'       => 'plans',
//                'name'       => 'Plans',
//                'name_np'       => 'Plans',
//                'url'        => '#',
//                'order'      => 6,
//                'is_primary' => 1,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ],
//            [
//                'slug'       => 'contact',
//                'name'       => 'Contact',
//                'name_np'       => 'Contact',
//                'url'        => 'contact',
//                'order'      => 7,
//                'is_primary' => 1,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ]
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('menus')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('menus')->insert($menus);

    }
}
