<link rel="stylesheet" href="{{ asset('css/partials/admin/cardberita.css') }}" />

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
            
            <div class="action-buttons">
                <!-- Tombol Edit (Arahkan ke Route Edit) -->
                <button type="button" class="news-cta btn-edit" onclick="window.location.href='{{ route('admin.berita.edit', $item->id) }}'">
                    <span>Edit Berita</span>
                </button>

                <!-- Tombol Hapus (Form Method DELETE) -->
                <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" style="width: 100%;" onsubmit="return confirm('Yakin ingin menghapus berita ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="news-cta btn-delete">
                        <span>Hapus Berita</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@empty
<div class="empty-state">
    <p>Belum ada berita yang diposting.</p>
</div>
@endforelse