@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto py-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Kelola Galeri</h1>
        <a href="{{ route('galeri.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Foto</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">{{ session('success') }}</div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($galeris as $galeri)
            <div class="bg-white rounded shadow overflow-hidden">
                <img src="{{ asset('storage/' . $galeri->foto) }}" class="w-full h-48 object-cover" alt="{{ $galeri->judul }}">
                <div class="p-4">
                    <h2 class="font-bold">{{ $galeri->judul }}</h2>
                    <div class="flex justify-between mt-2">
                        <a href="{{ route('galeri.edit', $galeri->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST" onsubmit="return confirm('Hapus gambar ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
