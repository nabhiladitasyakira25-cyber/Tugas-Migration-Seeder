<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosen')->insert([
        [
            'nidn' => '1234567890',
            'nama' => 'Pak Budi',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nidn' => '0987654321',
            'nama' => 'Bu Sari',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
    }
}
