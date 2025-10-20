@extends('layouts.dashboard')

@section('content')
<div class="max-w-xl mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6">Tambah Gambar Galeri</h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium">Judul</label>
            <input type="text" name="judul" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block font-medium">Upload Foto</label>
            <input type="file" name="foto" class="w-full" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection
