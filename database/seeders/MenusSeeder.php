<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
        ['id' => 3, 'menu_name' => 'menu 1', 'menu_week' => '18 septembre - 25 septembre', 'dish_id' => 2],
        ['id' => 4, 'menu_name' => 'menu 1', 'menu_week' => '18 septembre - 25 septembre', 'dish_id' => 3],
        ['id' => 5, 'menu_name' => 'menu 1', 'menu_week' => '18 septembre - 25 septembre', 'dish_id' => 4],
        
        ]);
    }
}
