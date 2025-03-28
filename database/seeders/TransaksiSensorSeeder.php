<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSensorSeeder extends Seeder
{
    /**
     * Jalankan Seeder.
     */
    public function run(): void
    {
        DB::table('transaksi_sensor')->insert([
            [
                'nama_sensor' => 'Sensor B',
                'nilai1' => 87,
                'nilai2' => 176,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sensor' => 'Sensor A',
                'nilai1' => 100,
                'nilai2' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
