<link rel="stylesheet" href="{{ asset('css/partials/admin/topbar.css') }}" />
<header class="topbar">
    <div class="topbar-left">
        @if(request()->routeIs('admin.dasbor'))
            <h1 class="page-title">Dasbor Seruli</h1>
            <p class="page-subtitle">Selamat datang kembali di panel kontrol Admin Seruli.</p>

        @elseif(request()->routeIs('admin.berita*'))
            <h1 class="page-title">Kelola Berita</h1>
            <p class="page-subtitle">Tambah, ubah, atau hapus postingan berita sekolah.</p>

        @elseif(request()->routeIs('admin.galeri*'))
            <h1 class="page-title">Kelola Galeri</h1>
            <p class="page-subtitle">Atur album dan dokumentasi foto kegiatan sekolah.</p>

        @elseif(request()->routeIs('admin.faq*'))
            <h1 class="page-title">Kelola FAQ</h1>
            <p class="page-subtitle">Daftar pertanyaan yang sering ditanyakan pengunjung.</p>

        @elseif(request()->routeIs('admin.profil*'))
            <h1 class="page-title">Profil Admin</h1>
            <p class="page-subtitle">Pengaturan akun dan informasi profil admin.</p>

        @else
            <h1 class="page-title">{{ $pageTitle ?? 'Panel Admin' }}</h1>
            <p class="page-subtitle">{{ $pageSubtitle ?? 'Kelola konten aplikasi Seruli.' }}</p>
        @endif
    </div>

    <div class="topbar-right">
        @if(request()->routeIs('admin.berita'))
            <div class="topbar-search-box">
                <ion-icon name="search-outline"></ion-icon>
                <input type="text" placeholder="Cari Berita..." id="searchBeritaInput" />
            </div>
            <a href="{{ route('admin.berita.posting') }}" class="btn-topbar-primary">
                <ion-icon name="add-outline"></ion-icon>
                <span>Posting Berita</span>
            </a>

        @elseif(request()->routeIs('admin.galeri'))
            <div class="topbar-search-box">
                <ion-icon name="search-outline"></ion-icon>
                <input type="text" placeholder="Cari Galeri..." id="searchGaleriInput" />
            </div>
            <a href="{{ route('admin.galeri.posting') }}" class="btn-topbar-primary">
                <ion-icon name="add-outline"></ion-icon>
                <span>Posting Galeri</span>
            </a>

        @else
        @endif
    </div>
</header>