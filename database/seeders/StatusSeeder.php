<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('statuses')->insert([
            ['code' => 1, 'name' => 'Pinjam'],
            ['code' => 2, 'name' => 'Kembali'],
            ['code' => 3, 'name' => 'Ditolak'],
            ['code' => 4, 'name' => 'Menunggu'],
            ['code' => 5, 'name' => 'Diterima'],
        ]);
    }
}
