@extends('layouts.app')

@section('content')
    <div class="p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold">Dashboard Admin</h1>
        <p class="mt-4">Selamat datang di halaman dashboard admin. Anda sudah login.</p>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-6">
            <a href="{{ route('profil.index') }}" class="bg-blue-600 text-white px-4 py-3 rounded shadow">Kelola Profil</a>
            <a href="{{ route('jurusan.index') }}" class="bg-green-600 text-white px-4 py-3 rounded shadow">Kelola Jurusan</a>
            <a href="{{ route('galeri.index') }}" class="bg-purple-600 text-white px-4 py-3 rounded shadow">Kelola Galeri</a>
            <a href="{{ route('berita.index') }}" class="bg-yellow-600 text-white px-4 py-3 rounded shadow">Kelola Berita</a>
            <a href="{{ route('kontak.index') }}" class="bg-red-600 text-white px-4 py-3 rounded shadow">Kelola Kontak</a>
        </div>
    </div>
@endsection
