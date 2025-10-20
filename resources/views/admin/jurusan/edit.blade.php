@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-blue-700 mb-6 border-b pb-2">✏️ Edit Jurusan</h1>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nama" class="block font-semibold text-gray-700">Nama Jurusan</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $jurusan->nama) }}"
                   class="w-full mt-1 p-2 border border-gray-300 rounded focus:ring focus:ring-blue-200" required>
        </div>

        <div>
            <label for="deskripsi" class="block font-semibold text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4"
                      class="w-full mt-1 p-2 border border-gray-300 rounded focus:ring focus:ring-blue-200">{{ old('deskripsi', $jurusan->deskripsi) }}</textarea>
        </div>

        <div class="flex justify-between items-center mt-6">
            <a href="{{ route('jurusan.index') }}"
               class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold px-4 py-2 rounded transition">⬅️ Kembali</a>
            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded transition">💾 Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection
