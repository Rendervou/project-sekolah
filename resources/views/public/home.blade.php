@extends('layouts.app')

@section('content')
<div class="bg-white py-16 px-4 md:px-10 lg:px-20 flex flex-col-reverse lg:flex-row items-center justify-between">
    <!-- Kiri: Teks -->
    <div class="lg:w-1/2 space-y-6">
        <p class="text-yellow-500 font-semibold text-sm tracking-wide uppercase">Telah dipercaya oleh 2000+ orang tua & siswa</p>

        <h1 class="text-4xl md:text-5xl font-extrabold text-blue-900 leading-tight">
            Kompetensi <span class="text-yellow-500 underline decoration-4">Teruji</span><br>
            dengan Portofolio Level Industri
        </h1>

        <p class="text-gray-800 text-lg">
            <span class="font-semibold text-blue-900">Sekolah Vokasi Informatika Terbaik</span> dengan <span class="font-bold">3 Jurusan di Bidang IT</span>:
        </p>

        <ul class="space-y-2 text-base text-gray-800">
            <li class="flex items-center">
                <span class="text-yellow-500 text-xl mr-2">✔</span> Teknik Komputer dan Jaringan
            </li>
            <li class="flex items-center">
                <span class="text-yellow-500 text-xl mr-2">✔</span> Desain Komunikasi Visual
            </li>
            <li class="flex items-center">
                <span class="text-yellow-500 text-xl mr-2">✔</span> Rekayasa Perangkat Lunak
            </li>
        </ul>

        <div class="flex flex-wrap gap-4 pt-6">
            <a href="#" class="px-6 py-3 border-2 border-blue-900 text-blue-900 font-semibold rounded-md hover:bg-blue-900 hover:text-white transition duration-200">
                Lihat Program Sekolah
            </a>
            <a href="#" class="px-6 py-3 bg-yellow-500 text-white font-semibold rounded-md hover:bg-yellow-600 transition duration-200">
                📝 Daftar Sekarang
            </a>
        </div>
    </div>

    <!-- Kanan: Gambar -->
    <div class="lg:w-1/2 mb-10 lg:mb-0 text-center">
        <img src="{{ asset('images/logopesat.png') }}" alt="Siswa SMK Pesat" class="w-full max-w-md mx-auto shadow-lg">
    </div>
</div>
@endsection
