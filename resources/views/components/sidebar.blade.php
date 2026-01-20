


<!-- 1. Sidebar (Menu Samping) -->
    <aside id="sidebar" class="sidebar fixed inset-y-0 left-0 z-40 flex flex-col w-64 bg-gray-800 text-white shadow-xl md:relative md:translate-x-0">
        <!-- Header Sidebar Merah -->
        <header class="h-16 flex items-center justify-between px-4 bg-red-600 shadow-lg">
            <h1 class="text-xl font-bold tracking-tight truncate uppercase">{{ Auth::user()->name }}</h1>
            <button id="close-sidebar" class="md:hidden p-1 rounded hover:bg-red-700">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
        </header>

        <!-- Profil Guru -->
        <div class="p-4 border-b border-gray-700">
            <div class="flex items-center space-x-3">
                <img src="https://placehold.co/40x40/4a5568/ffffff?text=G" alt="Foto Profil" class="w-10 h-10 rounded-full object-cover ring-2 ring-gray-600">
                <div>
                    <a href="{{ route('dashboard') }}" class="text-sm font-semibold">{{ Auth::user()->name }}</a>
                    <p class="text-xs text-gray-400">{{ date('d F Y') }}</p>
                </div>
            </div>
        </div>

        <!-- Konten Menu -->
        <nav class="sidebar-content flex-grow overflow-y-auto pt-2 pb-4 space-y-1">
            <x-side-style href="{{ route('siswa.index') }}" :active="request()->is('siswa')">
                <i data-lucide="users" class="w-5 h-5 mr-3"></i>
                <span>Daftar Siswa</span>
            </x-side-style>

            <x-side-style href="{{ route('kelas.index') }}" :active="request()->is('kelas')">
                <i data-lucide="clipboard-list" class="w-5 h-5 mr-3"></i>
                <span>Daftar Kelas</span>
            </x-side-style>

            <x-side-style href="{{ route('guru.index') }}" :active="request()->is('guru')">
                <i data-lucide="users" class="w-5 h-5 mr-3"></i>
                <span>Daftar Guru</span>
            </x-side-style>

            <x-side-style href="{{ route('mapel.index') }}" :active="request()->is('lessons')">
                <i data-lucide="book" class="w-5 h-5 mr-3"></i>
                <span>Daftar Mata Pelajaran</span>
            </x-side-style>

            <x-side-style href="{{ route('tahunajaran.index') }}" :active="request()->is('tahunajaran')">
                <i data-lucide="calendar" class="w-5 h-5 mr-3"></i>
                <span>Daftar Tahun Ajaran</span>
            </x-side-style>

            <x-side-style href="{{ route('ujian.index') }}" :active="request()->is('ujian')">
                <i data-lucide="calendar" class="w-5 h-5 mr-3"></i>
                <span>Ujian</span>
            </x-side-style>

            <x-side-style href="{{ route('ujian.item.index') }}" :active="request()->is('ujian.item')">
                <i data-lucide="calendar" class="w-5 h-5 mr-3"></i>
                <span>Ujian item</span>
            </x-side-style>

            <x-side-style href="{{ route('nilai.index') }}" :active="request()->is('nilai.index')">
                <i data-lucide="calendar" class="w-5 h-5 mr-3"></i>
                <span>Daftar Nilai</span>
            </x-side-style>

            <x-side-style href="{{ route('att.index') }}" :active="request()->is('att.index')">
                <i data-lucide="calendar" class="w-5 h-5 mr-3"></i>
                <span>Nilai ATT</span>
            </x-side-style>

            <x-side-style href="{{ route('raport.index') }}" :active="request()->is('att.index')">
                <i data-lucide="calendar" class="w-5 h-5 mr-3"></i>
                <span>Raport</span>
            </x-side-style>

            <!-- Submenu Mata Pelajaran -->
            <div class="pt-3 px-4">
                <p class="text-xs font-semibold uppercase text-gray-400 mb-2">Mata Pelajaran</p>
                <div class="space-y-1">

                    @foreach ($sidebar_mapel as $item)
                        <div href="/#" class="flex justify-between items-center py-1.5 px-2 text-sm text-gray-300 hover:bg-gray-700 rounded-lg">
                            <a href="{{ route('mapel.index', $item->id) }}">
                                <span class="truncate">{{ $item->nama_pelajaran }}</span>    
                            </a>
                            <span class="text-xs bg-green-500 rounded-full px-2 py-0.5 font-bold">100%</span>
                        </div>
                        
                        {{-- <x-side-style href="/lessons/{{ $lessons->id }}" :active="request()->is('lessons/{{ $lessons->id }}')">
                            <span>{{ $lessons->lesson }}</span>
                        </x-side-style> --}}
                    @endforeach
                    
                    </div>
                </div>
            </div>
        </nav>
    </aside>