<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwal')->insert([
        [
            'kode_matakuliah' => 'IF000001',
            'nidn' => '1234567890',
            'kelas' => 'C',
            'hari' => 'Senin',
            'jam' => '2026-04-17 08:00:00',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'kode_matakuliah' => 'IF000002',
            'nidn' => '0987654321',
            'kelas' => 'C',
            'hari' => 'Rabu',
            'jam' => '2026-04-17 10:00:00',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
    }
}
