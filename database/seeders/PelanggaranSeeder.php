<?php

namespace Database\Seeders;

use App\Models\Pelanggaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLG01',
            'nama_pelanggaran' => 'Terlambat',
            'poin' => '10'
        ]);
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLG02',
            'nama_pelanggaran' => 'Tidak memakai dasi',
            'poin' => '10'
        ]);
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLG03',
            'nama_pelanggaran' => 'Tidak memakai topi',
            'poin' => '10'
        ]);
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLG04',
            'nama_pelanggaran' => 'Lainnya',
            'poin' => '10'
        ]);
    }
}
