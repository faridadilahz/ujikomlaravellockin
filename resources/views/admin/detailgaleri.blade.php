<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $galeri->judulgaleri }} - Admin Seruli</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/admin/detailgaleri.css') }}" />
</head>

<body>

    @include('partials.admin.sidebar')

    <div class="main-wrapper">
        <div class="content-body">

            <!-- HEADER ACTIONS -->
            <div class="detail-header-actions">
                <div></div>
                <div class="action-buttons">
                    <a href="{{ route('admin.galeri.edit', $galeri->id) }}" class="btn-edit">
                        <ion-icon name="create-outline"></ion-icon>
                        <span>Edit Posting</span>
                    </a>
                    <form action="{{ route('admin.galeri.destroy', $galeri->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus galeri ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">
                            <ion-icon name="trash-outline"></ion-icon>
                            <span>Hapus</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- CONTENT GRID -->
            <div class="detail-content-grid">
                <div class="detail-image-wrapper">
                    <img src="{{ asset('storage/' . $galeri->imagegaleri) }}" alt="{{ $galeri->judulgaleri }}" />
                </div>

                <div class="detail-body-wrapper">
                    <h1 class="detail-title">{{ $galeri->judulgaleri }}</h1>
                </div>
            </div>

            <!-- FOOTER INFO -->
            <div class="detail-footer-info">
                <div class="author-category">
                    <div class="author-item">
                        <ion-icon name="image-outline"></ion-icon>
                        <span>Admin Seruli</span>
                    </div>
                    <span class="badge-tag">{{ $galeri->kategorigaleri }}</span>
                </div>
                <div class="date-item">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <span>{{ $galeri->created_at->locale('id')->translatedFormat('d F Y') }}</span>
                </div>
            </div>

        </div>
    </div>

</body>

</html>