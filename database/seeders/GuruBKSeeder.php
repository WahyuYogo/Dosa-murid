<?php

namespace Database\Seeders;

use App\Models\GuruBK;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruBKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GuruBK::create([
            'kode_bk' => 'BK001',
            'nama' => 'Syukurillah',
            'nip' => '123456789',
            'alamat' => 'Bangsri',
            'no_telepon' => '08218392849',
        ]);
        GuruBK::create([
            'kode_bk' => 'BK002',
            'nama' => 'Titik',
            'nip' => '926381727',
            'alamat' => 'Bangsri',
            'no_telepon' => '08219327374',
        ]);
    }
}
