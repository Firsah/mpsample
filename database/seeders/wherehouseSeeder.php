<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class wherehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wherehouse')->insert([
            ['wherehouse_code' => '105','wherehouse_name' => 'Gudang 1(Satu)', 'province' => 'Jawa Tengah','city' => 'Cilacap'],
            ['wherehouse_code' => '153','wherehouse_name' => 'Gudang 2(Dua)', 'province' => 'DKI Jakarta','city' => 'Jakarta Selatan'],
            ['wherehouse_code' => '444','wherehouse_name' => 'Gudang 3(Satu)', 'province' => 'Jawa Timur','city' => 'Surabaya'],
        ]);
    }
}
