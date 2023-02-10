<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'id' => 1,
                'role_id' => 1,
                'user_firstname' => 'Benoit',
                'user_lastname' => 'Fuentes',
                'user_adresse' => '475 Rue du Cégep, Sherbrooke, QC J1E 4K1',
                'email' => 'benoitf@hotmail.com',
                'user_phone' => '819345678',
                'password' => Hash::make('1234'),
                'created_at' => '2022-08-26',
            ],

            [
                'id' => 2,
                'role_id' => 3,
                'user_firstname' => 'Juan',
                'user_lastname' => 'Romero',
                'user_adresse' => '925 Rue Lacharité, Sherbrooke, QC J1L 1P4',
                'email' => 'jpri@gmail.com.com',
                'user_phone' => '8191234567',
                'password' => Hash::make('1234'),
                'created_at' => '2022-09-02',
            ],

            [
                'id' => 3,
                'role_id' => 2,
                'user_firstname' => 'Valery',
                'user_lastname' => 'Roy',
                'user_adresse' => '895 rue Saint-Pierre, Sherbrooke, QC J1H 4L7',
                'email' => 'valeryroy@hotmail.com',
                'user_phone' => '5147543954',
                'password' => Hash::make('1234'),
                'created_at' => '2022-09-06',
            ],
        ]);
    }
}
