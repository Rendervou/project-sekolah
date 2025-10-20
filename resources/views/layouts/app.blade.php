<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Pesat</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <header class="bg-blue-700 text-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="w-24 h-14">
                <img src="{{ asset('images/logopesat.png') }}" alt="Siswa SMK Pesat" class="w-full h-full object-contain">
            </div>

            <nav class="space-x-4">
                <a href="/" class="hover:underline">Beranda</a>
                <a href="/profil" class="hover:underline">Profil</a>
                <a href="/jurusan" class="hover:underline">Jurusan</a>
                <a href="/galeri" class="hover:underline">Galeri</a>
                <a href="/berita" class="hover:underline">Berita</a>
                <a href="/kontak" class="hover:underline">Kontak</a>
            </nav>

            <!-- Auth Section -->
            <div class="flex items-center gap-3">
                @auth
                    <a href="{{ route('dashboard') }}" class="bg-white text-blue-700 font-medium px-4 py-2 rounded hover:bg-blue-100 transition">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-white hover:underline">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-white hover:underline">Login</a>
                    <a href="{{ route('register') }}" class="text-sm text-white hover:underline">Register</a>
                @endauth
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center py-4 text-sm text-gray-600">
        &copy; {{ date('Y') }} SMK Pesat. All rights reserved.
    </footer>

</body>
</html>
