<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Galeri - Seruli</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/admin/editgaleri.css') }}" />
</head>

<body>

    <!-- SIDEBAR -->
    @include('partials.admin.sidebar')

    <!-- MAIN WRAPPER -->
    <div class="main-wrapper">
        @include('partials.admin.topbar')

        <div class="content-body">

            <!-- Form Edit galeri -->
            <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data" class="form-posting">
                @csrf
                @method('PUT')

                <!-- 1. Form Upload Gambar -->
                <div class="form-group">
                    <label class="form-label">Gambar Galeri</label>
                    <div class="dropzone-box" onclick="document.getElementById('imageInput').click()">
                        <!-- Gambar opsional (bila tidak diisi tetap pakai gambar lama) -->
                        <input type="file" name="imagegaleri" id="imageInput" accept="image/*" hidden onchange="previewImage(this)">
                        
                        <div class="dropzone-content" id="dropzoneContent" style="display: {{ $galeri->imagegaleri ? 'none' : 'block' }};">
                            <ion-icon name="cloud-upload-outline" class="upload-icon"></ion-icon>
                            <p class="dropzone-title">Masukkan foto galeri baru disini</p>
                            <p class="dropzone-subtitle">PNG, JPG maksimal 5 MB</p>
                        </div>
                        
                        <!-- Menampilkan preview gambar yang sudah tersimpan -->
                        <img id="imagePreview" class="image-preview" src="{{ asset('storage/' . $galeri->imagegaleri) }}" alt="Preview" style="display: {{ $galeri->imagegaleri ? 'block' : 'none' }};" />
                    </div>
                    @error('imagegaleri') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <!-- 2. Input Judul -->
                <div class="form-group">
                    <label class="form-label" for="judul">Judul Galeri</label>
                    <div class="input-wrapper">
                        <input type="text" name="judulgaleri" id="judul" maxlength="255" placeholder="Masukkan judul galeri disini" required oninput="updateCharCount(this)" value="{{ old('judulgaleri', $galeri->judulgaleri) }}">
                        <span class="char-counter" id="charCounter">{{ strlen($galeri->judulgaleri) }}/255</span>
                    </div>
                    @error('judulgaleri') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <!-- 4. Dropdown Kategori -->
                <div class="form-group">
                    <label class="form-label" for="kategori">Kategori Galeri</label>
                    <div class="select-wrapper">
                        <select name="kategorigaleri" id="kategori" required>
                            <option value="" disabled>Pilih kategori galeri</option>
                            <option value="Prestasi" {{ old('kategorigaleri', $galeri->kategorigaleri) == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                            <option value="Pelatihan" {{ old('kategorigaleri', $galeri->kategorigaleri) == 'Pelatihan' ? 'selected' : '' }}>Pelatihan</option>
                            <option value="Kegiatan" {{ old('kategorigaleri', $galeri->kategorigaleri) == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                            <option value="Pengumuman" {{ old('kategorigaleri', $galeri->kategorigaleri) == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                        </select>
                        <ion-icon name="chevron-down-outline" class="select-icon"></ion-icon>
                    </div>
                    @error('kategorigaleri') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <!-- 5. Group Tombol Aksi -->
                <div class="form-actions">
                    <button type="submit" class="btn-submit">Simpan Perubahan</button>
                    <a href="{{ route('admin.galeri') }}" class="btn-cancel">Batal</a>
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