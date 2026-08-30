<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Berita - Seruli</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/admin/editberita.css') }}" />
</head>

<body>

    <!-- SIDEBAR -->
    @include('partials.admin.sidebar')

    <!-- MAIN WRAPPER -->
    <div class="main-wrapper">
        @include('partials.admin.topbar')

        <div class="content-body">

            <!-- Form Edit Berita -->
            <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" class="form-posting">
                @csrf
                @method('PUT')

                <input type="hidden" name="redirect_to" value="{{ url()->previous() }}">

                <!-- 1. Form Upload Gambar -->
                <div class="form-group">
                    <label class="form-label">Gambar Berita</label>
                    <div class="dropzone-box" onclick="document.getElementById('imageInput').click()">
                        <!-- Gambar opsional (bila tidak diisi tetap pakai gambar lama) -->
                        <input type="file" name="imageberita" id="imageInput" accept="image/*" hidden onchange="previewImage(this)">
                        
                        <div class="dropzone-content" id="dropzoneContent" style="display: {{ $berita->imageberita ? 'none' : 'block' }};">
                            <ion-icon name="cloud-upload-outline" class="upload-icon"></ion-icon>
                            <p class="dropzone-title">Masukkan foto berita baru disini</p>
                            <p class="dropzone-subtitle">PNG, JPG maksimal 5 MB</p>
                        </div>
                        
                        <!-- Menampilkan preview gambar yang sudah tersimpan -->
                        <img id="imagePreview" class="image-preview" src="{{ asset('storage/' . $berita->imageberita) }}" alt="Preview" style="display: {{ $berita->imageberita ? 'block' : 'none' }};" />
                    </div>
                    @error('imageberita') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <!-- 2. Input Judul -->
                <div class="form-group">
                    <label class="form-label" for="judul">Judul Berita</label>
                    <div class="input-wrapper">
                        <input type="text" name="judulberita" id="judul" maxlength="255" placeholder="Masukkan judul berita disini" required oninput="updateCharCount(this)" value="{{ old('judulberita', $berita->judulberita) }}">
                        <span class="char-counter" id="charCounter">{{ strlen($berita->judulberita) }}/255</span>
                    </div>
                    @error('judulberita') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <!-- 3. Input Deskripsi -->
                <div class="form-group">
                    <label class="form-label" for="deskripsi">Deskripsi Berita</label>
                    <textarea name="deskripsiberita" id="deskripsi" rows="5" placeholder="Masukkan deskripsi berita disini" required>{{ old('deskripsiberita', $berita->deskripsiberita) }}</textarea>
                    @error('deskripsiberita') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <!-- 4. Dropdown Kategori -->
                <div class="form-group">
                    <label class="form-label" for="kategori">Kategori Berita</label>
                    <div class="select-wrapper">
                        <select name="kategoriberita" id="kategori" required>
                            <option value="" disabled>Pilih kategori berita</option>
                            <option value="Prestasi" {{ old('kategoriberita', $berita->kategoriberita) == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                            <option value="Pelatihan" {{ old('kategoriberita', $berita->kategoriberita) == 'Pelatihan' ? 'selected' : '' }}>Pelatihan</option>
                            <option value="Kegiatan" {{ old('kategoriberita', $berita->kategoriberita) == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                            <option value="Pengumuman" {{ old('kategoriberita', $berita->kategoriberita) == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                        </select>
                        <ion-icon name="chevron-down-outline" class="select-icon"></ion-icon>
                    </div>
                    @error('kategoriberita') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <!-- 5. Group Tombol Aksi -->
                <div class="form-actions">
                    <button type="submit" class="btn-submit">Simpan Perubahan</button>
                    <a href="{{ url()->previous() }}" class="btn-cancel">Batal</a>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript Interaktif -->
    <script>
        function updateCharCount(input) {
            const counter = document.getElementById('charCounter');
            counter.innerText = `${input.value.length}/255`;
        }

        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            const content = document.getElementById('dropzoneContent');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    content.style.display = 'none';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>