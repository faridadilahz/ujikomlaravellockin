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
    <link rel="stylesheet" href="{{ asset('css/guest/faq.css') }}" />
</head>

<body>
    @include('partials.guest.navbar')

    <section id="faq" class="faq-section">
        <div class="container">
            <div class="faq-header">
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
</body>