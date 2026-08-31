<header class="navbar">
    <div class="container nav-container">
        <a href="beranda" class="logo">
            <img src="{{ asset('assets/img/logosss.png') }}" alt="Logo Seruli" class="logo-img" />
            <span class="logo-text">Seruli</span>
            <link rel="stylesheet" href="{{ asset('css/partials/guest/navbar.css') }}" />
        </a>
        <nav class="nav-menu">
            <a href="/beranda" class="nav-link {{ request()->is('beranda*') || request()->is('/') ? 'active' : '' }}">Beranda</a>
            <a href="/berita" class="nav-link {{ request()->is('berita*') ? 'active' : '' }}">Berita</a>
            <a href="/galeri" class="nav-link {{ request()->is('galeri*') ? 'active' : '' }}">Galeri</a>
            <a href="/faq" class="nav-link {{ request()->is('faq*') ? 'active' : '' }}">FAQ</a>
        </nav>
        <a href="login" class="btn-masuk">Masuk</a>
    </div>
</header>