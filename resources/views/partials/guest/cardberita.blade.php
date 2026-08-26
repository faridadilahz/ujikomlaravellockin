<link rel="stylesheet" href="{{ asset('css/partials/guest/cardberita.css') }}" />

@forelse($beritas as $item)
<div class="news-card">
    <div class="news-card-image">
        <img src="{{ asset('storage/' . $item->imageberita) }}" alt="{{ $item->judulberita }}" />
    </div>
    <div class="news-card-body">
        <div class="news-date">
            <ion-icon name="calendar-outline"></ion-icon>
            <span>{{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</span>
        </div>
        <h3 class="news-card-title">
            {{ $item->judulberita }}
        </h3>
        <p class="news-card-desc">
            {{ $item->deskripsiberita }}
        </p>
        <div class="news-card-footer">
            <span class="badge-tag">{{ $item->kategoriberita }}</span>
            <a href="#" class="news-cta">
                <span>Lihat Selengkapnya</span>
                <ion-icon name="open-outline"></ion-icon>
            </a>
        </div>
    </div>
</div>
@empty
<div class="empty-state">
    <p>Belum ada berita yang diposting.</p>
</div>
@endforelse