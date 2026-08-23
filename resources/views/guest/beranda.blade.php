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
    <link rel="stylesheet" href="{{ asset('css/guest/beranda.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
</head>

<body>
    @include('partials.guest.navbar')

    <section id="beranda" class="hero-section">
        <div class="container hero-grid">
            <div class="hero-content">
                <span class="badge-welcome">Selamat datang di</span>
                <h1 class="hero-title">
                    Website Resmi<br /><span class="text-primary">Sekolah Seru Sekali</span>
                </h1>
                <p class="hero-subtitle">
                    Mewujudkan generasi unggul, berkarakter, dan kompeten di bidang
                    teknologi dan kejuruan. Siap kerja, santun, mandiri dan kreatif.
                </p>
            </div>
            <div class="hero-image">
                <img src="assets/img/logosss.png" alt="Sekolah Seru Sekali" />
            </div>
        </div>

        <div class="container">
            <div class="hero-stats">
                <div class="stat-card">
                    <h3>1.160+</h3>
                    <p>SISWA AKTIF</p>
                </div>
                <div class="stat-card">
                    <h3>4</h3>
                    <p>JURUSAN UNGGULAN</p>
                </div>
                <div class="stat-card">
                    <h3>56+</h3>
                    <p>GURU DAN STAF</p>
                </div>
                <div class="stat-card">
                    <h3>50+</h3>
                    <p>PRESTASI</p>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="about-section">
        <div class="container about-container">
            <div class="about-content">
                <span class="badge-subtitle">Tentang</span>
                <h2 class="about-heading">
                    Mewujudkan generasi unggul, berkarakter, dan kompeten di bidang
                    teknologi dan kejuruan. Siap kerja, santun, mandiri, dan kreatif.
                </h2>
                <p class="about-text">
                    Sekolah Seru Sekali merupakan salah satu Sekolah Menengah Kejuruan
                    negeri unggulan di Kota Bogor yang berkomitmen mencetak lulusan
                    berkarakter, kompeten, dan siap bersaing di dunia industri global.
                    Dengan kurikulum yang terintegrasi dengan kebutuhan industri modern
                    serta fasilitas pembelajaran berbasis teknologi, Sekolah Seru Sekali
                    terus berinovasi dalam melahirkan generasi muda yang ahli di
                    bidangnya.
                </p>
            </div>

            <div class="about-image">
                <img src="assets/img/tentang-kami.jpg" alt="Tentang Sekolah Seru Sekali" />
            </div>
        </div>
    </section>

    <section id="berita" class="news-section">
        <div class="container news-container">
            <div class="news-content">
                <span class="badge-subtitle">Berita</span>
            </div>

            <div class="news-beranda-grid">
                @include('partials.guest.cardberita')
            </div>
        </div>
    </section>

    <section id="galeri" class="gallery-section">
        <div class="container gallery-container">
            <div class="gallery-content">
                <span class="badge-subtitle">Galeri</span>
            </div>

            <div class="gallery-beranda-grid">
                @include('partials.guest.cardgaleri')
            </div>
        </div>
    </section>

    <section id="faq" class="faq-section">
        <div class="container">
            <div class="faq-header">
                <span class="badge-subtitle">FAQ</span>
                <h2 class="section-title-center">Pertanyaan yang Sering Diajukan</h2>
                <p class="faq-subtitle">
                    Tidak menemukan apa yang Anda inginkan? Hubungi kami
                </p>
            </div>

            <div class="faq-list">
                <div class="faq-item active">
                    <div class="faq-question">
                        <h3>
                            Apa saja program keahlian/jurusan yang ada di Sekolah Seru
                            Sekali?
                        </h3>
                        <ion-icon name="remove-outline" class="faq-icon"></ion-icon>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Sekolah Seru Sekali memiliki berbagai program keahlian unggulan
                            seperti Pengembangan Perangkat Lunak dan Gim (PPLG), Teknik
                            Jaringan Komputer dan Telekomunikasi (TJKT), Desain Komunikasi
                            Visual (DKV), dan Broadcasting & Perfilman.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>
                            Bagaimana jalur pendaftaran siswa baru di Sekolah Seru Sekali?
                        </h3>
                        <ion-icon name="add-outline" class="faq-icon"></ion-icon>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Pendaftaran siswa baru dapat dilakukan secara online melalui
                            portal resmi PPDB atau langsung datang ke Sekretariat PPDB
                            Sekolah Seru Sekali pada jam kerja.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>
                            Apakah Sekolah Seru Sekali menyediakan fasilitas tempat
                            tinggal/asrama?
                        </h3>
                        <ion-icon name="add-outline" class="faq-icon"></ion-icon>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Saat ini Sekolah Seru Sekali belum menyediakan asrama resmi,
                            namun terdapat banyak lokasi kos/kontrakan terdekat di sekitar
                            lingkungan sekolah.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>
                            Bagaimana sistem pembelajaran dan fasilitas praktikum di
                            sekolah?
                        </h3>
                        <ion-icon name="add-outline" class="faq-icon"></ion-icon>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Pembelajaran di Sekolah Seru Sekali menggunakan kurikulum
                            berbasis industri modern yang ditunjang laboratorium komputer
                            berstandar tinggi serta fasilitas praktik teknologi terkini.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.guest.footer')

    <script>
        document.querySelectorAll(".faq-item").forEach((item) => {
            item.addEventListener("click", () => {
                const isActive = item.classList.contains("active");

                // Opsional: Tutup item lain pas klik item baru
                document.querySelectorAll(".faq-item").forEach((i) => {
                    i.classList.remove("active");
                    const icon = i.querySelector(".faq-icon");
                    if (icon) icon.setAttribute("name", "add-outline");
                });

                // Toggle item yang diklik
                if (!isActive) {
                    item.classList.add("active");
                    const icon = item.querySelector(".faq-icon");
                    if (icon) icon.setAttribute("name", "remove-outline");
                }
            });
        });
    </script>
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
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>

</html>
