<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Estara — Sistem Manajemen Perkebunan</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600,700&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { font-family: 'Figtree', sans-serif; }
            .estara-gradient { background: linear-gradient(135deg, #0f766e 0%, #14b8a6 100%); }
        </style>
    </head>
    <body class="antialiased bg-gray-50 text-gray-900">
        <div class="min-h-screen flex flex-col">
            <!-- Header -->
            <header class="estara-gradient text-white py-6">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-teal-600 font-bold text-xl">
                            E
                        </div>
                        <div>
                            <h1 class="text-xl font-bold tracking-tight">Estara</h1>
                            <p class="text-sm text-teal-100">Sistem Manajemen Perkebunan Kelapa Sawit</p>
                        </div>
                    </div>
                    <nav class="flex items-center gap-6">
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="text-sm font-medium hover:text-teal-200 transition">Masuk</a>
                            @endif
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-white text-teal-700 px-4 py-2 rounded-md font-medium hover:bg-teal-50 transition">Daftar</a>
                            @endif
                        @else
                            <a href="{{ route('dashboard') }}" class="text-sm font-medium hover:text-teal-200 transition">Dashboard</a>
                            <a href="{{ route('profile') }}" class="text-sm font-medium hover:text-teal-200 transition">Profile</a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="text-sm font-medium hover:text-teal-200 transition">Keluar</button>
                            </form>
                        @endguest
                    </nav>
                </div>
            </header>

            <!-- Hero -->
            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Kelola Perkebunan Anda dengan Mudah</h2>
                    <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                        Estara membantu Anda mengelola data master perkebunan: perusahaan, kebun (estate), afdeling, blok, departemen, jabatan, dan karyawan secara terstruktur dan terintegrasi.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        @guest
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-6 py-3 bg-teal-600 text-white font-medium rounded-lg hover:bg-teal-700 transition">Mulai Sekarang</a>
                            @endif
                        @else
                            <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-teal-600 text-white font-medium rounded-lg hover:bg-teal-700 transition">Buka Dashboard</a>
                        @endguest
                    </div>
                </div>
            </section>

            <!-- Fitur -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Fitur Utama</h3>
                        <p class="text-gray-600">Semua yang Anda butuhkan untuk manajemen perkebunan</p>
                    </div>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                            <div class="w-12 h-12 bg-teal-100 text-teal-600 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Manajemen Perusahaan</h4>
                            <p class="text-sm text-gray-600">Kelola data perusahaan induk, alamat, NPWP, dan kontak.</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                            <div class="w-12 h-12 bg-teal-100 text-teal-600 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Manajemen Kebun &amp; Afdeling</h4>
                            <p class="text-sm text-gray-600">Data kebun dengan lokasi GIS, luas tanam, dan pembagian afdeling.</p>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                            <div class="w-12 h-12 bg-teal-100 text-teal-600 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M43 17v2m0 0v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-2m0 0V5a2 2 0 012-2h28a2 2 0 012 2v6m0 0l-6 6m-6-6l6 6"></path></svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Data Karyawan</h4>
                            <p class="text-sm text-gray-600">Kelola data karyawan, departemen, dan jabatan secara terstruktur.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="bg-white border-t border-gray-200 py-6 mt-auto">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center text-sm text-gray-500">
                    <div>Estara &copy; {{ date('Y') }}</div>
                    <div>Laravel v{{ Illuminate\Foundation\Application::VERSION }}</div>
                </div>
            </footer>
        </div>
    </body>
</html>