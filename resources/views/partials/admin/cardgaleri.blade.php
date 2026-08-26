<link rel="stylesheet" href="{{ asset('css/partials/admin/cardgaleri.css') }}" />

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
            
            <div class="action-buttons">
                <!-- Tombol Edit (Arahkan ke Route Edit) -->
                <button type="button" class="gallery-cta btn-edit" onclick="window.location.href='{{ route('admin.galeri.edit', $item->id) }}'">
                    <span>Edit Galeri</span>
                </button>

                <!-- Tombol Hapus (Form Method DELETE) -->
                <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" style="width: 100%;" onsubmit="return confirm('Yakin ingin menghapus galeri ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="gallery-cta btn-delete">
                        <span>Hapus Galeri</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@empty
<div class="empty-state">
    <p>Belum ada galeri yang diposting.</p>
</div>
@endforelse