<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-white rounded-xl shadow-lg p-4 md:p-6">
        <!-- Header Konten -->
        <div class="flex items-center justify-between border-b pb-4 mb-4">
            <div class="flex items-center space-x-2 text-gray-700">
                <i data-lucide="users-2" class="w-6 h-6"></i>
                <h2 class="text-xl font-semibold">Seluruh Kelas</h2>
            </div>
            <a href="{{-- {{ route('ujian.item.create') }} --}}" class="flex items-center bg-blue-600 text-white text-sm font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 transition-colors">
                <i data-lucide="printer" class="w-4 h-4 mr-2"></i>
                Tambah Ujian
            </a>                
        </div>

        {{-- Isi Halaman --}}
        <div class="overflow-x-auto rounded-lg border">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white p-4 rounded shadow">
                    <p class="text-sm text-gray-500">Total Siswa</p>
                    <p class="text-2xl font-bold">{{ $totalSiswa }}</p>
                </div>

                <div class="bg-white p-4 rounded shadow">
                    <p class="text-sm text-gray-500">Total Guru</p>
                    <p class="text-2xl font-bold">{{ $totalGuru }}</p>
                </div>

                <div class="bg-white p-4 rounded shadow">
                    <p class="text-sm text-gray-500">Total Kelas</p>
                    <p class="text-2xl font-bold">{{ $totalKelas }}</p>
                </div>

                <div class="bg-white p-4 rounded shadow">
                    <p class="text-sm text-gray-500">Tahun Ajaran Aktif</p>
                    <p class="text-lg font-semibold">
                        {{ $tahun_ajaran_global }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>