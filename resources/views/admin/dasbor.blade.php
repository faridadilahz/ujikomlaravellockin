<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin - Seruli</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/admin/dasbor.css') }}" />
</head>

<body>

    <div class="admin-layout">

        @include('partials.admin.sidebar')

        <main class="main-content">

            @include('partials.admin.topbar')

            <div class="dashboard-body">

                @include('partials.admin.dasborstat')
                <div class="content-card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title-content">Foto Terakhir Diposting</h3>
                        </div>
                    </div>

                    <div class="news-grid">
                        <article class="news-card">
                            <div class="news-card-image">
                                <img src="../assets/img/berita-card.png" alt="Berita Seruli" />
                            </div>
                            <div class="news-card-body">
                                <div class="news-date">
                                    <ion-icon name="calendar-outline"></ion-icon>
                                    <span>27 Oktober 2025</span>
                                </div>
                                <h3 class="news-card-title">
                                    Siswa PPLG Sekolah Seru Sekali Juara 2 TECHNOUPDATE X HIMPACT
                                </h3>
                                <p class="news-card-desc">
                                    Selamat dan sukses kepada tim PPLG Sekolah Seru Sekali yang
                                    berhasil meraih Juara 2 dalam ajang kompetisi teknologi
                                    bergengsi tingkat provinsi.
                                </p>
                                <div class="news-card-footer">
                                    <span class="badge-tag">Prestasi</span>
                                    <a href="#" class="news-cta">
                                        Lihat Selengkapnya
                                        <ion-icon name="open-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </article>

                        <article class="news-card">
                            <div class="news-card-image">
                                <img src="../assets/img/berita-card.png" alt="Berita Seruli" />
                            </div>
                            <div class="news-card-body">
                                <div class="news-date">
                                    <ion-icon name="calendar-outline"></ion-icon>
                                    <span>27 Oktober 2025</span>
                                </div>
                                <h3 class="news-card-title">
                                    Siswa PPLG Sekolah Seru Sekali Juara 2 TECHNOUPDATE X HIMPACT
                                </h3>
                                <p class="news-card-desc">
                                    Selamat dan sukses kepada tim PPLG Sekolah Seru Sekali yang
                                    berhasil meraih Juara 2 dalam ajang kompetisi teknologi
                                    bergengsi tingkat provinsi.
                                </p>
                                <div class="news-card-footer">
                                    <span class="badge-tag">Prestasi</span>
                                    <a href="#" class="news-cta">
                                        Lihat Selengkapnya
                                        <ion-icon name="open-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

            </div>

        </main>

    </div>

</body>

</html>