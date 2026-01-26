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

        
        <div class="overflow-x-auto rounded-lg border">
            {{-- Isi Halaman --}}

            <div class="bg-white p-6 rounded-xl shadow-lg max-w-6xl mx-auto">
                {{-- Header Form --}}
                <div class="border-b pb-4 mb-6">
                    <h2 class="text-xl font-bold text-gray-800">
                        Input Nilai Mata Pelajaran ATT (Agama, Tahsin, Tahfidz)
                    </h2>
                    <p id="nama_lengkap" class="text-3xl font-extrabold text-blue-400 mt-1">{{ $siswa->nama_lengkap }}</p>
                    <p class="text-sm text-gray-500 mt-1">Kelas: {{ $kelas->rombel }} {{ $kelas->nama_kelas }} | NISN: {{ $siswa->nisn }} | Tahun Ajaran: {{ $tahun->tahun_mulai }}/{{ $tahun->tahun_selesai }} | Semester {{ $semester->nama_semester }}</p>
                </div>

                {{-- Tabs Navigasi UTAMA --}}
                <div class="flex border-b mb-6 overflow-x-auto">
                    <button type="button" onclick="showTab('bacaan')" class="tab-button py-2 px-4 text-sm font-semibold border-b-2 border-red-500 text-red-600 transition-colors duration-300 whitespace-nowrap">
                        <i data-lucide="notebook" class="w-4 h-4 inline mr-2"></i> Bacaan (Bacaan)
                    </button>
                    <button type="button" onclick="showTab('tahfidz')" class="tab-button py-2 px-4 text-sm font-semibold border-b-2 border-red-500 text-red-600 transition-colors duration-300 whitespace-nowrap">
                        <i data-lucide="book-open" class="w-4 h-4 inline mr-2"></i> Tahfidz (Hafalan)
                    </button>
                    <button type="button" onclick="showTab('lisan_hadis')" class="tab-button py-2 px-4 text-sm font-semibold text-gray-500 hover:text-gray-700 transition-colors duration-300 whitespace-nowrap">
                        <i data-lucide="message-square" class="w-4 h-4 inline mr-2"></i> Lisan (Doa & Hadis)
                    </button>
                    <button type="button" onclick="showTab('praktik_ibadah')" class="tab-button py-2 px-4 text-sm font-semibold text-gray-500 hover:text-gray-700 transition-colors duration-300 whitespace-nowrap">
                        <i data-lucide="hand" class="w-4 h-4 inline mr-2"></i> Praktik (Salat & Wudu)
                    </button>
                    <button type="button" onclick="showTab('tulis_adab')" class="tab-button py-2 px-4 text-sm font-semibold text-gray-500 hover:text-gray-700 transition-colors duration-300 whitespace-nowrap">
                        <i data-lucide="pen-tool" class="w-4 h-4 inline mr-2"></i> Tulis & Adab
                    </button>
                </div>


                {{-- Form Utama --}}
                <form action="{{ route('guru_att.nilai.store') }}" method="POST" class="space-y-6">
                    @csrf 

                    <!-- Kirim Tersembunyi -->
                    <div>
                        <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
                        <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
                        <input type="hidden" name="ujian_id" value="{{ $ujian->id }}">
                        <input type="hidden" name="semester_id" value="{{ $semester->id }}">
                        <input type="hidden" name="tahun_ajaran_id" value="{{ $tahun->id }}">
                    </div>
                    


                    {{-- 1. Tab Bacaan --}}
                    <div id="content-bacaan" class="tab-content">
                        
                        <!-- input jenis bacaan -->
                        <label class="text-lg font-semibold mb-4 text-red-700">Jenis Bacaan</label>
                        <div class="p-4 border rounded-lg bg-gray-50 mb-6">
                            <p class="block text-sm font-medium text-gray-700 mb-1"><span class="font-bold">PILIH</span> Pencapaian siswa dalam bacaan (Iqra, Tahsin, Al-Qur'an)</p>
                            <div class="flex gap-4 mt-1">
                                <label>
                                    <input type="radio" name="jenis_bacaan" value="iqra" checked
                                    @checked(old('jenis_bacaan', $nilaiBacaan->jenis ?? null) == 'iqra')>
                                    Iqra
                                </label>

                                <label>
                                    <input type="radio" name="jenis_bacaan" value="tahsin"
                                    @checked(old('jenis_bacaan', $nilaiBacaan->jenis ?? null) == 'tahsin')>
                                    Tahsin
                                </label>
                                <label>
                                    <input type="radio" name="jenis_bacaan" value="alquran"
                                    @checked(old('jenis_bacaan', $nilaiBacaan->jenis ?? null) == 'alquran')>
                                    Al-Qur’an
                                </label>
                            </div>
                            @error('jenis_bacaan') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                        </div>
                        
                        <!-- memasukkan data bacaan -->
                        <h3 class="text-lg font-semibold mb-4 text-red-700">Bacaan Iqra / Tahsin</h3>

                        <div class="p-4 border rounded-lg bg-gray-50 mb-6">
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 lg:grid-cols-3 gap-4">
                                <div>
                                    <x-input-att
                                        name="bacaan_jilid" 
                                        type="number"
                                        label="Jilid / juz"
                                        class="text-sm"
                                        placeholder="Jilid (1-6)"
                                        value="{{ $nilaiBacaan->jilid ?? $nilaiBacaan->juz ?? '' }}"
                                    />
                                    @error('bacaan_jilid')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <x-input-att
                                        name="bacaan_halaman" 
                                        type="number"
                                        label="Halaman / ayat "
                                        class="text-sm"
                                        placeholder="Halaman (1-31)"
                                        value="{{ $nilaiBacaan->halaman ?? $nilaiBacaan->ayat ?? '' }}"
                                    />
                                    @error('bacaan_halaman')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <x-input-att
                                        name="bacaan_nilai" 
                                        type="number"
                                        label="Nilai"
                                        class="text-sm"
                                        value="{{ $nilaiBacaan->nilai ?? '' }}"
                                    />
                                    @error('bacaan_nilai')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <x-input-att
                                        name="bacaan_surah" 
                                        type="text"
                                        label="Surah"
                                        class="text-sm"
                                        placeholder="An-Naba"
                                        value="{{ $nilaiBacaan->surah ?? '' }}"
                                    />
                                    @error('bacaan_surah')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 1. Tab: Tahfidz (DIPISAHKAN DENGAN SUB-TAB) --}}
                    <div id="content-tahfidz" class="tab-content">
                        <h3 class="text-lg font-semibold mb-4 text-red-700">Tahfidz (Hafalan Surah) - Nilai Maks 100 per Surah</h3>
                        
                        {{-- Sub-Tabs Navigasi Juz --}}
                        <div class="flex border-b mb-6 overflow-x-auto">
                            @foreach ($groupSurah as $index => $listSurah)
                                {{-- Menggunakan clean_key untuk ID tab --}}
                                <button type="button" onclick="showSubTab('{{ $index }}')" id="sub-tab-{{ $index }}" 
                                    class="sub-tab-button py-2 px-4 text-xs font-medium transition-colors duration-300 whitespace-nowrap 
                                    @if ($loop->first) border-b-2 border-red-400 text-red-500 @else text-gray-500 hover:text-gray-700 @endif">
                                    {{ $index }} ({{ count($listSurah) }} Surah)
                                </button>
                            @endforeach
                        </div>

                        {{-- Konten Sub-Tabs Juz --}}
                        @foreach ($groupSurah as $index => $listSurah)
                            <div id="sub-content-{{ $index }}" class="sub-tab-content p-4 border rounded-lg bg-gray-50 mb-6 
                                @if (!$loop->first) hidden @endif">
                                
                                <h4 class="font-bold mb-4 text-gray-800 border-b pb-2">{{ $index }}</h4>
                                
                                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                                    @foreach ($listSurah as $surah)
                                            
                                        {{-- @php
                                            $nilai = $existingNilai->where('ujian_item_id', $surah->id)->where('siswa_id', $siswa->id)->first();
                                        @endphp --}}

                                        <div>

                                            <x-input-att 
                                                name="nilai[{{ $siswa->id }}][{{ $surah->id }}]" 
                                                type="number"
                                                label="{{ $surah->nama_item }}"
                                                class="text-sm"
                                                value="{{ $nilai->nilai ?? '' }}"
                                            />
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach



                        <!-- menambah input nilai Hafalan -->
                        <div class="p-4 border rounded-lg bg-gray-50 mb-6">
                            <div class="grid gap-4 mb-4">
                                <x-input-att
                                    name="target" 
                                    type="text"
                                    label="Nilai Pencapaian"
                                    class="text-sm"
                                    value="{{ old('target', $nilaiHafalan->target ?? '') }}"
                                    placeholder="Al-Qori'ah - An-Naba"
                                />
                                @error('target')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-1 gap-4">
                                <x-input-att
                                    name="nilai_pencapaian" 
                                    type="number"
                                    label="Nilai Pencapaian"
                                    class="text-sm"
                                    value="{{ old('nilai_percapaian', $nilaiHafalan->nilai ?? '') }}"
                                />
                                @error('nilai_pencapaian')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- 2. Tab: Lisan (Doa & Hadis) --}}
                    <div id="content-lisan_hadis" class="tab-content hidden">
                        <h3 class="text-lg font-semibold mb-4 text-red-700">Ujian Lisan (Doa & Hadis) - Nilai Maks 100 per Item</h3>

                        {{-- Ujian Lisan Doa --}}
                        <div class="mb-6 p-4 border rounded-lg bg-gray-50">
                            <h4 class="font-bold mb-3 text-gray-800 flex items-center"><i data-lucide="speech" class="w-4 h-4 mr-2"></i> 4 Doa Harian</h4>
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                @php $doas = ['Doa Sebelum Tidur', 'Doa Bangun Tidur', 'Doa Sebelum Makan', 'Doa Sesudah Makan']; @endphp
                                @foreach ($doa as $index => $item)

                                    {{-- @php
                                        $nilai = $existingNilai->where('ujian_item_id', $item->id)->where('siswa_id', $siswa->id)->first();
                                    @endphp --}}

                                    <div>

                                        <x-input-att 
                                            name="nilai[{{ $siswa->id }}][{{ $item->id }}]" 
                                            type="number"
                                            label="{{ $item->nama_item }}"
                                            value="{{ $nilai->nilai ?? '' }}"
                                            />

                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Ujian Lisan Hadis --}}
                        <div class="mb-6 p-4 border rounded-lg bg-gray-50">
                            <h4 class="font-bold mb-3 text-gray-800 flex items-center"><i data-lucide="clipboard-list" class="w-4 h-4 mr-2"></i> 4 Hadis Pilihan</h4>
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                @foreach ($hadis as $index => $h)

                                    {{-- @php
                                        $nilai = $existingNilai->where('ujian_item_id', $h->id)->where('siswa_id', $siswa->id)->first();
                                    @endphp --}}

                                    <div>

                                        <x-input-att 
                                            name="nilai[{{ $siswa->id }}][{{ $h->id }}]" 
                                            type="number"
                                            label="{{ $h->nama_item }}"
                                            value="{{ $nilai->nilai ?? '' }}"
                                            />

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- 3. Tab: Praktik Ibadah (Salat & Wudu) --}}
                    <div id="content-praktik_ibadah" class="tab-content hidden">
                        <h3 class="text-lg font-semibold mb-4 text-red-700">Ujian Praktik Ibadah - Nilai Total Komponen</h3>

                        {{-- Ujian Praktik Salat (13 Gerakan) --}}
                        <div class="mb-6 p-4 border rounded-lg bg-gray-50">
                            <h4 class="font-bold mb-3 text-gray-800 flex items-center"><i data-lucide="user-check" class="w-4 h-4 mr-2"></i> Praktik Shalat (13 Komponen)</h4>
                            <p class="text-xs text-gray-600 mb-3">Nilai harus diisi per komponen. Total nilai akan dihitung otomatis oleh sistem (*Simulasi: masukkan nilai akhir*).</p>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                @foreach ($sholat as $index => $gerakan)

                                    {{-- @php
                                        $nilai = $existingNilai->where('ujian_item_id', $gerakan->id)->where('siswa_id', $siswa->id)->first();
                                    @endphp --}}

                                    <div>

                                        <x-input-att 
                                            name="nilai[{{ $siswa->id }}][{{ $gerakan->id }}]" 
                                            type="number"
                                            label="{{ $gerakan->nama_item }}"
                                            value="{{ $nilai->nilai ?? '' }}"
                                            /> 

                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        {{-- Ujian Praktik Wudu (10 Gerakan) --}}
                        <div class="mb-6 p-4 border rounded-lg bg-gray-50">
                            <h4 class="font-bold mb-3 text-gray-800 flex items-center"><i data-lucide="droplet" class="w-4 h-4 mr-2"></i> Praktik Wudu (10 Komponen)</h4>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                @foreach ($wudhu as $index => $gerak)

                                    {{-- @php
                                        $nilai = $existingNilai->where('ujian_item_id', $gerak->id)->where('siswa_id', $siswa->id)->first();
                                    @endphp --}}

                                    <div>

                                        <x-input-att 
                                            name="nilai[{{ $siswa->id }}][{{ $gerak->id }}]" 
                                            type="number"
                                            label="{{ $gerak->nama_item }}"
                                            value="{{ $nilai->nilai ?? '' }}"
                                            /> 
                                            
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- 4. Tab: Ujian Tulis & Adab --}}
                    <div id="content-tulis_adab" class="tab-content hidden">
                        <h3 class="text-lg font-semibold mb-4 text-red-700">Ujian Tulis & Penilaian Adab</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                           {{--  @php
                                $nilaiTulis = $existingNilai->where('ujian_item_id', $kitabah->id)->where('siswa_id', $siswa->id)->first();
                                $nilaiAdab = $existingNilai->where('ujian_item_id', $adab->id)->where('siswa_id', $siswa->id)->first();
                            @endphp --}}

                            {{-- Ujian Tulis --}}
                            <div class="p-4 border rounded-lg bg-gray-50">
                                <x-input-att 
                                    name="nilai[{{ $siswa->id }}][{{ $kitabah->id }}]" 
                                    type="number"
                                    label="Nilai Ujian Tulis"
                                    class="text-lg font-bold"
                                    value="{{ $nilaiTulis->nilai ?? ''}}"
                                    />                
                            </div>

                            {{-- Nilai Adab --}}
                            <div class="p-4 border rounded-lg bg-gray-50">
                                <x-input-att 
                                    name="nilai[{{ $siswa->id }}][{{ $adab->id }}]" 
                                    type="number"
                                    label="Nilai Adab / Sikap (Angka Akhir)"
                                    class="text-lg font-bold"
                                    value="{{ $nilaiAdab->nilai ?? ''}}"
                                    />
                            </div>


                        </div>
                    </div>
                    
                    {{-- Tombol Simpan Akhir --}}
                    <div class="flex justify-end space-x-4 pt-4 border-t mt-6">
                        <a href="{{-- {{ route('raport.index') }} --}}" class="inline-flex items-center py-2 px-4 bg-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-300 transition-colors shadow-md">
                            <i data-lucide="x" class="w-4 h-4 mr-2"></i>
                            Batal & Kembali
                        </a>
                        <button type="submit" class="inline-flex items-center py-2 px-6 bg-red-600 text-white font-extrabold rounded-lg hover:bg-red-700 transition-colors shadow-xl">
                            <i data-lucide="save" class="w-5 h-5 mr-2"></i>
                            SIMPAN SEMUA NILAI ATT
                        </button>
                    </div>
                </form>
            </div>

            <!-- script buka tab -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    showTab('bacaan'); // Pilih tampilkan tab secara default
                    lucide.createIcons();
                });

                function showTab(tabName) {
                    const tabs = ['bacaan', 'tahfidz', 'lisan_hadis', 'praktik_ibadah', 'tulis_adab'];

                    tabs.forEach(tab => {
                        const button = document.querySelector(`.tab-button[onclick="showTab('${tab}')"]`);
                        const content = document.getElementById(`content-${tab}`);

                        if (tab === tabName) {
                            // Aktifkan tab yang dipilih
                            button.classList.add('border-red-500', 'text-red-600');
                            button.classList.remove('border-transparent', 'text-gray-500');
                            content.classList.remove('hidden');
                            
                            // Khusus untuk tab Tahfidz, aktifkan sub-tab pertama
                            if (tabName === 'tahfidz') {
                                // Temukan tombol sub-tab pertama dan klik
                                const firstSubTabButton = document.querySelector('.sub-tab-button');
                                if (firstSubTabButton) {
                                    // Ambil ID tab dari onclick
                                    const subTabIdMatch = firstSubTabButton.getAttribute('onclick').match(/showSubTab\('([^']+)'\)/);
                                    if (subTabIdMatch && subTabIdMatch[1]) {
                                        showSubTab(subTabIdMatch[1]);
                                    }
                                }
                            }
                        } else {
                            // Non-aktifkan tab lainnya
                            button.classList.remove('border-red-500', 'text-red-600');
                            button.classList.add('border-transparent', 'text-gray-500');
                            content.classList.add('hidden');
                        }
                    });
                }

                function showSubTab(subTabName) {
                    const subTabButtons = document.querySelectorAll('.sub-tab-button');
                    const subTabContents = document.querySelectorAll('.sub-tab-content');

                    subTabButtons.forEach(button => {
                        // Hapus style aktif dari semua tombol
                        button.classList.remove('border-red-400', 'text-red-500');
                        button.classList.add('text-gray-500', 'hover:text-gray-700');
                        
                        // Cek apakah tombol saat ini sesuai dengan subTabName
                        const subTabIdMatch = button.getAttribute('onclick').match(/showSubTab\('([^']+)'\)/);
                        if (subTabIdMatch && subTabIdMatch[1] === subTabName) {
                            // Aktifkan style tombol yang dipilih
                            button.classList.add('border-b-2', 'border-red-400', 'text-red-500');
                            button.classList.remove('text-gray-500', 'hover:text-gray-700');
                        }
                    });

                    subTabContents.forEach(content => {
                        // Sembunyikan semua konten sub-tab
                        content.classList.add('hidden');
                        
                        // Tampilkan konten sub-tab yang dipilih
                        if (content.id === `sub-content-${subTabName}`) {
                            content.classList.remove('hidden');
                        }
                    });
                }
            </script>

            <!-- script mengisi surah di tab bacaan -->
            <script>
            document.querySelectorAll('input[name="jenis_bacaan"]').forEach(radio => {
                radio.addEventListener('change', function () {
                    const jenis = this.value;

                    const jilid   = document.getElementById('bacaan_jilid');
                    const halaman = document.getElementById('bacaan_halaman');
                    const surah   = document.getElementById('bacaan_surah');

                    // Reset
                    surah.disabled = true;
                    surah.value = '';

                    jilid.disabled = false;
                    halaman.disabled = false;

                    if (jenis === 'alquran') {
                        surah.disabled = false;
                        /* jilid.disabled = true;
                        jilid.value = ''; */
                    }
                    
                });
            });
            </script>

            {{-- selesai Data --}}
            
        </div>
    </div>
    
</x-app-layout>