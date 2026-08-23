<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sekolah Seru Sekali - Seruli</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{ asset('css/guest/berita.css') }}" />
</head>

<body>
    @include('partials.guest.navbar')

    <section id="berita" class="news-section">
        <div class="container news-container">
            <div class="news-content">
                <h2 class="section-title-center">Berita Seruli</h2>
            </div>

            <div class="news-search-box">
                <div class="search-input-wrapper">
                    <ion-icon name="search-outline" class="search-icon"></ion-icon>
                    <input type="text" class="search-input" placeholder="Cari berita disini..." />
                </div>
                <button type="button" class="btn-search">Cari</button>
            </div>
        </div>

        <div class="news-grid">
        @include('partials.guest.cardberita')
        </div>
    </section>

    @include('partials.guest.footer')


    <script>
        // ==========================================
        // AUTO ACTIVE NAVBAR LINK PER HALAMAN (PAGE URL)
        // ==========================================
        document.addEventListener("DOMContentLoaded", () => {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll(".nav-link");

            navLinks.forEach((link) => {
                // Hapus kelas active bawaan
                link.classList.remove("active");

                const linkPath = link.getAttribute("href");

                // Cek apakah URL browser saat ini mengandung folder/path dari href link
                if (linkPath && currentPath.includes(linkPath.replace("..", ""))) {
                    link.classList.add("active");
                }
            });
        });
    </script>
</body>