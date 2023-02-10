<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['id' => 1, 'user_id' => 3, 'order_firstname' => 'Valery ', 'order_lastname' => 'Roy', 'order_adresse' => '895 rue Saint-Pierre, Sherbrooke, QC J1H 4L7', 'order_email' => 'valeryroy@hotmail.com', 'order_phone' => '5147543954', 'delivery_id' => 1, 'portion_id' => 3, 'order_total' => '30$'],
            ['id' => 2, 'user_id' => 3, 'order_firstname' => 'Mary ', 'order_lastname' => 'Lu', 'order_adresse' => '345 rue Portland, Sherbrooke, QC J15 4H7', 'order_email' => 'mariel@hotmail.com', 'order_phone' => '5141234561', 'delivery_id' => 2, 'portion_id' => 4, 'order_total' => '32$'],
        ]);
    }
}
