@extends('layouts.dashboard')

@section('content')
<div class="max-w-xl mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6">Edit Gambar Galeri</h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Judul</label>
            <input type="text" name="judul" value="{{ $galeri->judul }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-medium">Foto Saat Ini</label>
            <img src="{{ asset('storage/' . $galeri->foto) }}" class="w-40 h-32 object-cover mb-2">
        </div>

        <div>
            <label class="block font-medium">Ganti Foto (Opsional)</label>
            <input type="file" name="foto" class="w-full">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
    </form>
</div>
@endsection
