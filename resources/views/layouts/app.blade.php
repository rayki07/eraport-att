<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Eraport-att') }}</title>

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- Icons --}}
        <script src="https://unpkg.com/lucide@latest"></script>

        {{-- Scripts --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
        /* Mengatur font default */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }

        /* Transisi untuk sidebar */
        .sidebar {
            transition: transform 0.3s ease-in-out, width 0.3s ease-in-out;
        }

        .sidebar.closed {
            transform: translateX(-100%);
            width: 0;
            opacity: 0;
        }

        /* Custom scrollbar style untuk sidebar */
        .sidebar-content::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar-content::-webkit-scrollbar-thumb {
            background-color: #a0aec0;
            border-radius: 2px;
        }
        .sidebar-content::-webkit-scrollbar-track {
            background: transparent;
        }

        /* Style untuk progress bar */
        .progress-bar {
            height: 8px;
            border-radius: 4px;
        }

    </style>
    </head>
    <body class="font-sans antialiased bg-gray-100 flex min-h-screen">
        

            {{-- sidebar --}}
            <x-sidebar />

            {{-- @include('layouts.navigation') --}}

            {{-- Header halaman (opsional) --}}
            <div id="main-content" class="flex flex-col flex-1">

                {{-- Header atas --}}
                <header class="flex items-center justify-between h-16 bg-red-600 text-white px-4 shadow-md">
                    <button id="toggle-sidebar" class="p-1 rounded hover:bg-red-700">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>

                    <div>
                        <a>{{ $header ?? '' }}</a>
                    </div>

                    <div class="flex items-center space-x-4">
                        <span class="text-sm font-medium flex items-center">
                            <i data-lucide="calendar" class="w-4 h-4 mr-1"></i>
                            {{ $tahun_ajaran_global }}
                        </span>

                        {{-- User --}}
                        {{-- Settings Dropdown --}}
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    {{-- Authentication --}}
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>

                    </div>
                </header>

                {{-- Header halaman (opsional) --}}
                {{-- @isset($header)
                    <header class="bg-white dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset --}}

                {{-- Page Content --}}
                <main>
                    <x-alert />

                    {{--isi Halaman --}}
                    {{ $slot }}
                </main>
                {{-- Footer --}}
                <footer class="bg-white p-3 text-center text-xs text-gray-500 border-t">
                    © {{ date('Y') }} E-Rapor Sekolah — Firman Wahyudi
                </footer>
            </div>
        

        <script>
              // Inisialisasi Lucide Icons
        lucide.createIcons();

        const sidebar = document.getElementById('sidebar');
        const toggleSidebarButton = document.getElementById('toggle-sidebar');
        const closeSidebarButton = document.getElementById('close-sidebar');

        // Fungsi untuk membuka/menutup sidebar
        function toggleSidebar() {
            const isClosed = sidebar.classList.toggle('closed');

            // Untuk perangkat seluler (layar kecil), kita geser body sedikit
            if (window.innerWidth < 768) { // 768px adalah breakpoint 'md' di Tailwind
                if (isClosed) {
                    sidebar.style.transform = 'translateX(-100%)';
                } else {
                    sidebar.style.transform = 'translateX(0)';
                }
            }
        }

        // Event listener untuk tombol di header utama
        toggleSidebarButton.addEventListener('click', toggleSidebar);

        // Event listener untuk tombol tutup di dalam sidebar (hanya terlihat di mobile)
        closeSidebarButton.addEventListener('click', toggleSidebar);

        // Menutup sidebar secara default di perangkat seluler saat halaman dimuat
        if (window.innerWidth < 768) {
            sidebar.classList.add('closed');
            sidebar.style.transform = 'translateX(-100%)';
        } else {
            sidebar.classList.remove('closed');
            sidebar.style.transform = 'translateX(0)';
        }

        // Memastikan sidebar responsif saat ukuran jendela diubah
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                // Di desktop, pastikan sidebar selalu terbuka
                sidebar.classList.remove('closed');
                sidebar.style.transform = 'translateX(0)';
            } else if (!sidebar.classList.contains('closed')) {
                 // Di mobile, jika sidebar terbuka, pastikan transformnya nol
                 sidebar.style.transform = 'translateX(0)';
            }
        });
        </script>

    </body>
</html>
