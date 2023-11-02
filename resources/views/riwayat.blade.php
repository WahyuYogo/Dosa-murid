<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-200">

    <div class="bg-orange-500 text-white font-bold text-4xl py-10">
        <div class="container mx-auto text-center">
            RIWAYAT KEJAHILAN KECIL
        </div>
    </div>

    <div class="mt-4 bg-white rounded-xl p-4 container mx-auto">
        <div class="text-2xl font-semibold">NIS PELANGGAR : {{ $nis }}</div>
    </div>
    <div class="mt-4 bg-white rounded-xl p-4 container mx-auto mb-3">
        @if ($nis == null)
            <div class="text-lg text-center">AKSI TIDAK DITEMUKAN</div>
        @else
            <div class="flex flex-warp justify-center mb-3">
                <img src="img/no_profile.jpg" alt="" class="rounded-full w-40">
            </div>
            <div class="text-lg font-semibold text-center mb-5 text-blue-500">{{ $totalpoint }} magic point</div>
            <div class="text-2xl font-extrabold mb-3 text-center">{{ $siswa->nama }}</div>
            <div class="text-sm font-semibold mb-2 text-center text-gray-700">NISN : {{ $siswa->nisn }}</div>
            <div class="text-sm font-semibold mb-2 text-center text-gray-700">Kelas : {{ $siswa->kelas->nama_kelas }}</div>
            <div class="text-sm font-semibold mb-2 text-center text-gray-700">Jurusan : {{ $siswa->kelas->jurusan->nama_jurusan }}
            </div>

    </div>
    <div class="mt-4 bg-white rounded-xl p-4 container mx-auto mb-10">
        <table class="w-full text-lg text-left text-gray-700 ">
            <thead class="text-gray-900 uppercase bg-orange-300">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Kode
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pelanggaran
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
                </tr>
            </thead>
            @foreach($aksi as $aksi)
            @foreach($aksi->ListPelanggaran as $pelanggaran)
            <tr class="bg-white border-b ">
                <td class="px-6 py-4">
                    {{ $pelanggaran->kode_pelanggaran }}
                </td>
                <td class="px-6 py-4">
                    {{ $pelanggaran->pelanggaran->nama_pelanggaran }}
                </td>
                <td class="px-6 py-4">
                    {{ $pelanggaran->keterangan }}
                </td>
                <td class="px-6 py-4">

                </td>
            </tr>
            @endforeach
            @endforeach
    </div>
    @endif

</body>

</html>
