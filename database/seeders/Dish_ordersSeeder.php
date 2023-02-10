<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Dish_ordersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dish_order')->insert([
            ['id' => 1, 'dish_id' => 1, 'order_id' => 1],
            ['id' => 2, 'dish_id' => 2, 'order_id' => 2],
            ['id' => 3, 'dish_id' => 3, 'order_id' => 2],
            ]);
    }
}
