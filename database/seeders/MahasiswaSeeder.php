<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
        [
            'npm' => '5520124090',
            'nidn' => '1234567890',
            'nama' => 'Nabhila',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'npm' => '5520124098',
            'nidn' => '0987654321',
            'nama' => 'Dita',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
}
}

