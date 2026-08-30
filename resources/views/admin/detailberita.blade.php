<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $berita->judulberita }} - Admin Seruli</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/admin/detailberita.css') }}" />
</head>

<body>

    <!-- SIDEBAR -->
    @include('partials.admin.sidebar')

    <!-- MAIN WRAPPER -->
    <div class="main-wrapper">
        <div class="content-body">

            <!-- HEADER ACTIONS (Tanpa Breadcrumb & Topbar) -->
            <div class="detail-header-actions">
                <div></div> <!-- Placeholder flex spacing -->
                <div class="action-buttons">
                    <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn-edit">
                        <ion-icon name="create-outline"></ion-icon>
                        <span>Edit Postingan</span>
                    </a>
                    <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">
                            <ion-icon name="trash-outline"></ion-icon>
                            <span>Hapus</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- CONTENT MAIN -->
            <div class="detail-content-grid">
                <!-- GAMBAR BERITA -->
                <div class="detail-image-wrapper">
                    <img src="{{ asset('storage/' . $berita->imageberita) }}" alt="{{ $berita->judulberita }}" />
                </div>

                <!-- DESKRIPSI & INFO -->
                <div class="detail-body-wrapper">
                    <h1 class="detail-title">{{ $berita->judulberita }}</h1>
                    <div class="detail-description">
                        {!! nl2br(e($berita->deskripsiberita)) !!}
                    </div>
                </div>
            </div>

            <!-- FOOTER INFO -->
            <div class="detail-footer-info">
                <div class="author-category">
                    <div class="author-item">
                        <ion-icon name="newspaper-outline"></ion-icon>
                        <span>Admin Seruli</span>
                    </div>
                    <span class="badge-tag">{{ $berita->kategoriberita }}</span>
                </div>
                <div class="date-item">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <span>{{ $berita->created_at->locale('id')->translatedFormat('d F Y') }}</span>
                </div>
            </div>

        </div>
    </div>

</body>

</html>