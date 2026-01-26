<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pilih Kelas
        </h2>
    </x-slot>

    <div class="bg-white rounded-xl shadow-lg p-4 md:p-6">
        {{-- Header Konten --}}
        <div class="flex items-center justify-between border-b pb-4 mb-4">
            <div class="flex items-center space-x-2 text-gray-700">
                <i data-lucide="users-2" class="w-6 h-6"></i>
                <h2 class="text-xl font-semibold">Pilih Kelas</h2>
            </div>              
        </div>

        {{-- Isi Halaman --}}
        <div class="overflow-x-auto rounded-lg border">
            
            <h1 class="text-xl font-bold mb-4">Pilih Kelas</h1>

                <ul class="bg-white rounded shadow divide-y">
                @foreach ($kelas as $item)
                    <li class="p-3">
                        <a href="{{ route('guru_att.nilai.siswa', $item->kelas->id) }}"
                        class="text-blue-600 hover:underline">
                            {{ $item->kelas->nama_kelas }}
                        </a>
                    </li>
                @endforeach
                </ul>
            
        </div>
    </div>
    
</x-app-layout>