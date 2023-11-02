<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            "kode_kelas" => "RPL001",
            "nama_kelas" => "X RPL 1",
            "kode_jurusan" => "RPL",
        ]);
        Kelas::create([
            "kode_kelas" => "TO002",
            "nama_kelas" => "X TO 1",
            "kode_jurusan" => "TO",
        ]);
        Kelas::create([
            "kode_kelas" => "OTKP003",
            "nama_kelas" => "X OTKP 1",
            "kode_jurusan" => "OTKP",
        ]);
        Kelas::create([
            "kode_kelas" => "AKL004",
            "nama_kelas" => "X AKL 1",
            "kode_jurusan" => "AKL",
        ]);
        Kelas::create([
            "kode_kelas" => "PM005",
            "nama_kelas" => "X PM 1",
            "kode_jurusan" => "PM",
        ]);
    }
}
