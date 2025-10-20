@extends('layouts.app')

@section('content')
<div class="bg-white py-12">
    <div class="text-center mb-12 px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-blue-900">
            Mengapa <span class="text-blue-800 underline decoration-yellow-400 decoration-[6px] underline-offset-4">Memilih {{ $profil->nama_sekolah }}</span>
        </h2>
        <p class="mt-4 text-lg text-gray-700 max-w-2xl mx-auto">
            Kami Fokus pada Kompetensi dan Pembentukan Karakter untuk siap terjun ke Industri, berikut adalah informasi utama dari sekolah kami.
        </p>
    </div>

    <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 bg-gray-50 rounded-xl shadow-md p-8">
        <div class="space-y-4 text-gray-800 text-lg">
            <p>
                <span class="font-semibold text-blue-800">🏫 Nama Sekolah:</span><br>
                {{ $profil->nama_sekolah }}
            </p>
            <p>
                <span class="font-semibold text-blue-800">📍 Alamat:</span><br>
                {{ $profil->alamat }}
            </p>
            <p>
                <span class="font-semibold text-blue-800">🎯 Visi:</span><br>
                {{ $profil->visi }}
            </p>
        </div>

        <div class="space-y-4 text-gray-800 text-lg">
            <p>
                <span class="font-semibold text-blue-800">🚀 Misi:</span><br>
                {!! nl2br(e($profil->misi)) !!}
            </p>
            <p>
                <span class="font-semibold text-blue-800">💡 Motto:</span><br>
                {{ $profil->motto }}
            </p>
        </div>
    </div>
</div>
@endsection
