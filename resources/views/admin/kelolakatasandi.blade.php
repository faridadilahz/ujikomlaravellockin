<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelola Kata Sandi - Admin Seruli</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/admin/kelolakatasandi.css') }}" />
</head>

<body>

    @include('partials.admin.sidebar')

    <div class="main-wrapper">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="{{ route('admin.akun') }}">Akun</a>
            <ion-icon name="chevron-forward-outline"></ion-icon>
            <span class="active">Kelola Kata Sandi</span>
        </div>

        <div class="password-card-container">
            <!-- Form Group Kata Sandi Lama (Readonly Preview) -->
            <div class="form-group">
                <label for="old_password">Kata sandi lama</label>
                <div class="input-password-wrapper">
                    <input type="password" id="old_password" value="********" readonly />
                    <button type="button" class="btn-toggle-eye" onclick="togglePasswordVisibility()">
                        <ion-icon id="eye-icon" name="eye-off-outline"></ion-icon>
                    </button>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="form-actions">
                <!-- 🟢 Route disesuaikan dengan web.php: admin.kelolakatasandi.ubah -->
                <a href="{{ route('admin.kelolakatasandi.ubah') }}" class="btn-submit">
                    <span>Ubah Kata Sandi</span>
                </a>
                <a href="{{ $previousUrl }}" class="btn-cancel">
                    <span>Kembali</span>
                </a>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('old_password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.setAttribute('name', 'eye-outline');
            } else {
                passwordInput.type = 'password';
                eyeIcon.setAttribute('name', 'eye-off-outline');
            }
        }
    </script>
</body>

</html>