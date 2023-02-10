<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DeliveriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveries')->insert([
            ['id' => 1, 'delivery_description' => 'Livre'],
            ['id' => 2, 'delivery_description' => 'Non-Livre'],

            ]);
    }
}
