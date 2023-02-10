<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portions')->insert([
            ['id' => 1, 'portion_name' => '1 personne', 'portion_price' => '14', 'created_at' => '2022-08-26'],

            ['id' => 2, 'portion_name' => '2 personnes', 'portion_price' => '24', 'created_at' => '2022-08-26'],

            ['id' => 3, 'portion_name' => '3 personnes', 'portion_price' => '30', 'created_at' => '2022-08-26'],

            ['id' => 4, 'portion_name' => '4 personnes', 'portion_price' => ' 32', 'created_at' => '2022-08-26'],

            ['id' => 5, 'portion_name' => '5 personnes', 'portion_price' => '37.50', 'created_at' => '2022-08-26'],

            ['id' => 6, 'portion_name' => '6 personnes', 'portion_price' => '42', 'created_at' => '2022-08-26'],
        ]);
    }
}
