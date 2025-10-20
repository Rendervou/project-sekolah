@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-blue-800">Kelola Data Jurusan</h2>
        <a href="{{ route('jurusan.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Tambah Jurusan
        </a>
    </div>

    @if (session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full table-auto border border-collapse border-gray-200">
        <thead class="bg-gray-100">
            <tr class="text-left">
                <th class="border px-4 py-2">Nama Jurusan</th>
                <th class="border px-4 py-2">Deskripsi</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($jurusans as $jurusan)
                <tr>
                    <td class="border px-4 py-2">{{ $jurusan->nama }}</td>
                    <td class="border px-4 py-2">{{ Str::limit($jurusan->deskripsi, 80) }}</td>
                    <td class="border px-4 py-2 space-x-2">
                        <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                        <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus jurusan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center text-gray-500 py-4">Belum ada data jurusan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
