<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Posting galeri - Seruli</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/admin/postinggaleri.css') }}" />
</head>

<body>

    <!-- SIDEBAR -->
    @include('partials.admin.sidebar')

    <!-- MAIN WRAPPER -->
    <div class="main-wrapper">
        @include('partials.admin.topbar')

        <div class="content-body">

            <!-- Form Posting galeri -->
            <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data" class="form-posting">
                @csrf

                <!-- 1. Form Upload Gambar -->
                <div class="form-group">
                    <label class="form-label">Gambar galeri</label>
                    <div class="dropzone-box" onclick="document.getElementById('imageInput').click()">
                        <input type="file" name="imagegaleri" id="imageInput" accept="image/*" required hidden onchange="previewImage(this)">
                        <div class="dropzone-content" id="dropzoneContent">
                            <ion-icon name="cloud-upload-outline" class="upload-icon"></ion-icon>
                            <p class="dropzone-title">Masukkan foto galeri disini</p>
                            <p class="dropzone-subtitle">PNG, JPG maksimal 5 MB</p>
                        </div>
                        <img id="imagePreview" class="image-preview" src="" alt="Preview" style="display: none;" />
                    </div>
                    @error('image') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <!-- 2. Input Judul -->
                <div class="form-group">
                    <label class="form-label" for="judul">Judul galeri</label>
                    <div class="input-wrapper">
                        <input type="text" name="judulgaleri" id="judul" maxlength="255" placeholder="Masukkan judul galeri disini" required oninput="updateCharCount(this)" value="{{ old('judul') }}">
                        <span class="char-counter" id="charCounter">0/255</span>
                    </div>
                    @error('judul') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <!-- 4. Dropdown Kategori -->
                <div class="form-group">
                    <label class="form-label" for="kategori">Kategori galeri</label>
                    <div class="select-wrapper">
                        <select name="kategorigaleri" id="kategori" required>
                            <option value="" disabled selected>Pilih kategori galeri</option>
                            <option value="Prestasi">Prestasi</option>
                            <option value="Pelatihan">Pelatihan</option>
                            <option value="Kegiatan">Kegiatan</option>
                            <option value="Pengumuman">Pengumuman</option>
                        </select>
                        <ion-icon name="chevron-down-outline" class="select-icon"></ion-icon>
                    </div>
                    @error('kategori') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <!-- 5. Group Tombol Aksi -->
                <div class="form-actions">
                    <button type="submit" class="btn-submit">Posting</button>
                    <a href="{{ route('admin.galeri') }}" class="btn-cancel">Batal</a>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript Interaktif -->
    <script>
        // Realtime Character Counter untuk Judul
        function updateCharCount(input) {
            const counter = document.getElementById('charCounter');
            counter.innerText = `${input.value.length}/255`;
        }

        // Preview Image saat Foto Dipilih
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