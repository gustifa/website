<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PresensiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presensis')->insert([
            //admin
            [
                'nama' => 'Muhammad Alfatih Riski',
                'kelas' => 'XII TJK1',
                'sholat' => 'Zuhur',
            ],

                        [
                'nama' => 'Muhammad Gibran Askara',
                'kelas' => 'XII TJK2',
                'sholat' => 'Ashar',
            ],

        ]);
    }
}
