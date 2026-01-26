<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Pilih Siswa
        </h2>
    </x-slot>

    <div class="bg-white rounded-xl shadow-lg p-4 md:p-6">
        {{-- Header Konten --}}
        <div class="flex items-center justify-between border-b pb-4 mb-4">
            <div class="flex items-center space-x-2 text-gray-700">
                <i data-lucide="users-2" class="w-6 h-6"></i>
                <h2 class="text-xl font-semibold">Pilih Siswa</h2>
            </div>              
        </div>

        {{-- Isi Halaman --}}
        <div class="overflow-x-auto rounded-lg border">
            
            <h1 class="text-xl font-bold mb-4">Pilih Siswa</h1>

            <ul class="bg-white rounded shadow divide-y">
            @foreach ($siswa as $index =>$item)
                <li class="p-3">
                    <a href="{{ route('guru_att.nilai.form', [$kelasId, $item->id]) }}"
                    class="text-blue-600 hover:underline">
                        {{ $index + 1 }} {{ $item->siswa->nama_lengkap }}
                    </a>
                </li>
            @endforeach
            </ul>
            
        </div>
    </div>
    
</x-app-layout>