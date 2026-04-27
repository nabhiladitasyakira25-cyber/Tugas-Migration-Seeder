<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('krs')->insert([
        [
            'npm' => '5520124090',
            'kode_matakuliah' => 'IF000001',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'npm' => '5520124098',
            'kode_matakuliah' => 'IF000002',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
    }
}
