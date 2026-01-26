<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Guru ATT') }}
        </h2>
    </x-slot>

    <div class="bg-white rounded-xl shadow-lg p-4 md:p-6">
        {{-- Header Konten --}}
        <div class="flex items-center justify-between border-b pb-4 mb-4">
            <div class="flex items-center space-x-2 text-gray-700">
                <i data-lucide="users-2" class="w-6 h-6"></i>
                <h2 class="text-xl font-semibold">Dashboard Guru ATT</h2>
            </div>              
        </div>

        {{-- Isi Halaman --}}
        <div class="overflow-x-auto rounded-lg border">
            
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="bg-yellow-100 p-4 rounded">
                    <p class="text-sm">Nilai Belum Selesai</p>
                    <p class="text-2xl font-bold">{{ $nilaiDraft }}</p>
                </div>

                <div class="bg-green-100 p-4 rounded">
                    <p class="text-sm">Nilai Terkunci</p>
                    <p class="text-2xl font-bold">{{ $nilaiTerkunci }}</p>
                </div>
            </div>

            <h2 class="font-semibold mb-2">Kelas yang Diampu</h2>
            <ul class="bg-white rounded shadow divide-y">
                @forelse ($kelas as $item)
                    <li class="p-3">
                        {{ $item->kelas->nama_kelas }}
                    </li>
                @empty
                    <li class="p-3 text-gray-500">Belum ada kelas</li>
                @endforelse
            </ul>
            
        </div>
    </div>
    
</x-app-layout>