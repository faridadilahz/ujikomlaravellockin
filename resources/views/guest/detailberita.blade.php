<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $berita->judulberita }} - Seruli</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/guest/detailberita.css') }}" />
</head>

<body>

    @include('partials.guest.navbar')

    <main class="detail-container">

        <!-- LAYOUT GRID CONTAINER -->
        <div class="detail-grid {{ $beritaLain->isEmpty() ? 'no-sidebar' : '' }}">
            
            <!-- KONTEN UTAMA (KIRI) -->
            <article class="main-content">
                <h1 class="post-title">{{ $berita->judulberita }}</h1>
                
                <div class="main-image-box">
                    <img src="{{ asset('storage/' . $berita->imageberita) }}" alt="{{ $berita->judulberita }}" />
                </div>

                <div class="meta-row">
                    <div class="author-tag">
                        <ion-icon name="person-outline"></ion-icon>
                        <span>Admin Seruli</span>
                    </div>
                    <span class="badge-tag">{{ $berita->kategoriberita }}</span>
                    <div class="date-tag">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <span>{{ $berita->created_at->locale('id')->translatedFormat('d F Y') }}</span>
                    </div>
                </div>

                <div class="post-description">
                    {!! nl2br(e($berita->deskripsiberita)) !!}
                </div>
            </article>

            <!-- SIDEBAR BERITA LAINNYA (KANAN) -->
            @if($beritaLain->isNotEmpty())
            <aside class="sidebar-content">
                <h3 class="sidebar-title">Berita lainnya</h3>
                
                <div class="sidebar-list">
                    @foreach($beritaLain as $item)
                    <a href="{{ route('guest.berita.show', $item->id) }}" class="sidebar-item">
                        <div class="sidebar-img">
                            <img src="{{ asset('storage/' . $item->imageberita) }}" alt="{{ $item->judulberita }}" />
                        </div>
                        <div class="sidebar-info">
                            <h4 class="sidebar-item-title">{{ $item->judulberita }}</h4>
                            <div class="sidebar-meta">
                                <span><ion-icon name="person-outline"></ion-icon> Admin Seruli</span>
                                <span><ion-icon name="calendar-outline"></ion-icon> {{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </aside>
            @endif

        </div>
    </main>

    @include('partials.guest.footer')

</body>

</html>