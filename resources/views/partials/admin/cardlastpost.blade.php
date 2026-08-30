<link rel="stylesheet" href="{{ asset('css/partials/admin/cardlastpost.css') }}" />

@forelse($recentPosts as $post)
<div class="last-post-card" onclick="window.location.href='{{ $post->post_type === 'berita' ? route('admin.berita.show', $post->id) : route('admin.galeri.show', $post->id) }}'">
    <div class="last-post-card-image">
        <img src="{{ asset('storage/' . ($post->post_type === 'berita' ? $post->imageberita : $post->imagegaleri)) }}" alt="Gambar" />
    </div>
    
    <div class="last-post-card-body">
        <h3 class="last-post-card-title">
            {{ $post->post_type === 'berita' ? $post->judulberita : $post->judulgaleri }}
        </h3>

        <div class="last-post-card-footer">
            <span class="badge-tag">
                {{ $post->post_type === 'berita' ? $post->kategoriberita : $post->kategorigaleri }}
            </span>
        </div>
    </div>
</div>
@empty
<div class="empty-state">
    <p>Belum ada postingan terbaru.</p>
</div>
@endforelse