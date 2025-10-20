@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <h2 class="text-xl font-bold text-blue-800 mb-4">Tambah Jurusan</h2>

    <form action="{{ route('jurusan.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-gray-700">Nama Jurusan</label>
            <input type="text" name="nama" id="nama" required class="w-full border px-3 py-2 rounded mt-1">
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="5" class="w-full border px-3 py-2 rounded mt-1"></textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
        <a href="{{ route('jurusan.index') }}" class="text-gray-600 ml-4">Kembali</a>
    </form>
</div>
@endsection
