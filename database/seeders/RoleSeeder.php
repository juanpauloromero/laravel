<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => '1',
                'role_name' => 'Admin',
                'created_at' => '2022-08-27'
            ], [
                'id' => '2',
                'role_name' => 'Client',
                'created_at' => '2022-08-26'

            ], [
                'id' => '3',
                'role_name' => 'SuperUser',
                'created_at' => '2022-08-28'
            ]

        ]);
    }
}
