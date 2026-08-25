<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Admin - Sekolah Seru Sekali</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}" />
</head>

<body>

    <section id="login" class="login-section">

        <div class="login-card">


            <div class="login-card-right">

                <a href="beranda" class="logo">
                    <img src="assets/img/logosss.png" alt="Logo Seruli" class="logo-img" />
                    <span class="logo-text">Seruli</span>
                </a>
                <div class="login-header">
                    <h2 class="login-title">Masuk ke Admin Seruli</h2>
                </div>

                <form class="login-form" action="{{ route('login.post') }}" method="POST">
                    @csrf

                    @if ($errors->any())
                        <div style="color: red; margin-bottom: 15px; font-size: 13px;">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-wrapper">
                            <ion-icon name="mail-outline" class="input-icon"></ion-icon>
                            <input type="email" name="email" id="email" class="form-input" value="{{ old('email') }}"
                                placeholder="Masukkan email" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <div class="input-wrapper">
                            <ion-icon name="lock-closed-outline" class="input-icon"></ion-icon>
                            <input type="password" name="password" id="password" class="form-input"
                                placeholder="••••••••" required />
                            <button type="button" class="toggle-password" id="togglePassword">
                                <ion-icon name="eye-outline" id="eyeIcon"></ion-icon>
                            </button>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="remember-me">
                            <input type="checkbox" name="remember" id="remember" />
                            <span>Ingat saya</span>
                        </label>
                        <a href="#" class="forgot-link">Lupa kata sandi?</a>
                    </div>

                    <button type="submit" class="btn-login-submit">
                        <span>Masuk</span>
                    </button>

                    <a href="{{ url('beranda') }}" class="back-link">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                        <span>Kembali ke Beranda</span>
                    </a>
                </form>

            </div>

        </div>

    </section>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        if (togglePassword) {
            togglePassword.addEventListener('click', () => {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                eyeIcon.setAttribute('name', type === 'password' ? 'eye-outline' : 'eye-off-outline');
            });
        }
    </script>

</body>

</html>