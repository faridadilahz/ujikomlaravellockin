<link rel="stylesheet" href="{{ asset('css/partials/admin/cardlastpost.css') }}" />

@if($lastBerita)
<div class="last-post-card">
    <div class="last-post-card-image">
        <img src="{{ asset('storage/' . $lastBerita->imageberita) }}" alt="{{ $lastBerita->judulberita }}" />
    </div>
    <div class="last-post-card-body">
        <div class="last-post-date">
            <ion-icon name="calendar-outline"></ion-icon>
            <span>{{ $lastBerita->created_at->locale('id')->translatedFormat('d F Y') }}</span>
        </div>
        <h3 class="last-post-card-title">
            {{ $lastBerita->judulberita }}
        </h3>
        <p class="last-post-card-desc">
            {{ $lastBerita->deskripsiberita }}
        </p>
        <div class="last-post-card-footer">
            <span class="badge-tag">{{ $lastBerita->kategoriberita }}</span>
            <div class="action-buttons">
                <button type="button" class="news-cta btn-edit" onclick="window.location.href='{{ route('admin.berita.edit', $lastBerita->id) }}'">
                    <ion-icon name="open-outline"></ion-icon>
                    <span>Lihat Selengkapnya</span>
                </button>
            </div>
        </div>
    </div>
</div>
@else
<div class="empty-state">
    <p>Belum ada postingan berita terakhir.</p>
</div>
@endif