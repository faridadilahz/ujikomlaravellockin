<link rel="stylesheet" href="{{ asset('css/partials/guest/cardgaleri.css') }}" />

@forelse($galeris as $item)
<div class="gallery-card">
    <div class="gallery-card-image">
        <img src="{{ asset('storage/' . $item->imagegaleri) }}" alt="{{ $item->judulgaleri }}" />
    </div>
    <div class="gallery-card-body">
        <div class="gallery-date">
            <ion-icon name="calendar-outline"></ion-icon>
            <span>{{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</span>
        </div>
        <h3 class="gallery-card-title">
            {{ $item->judulgaleri }}
        </h3>
        <div class="gallery-card-footer">
            <span class="badge-tag">{{ $item->kategorigaleri }}</span>
            <a href="galeri" class="gallery-cta">
                <span>Lihat Selengkapnya</span>
                <ion-icon name="open-outline"></ion-icon>
            </a>
        </div>
    </div>
</div>
@empty
<div class="empty-state">
    <p>Belum ada galeri yang diposting.</p>
</div>
@endforelse