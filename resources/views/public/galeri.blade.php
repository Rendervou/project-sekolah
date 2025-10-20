@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10">
    <h2 class="text-3xl font-bold text-center text-blue-800 mb-8">Galeri Kegiatan Sekolah</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($galeris as $item)
            <div class="bg-white rounded shadow overflow-hidden">
                <img src="{{ asset('storage/' . $item->foto) }}" class="w-full h-48 object-cover" alt="{{ $item->judul }}">
                <div class="p-4 text-center font-semibold text-blue-700">{{ $item->judul }}</div>
            </div>
        @endforeach
    </div>
</div>
@endsection
