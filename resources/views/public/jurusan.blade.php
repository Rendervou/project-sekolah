@extends('layouts.app')

@section('content')
<div class="bg-gray-100 py-12">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-blue-900">3 <span class="text-blue-800 underline decoration-yellow-400">Jurusan IT</span></h2>
        <p class="text-gray-700 mt-2">Berikut ini adalah Jurusan IT yang terdapat di sekolah kami</p>
    </div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-6">
        @foreach ($jurusans as $jurusan)
        <div class="bg-white rounded-lg shadow-md p-6 flex flex-col justify-between">
            <div>
                <h3 class="text-lg font-bold text-white bg-yellow-400 inline-block px-4 py-1 rounded mb-4">
                    {{ $jurusan->nama }}
                </h3>
                <p class="text-gray-700 mb-2">Jurusan yang berfokus pada Kompetensi:</p>
                <ul class="list-disc pl-5 space-y-1 text-gray-600">
                    @foreach (explode("\n", $jurusan->deskripsi) as $point)
                        @if (trim($point) !== '')
                            <li>{{ $point }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="mt-6">
                <a href="#" class="block text-center bg-indigo-900 text-white px-4 py-2 rounded hover:bg-indigo-800 transition">
                    📥 Download Silabus
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
