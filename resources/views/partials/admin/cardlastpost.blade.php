<link rel="stylesheet" href="{{ asset('css/partials/admin/cardlastpost.css') }}" />

@forelse($recentPosts as $post)
<div class="last-post-card">
    <div class="last-post-card-image">
        <!-- Pengecekan path gambar berdasarkan tipe postingan -->
        @if($post->post_type === 'berita')
            <img src="{{ asset('storage/' . $post->imageberita) }}" alt="{{ $post->judulberita }}" />
        @else
            <img src="{{ asset('storage/' . $post->imagegaleri) }}" alt="{{ $post->judulgaleri }}" />
        @endif
    </div>
    
    <div class="last-post-card-body">
        <div class="last-post-date">
            <ion-icon name="calendar-outline"></ion-icon>
            <span>{{ $post->created_at->locale('id')->translatedFormat('d F Y') }}</span>
        </div>

        <!-- Judul -->
        <h3 class="last-post-card-title">
            {{ $post->post_type === 'berita' ? $post->judulberita : $post->judulgaleri }}
        </h3>

        <!-- Deskripsi (Khusus Berita) -->
        @if($post->post_type === 'berita')
            <p class="last-post-card-desc">
                {{ $post->deskripsiberita }}
            </p>
        @endif

        <div class="last-post-card-footer">
            <!-- Badge Kategori -->
            <span class="badge-tag">
                {{ $post->post_type === 'berita' ? $post->kategoriberita : $post->kategorigaleri }}
            </span>

            <!-- Tombol Aksi -->
            <div class="action-buttons">
                @if($post->post_type === 'berita')
                    <button type="button" class="news-cta btn-edit" onclick="window.location.href='{{ route('admin.berita.edit', $post->id) }}'">
                        <ion-icon name="open-outline"></ion-icon>
                        <span>Edit Berita</span>
                    </button>
                @else
                    <button type="button" class="news-cta btn-edit" onclick="window.location.href='{{ route('admin.galeri.edit', $post->id) }}'">
                        <ion-icon name="open-outline"></ion-icon>
                        <span>Edit Galeri</span>
                    </button>
                @endif
            </div>
        </div>
    </div>
</div>
@empty
<div class="empty-state">
    <p>Belum ada postingan terbaru.</p>
</div>
@endforelse