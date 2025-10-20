@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white shadow-md rounded p-6 mt-10">
    <h1 class="text-2xl font-bold mb-6 text-blue-900">📝 Tambah Profil Sekolah</h1>

    <form action="{{ route('profil.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block font-medium">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Alamat</label>
            <input type="text" name="alamat" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Visi</label>
            <textarea name="visi" class="w-full border rounded px-3 py-2" required></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Misi</label>
            <textarea name="misi" class="w-full border rounded px-3 py-2" required></textarea>
        </div>

        <div class="mb-6">
            <label class="block font-medium">Motto</label>
            <input type="text" name="motto" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded shadow">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
