<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rak;
use App\Models\Directory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Rak::create([
            'name' => '2A',
            'slug' => '2a'
        ]);

        Rak::create([
            'name' => '4B',
            'slug' => '4b'
        ]);

        Directory::create([
            'rak_id' => 1,
            'mitra' => 'Sekolah Vokasi IPB',
            'kode_isolat' => 'ISO100',
            'jenis' => 'Bakteri',
            'tahun' => '2020',
            'keterangan' => 'Baik'
        ]);

        Directory::create([
            'rak_id' => 1,
            'mitra' => 'Balitro',
            'kode_isolat' => 'ISO120',
            'jenis' => 'Kuman',
            'tahun' => '2023',
            'keterangan' => 'Kurang Baik'
        ]);

        Directory::create([
            'rak_id' => 2,
            'mitra' => 'BSIP-TROA',
            'kode_isolat' => 'ISO220',
            'jenis' => 'Cacing',
            'tahun' => '2019',
            'keterangan' => 'Perlu Pengamatan'
        ]);
    }
}