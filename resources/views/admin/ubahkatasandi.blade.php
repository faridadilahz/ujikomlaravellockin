<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ubah Kata Sandi - Admin Seruli</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/admin/ubahkatasandi.css') }}" />
</head>

<body>

    @include('partials.admin.sidebar')

    <div class="main-wrapper">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="{{ route('admin.akun') }}">Akun</a>
            <ion-icon name="chevron-forward-outline"></ion-icon>
            <a href="{{ route('admin.kelolakatasandi') }}">Kelola Kata Sandi</a>
            <ion-icon name="chevron-forward-outline"></ion-icon>
            <span class="active">Ubah Kata Sandi</span>
        </div>

        <form action="{{ route('admin.kelolakatasandi.update') }}" method="POST" class="password-card-container">
            @csrf
            @method('PUT')

            <!-- Field 1: Kata Sandi Lama -->
            <div class="form-group">
                <label for="current_password">Kata sandi lama</label>
                <div class="input-password-wrapper">
                    <input type="password" id="current_password" name="current_password" placeholder="Masukkan kata sandi lama" required autocomplete="off" />
                    <button type="button" class="btn-toggle-eye" onclick="toggleEye('current_password', 'eye-1')">
                        <ion-icon id="eye-1" name="eye-off-outline"></ion-icon>
                    </button>
                </div>
                @error('current_password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <!-- Field 2: Kata Sandi Baru -->
            <div class="form-group">
                <label for="password">Kata sandi baru</label>
                <div class="input-password-wrapper">
                    <input type="password" id="password" name="password" placeholder="Masukkan kata sandi baru" required autocomplete="off" />
                    <button type="button" class="btn-toggle-eye" onclick="toggleEye('password', 'eye-2')">
                        <ion-icon id="eye-2" name="eye-off-outline"></ion-icon>
                    </button>
                </div>
                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <!-- Field 3: Konfirmasi Kata Sandi Baru -->
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi kata sandi baru</label>
                <div class="input-password-wrapper">
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi kata sandi baru" required autocomplete="off" />
                    <button type="button" class="btn-toggle-eye" onclick="toggleEye('password_confirmation', 'eye-3')">
                        <ion-icon id="eye-3" name="eye-off-outline"></ion-icon>
                    </button>
                </div>
            </div>

            <!-- Tombol Action -->
            <div class="form-actions">
                <button type="submit" class="btn-submit">
                    <span>Simpan kata sandi baru</span>
                </button>
                <a href="{{ $previousUrl }}" class="btn-cancel">
                    <span>Batal</span>
                </a>
            </div>
        </form>
    </div>

    <script>
        function toggleEye(inputId, eyeIconId) {
            const input = document.getElementById(inputId);
            const eyeIcon = document.getElementById(eyeIconId);

            if (input.type === 'password') {
                input.type = 'text';
                eyeIcon.setAttribute('name', 'eye-outline');
            } else {
                input.type = 'password';
                eyeIcon.setAttribute('name', 'eye-off-outline');
            }
        }
    </script>
</body>

</html>