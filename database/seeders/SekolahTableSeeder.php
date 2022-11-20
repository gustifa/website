<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SekolahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sekolahs')->insert([
            //admin
            [
                'npsn' => '123456',
                'nama' => 'SMK N 1 Kinali',
                'nss' => '111111',
                'alamat' => 'Jalan Teuku Umar KM1',
                'provinsi' => 'Sumatera Barat',
            ],

        ]);
    }
}
