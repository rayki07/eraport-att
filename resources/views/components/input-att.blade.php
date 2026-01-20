
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
    
    <input 
        type="{{ $type }}" 
        id="{{ $name }}" 
        name="{{ $name }}"
        {{-- Menggunakan $attributes->merge() untuk menambahkan kelas default Tailwind --}}
        {{ $attributes->merge(['class' => 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 text-sm']) }}
        value="{{ $value }}"
        {{ $required ??  '' }}
        maxlength="{{ $maxLength ?? '' }}"
        min="0"
        max="100"
        placeholder="{{ $placeholder ?? 'Nilai (0 - 100)' }}"
    >

    {{-- Tempat untuk error PHP (dari Laravel validation saat submit) --}}
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror

    {{-- Tempat untuk error JavaScript (validasi instan) --}}
    <p id="{{ $name }}-error" class="text-red-500 text-sm mt-1" style="display: none;"></p>




 <script>
    // Ambil elemen-elemen yang dibutuhkan dari DOM
    const inputElement = document.getElementById('{{ $name }}'); // Ganti 'harga' dengan {{ $name }} di Blade
    const errorElement = document.getElementById('{{ $name }}-error'); // Ganti 'harga-error' dengan {{ $name }}-error di Blade

    // Pastikan elemen ditemukan sebelum melanjutkan
    if (!inputElement || !errorElement) {
        console.error("Elemen input atau error tidak ditemukan!");
        // Hentikan eksekusi script jika elemen tidak ada
    } else {
        // Ambil nilai min dan max dari atribut HTML dan konversi ke Number
        // Gunakan || 0 sebagai fallback jika atribut tidak ada
        const minValue = Number(inputElement.min) || 0;
        const maxValue = Number(inputElement.max) || Infinity;

        // Fungsi untuk melakukan validasi
        function validateRange() {
            // Ambil nilai dari input dan konversi ke Number
            const value = Number(inputElement.value);

            // Cek apakah input kosong
            if (inputElement.value === '') {
                // Jika kosong, sembunyikan error dan hapus class border
                errorElement.textContent = '';
                errorElement.style.display = 'none';
                inputElement.classList.remove('border-red-500');
                return; // Hentikan fungsi di sini
            }

            // Cek apakah nilai yang dimasukkan valid (bukan NaN) dan berada di luar jangkauan
            if (isNaN(value) || value < minValue || value > maxValue) {
                // Jika validasi gagal
                // Gunakan backtick (`) untuk template literal
                errorElement.textContent = `Nilai harus antara ${minValue} dan ${maxValue}.`;
                errorElement.style.display = 'block';
                inputElement.classList.add('border-red-500');
            } else {
                // Jika validasi sukses
                errorElement.textContent = '';
                errorElement.style.display = 'none';
                inputElement.classList.remove('border-red-500');
            }
        }

        // BENAR: Tambahkan event listener di luar fungsi, agar hanya didaftarkan sekali
        // 'blur': validasi terjadi saat user klik di luar input
        inputElement.addEventListener('blur', validateRange);
        // 'input': validasi terjadi secara real-time saat user mengetik
        inputElement.addEventListener('input', validateRange);
    }
</script>