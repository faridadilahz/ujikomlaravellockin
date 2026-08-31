<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Akun - Admin Seruli</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="{{ asset('css/admin/akun.css') }}" />
</head>

<body>

    @include('partials.admin.sidebar')

    <div class="main-wrapper">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <span>Akun</span>
        </div>

        <div class="account-grid">
            <!-- CARD PROFILE INFO (KIRI) -->
<div class="profile-card">
            <div class="avatar-box">
    <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/img/logosss.png') }}" alt="Avatar Admin" class="avatar-img" />
</div>
            <h2 class="profile-name">{{ $user->name }}</h2>
            <p class="profile-email">{{ $user->email }}</p>
            
            <a href="{{ route('admin.akun.edit') }}" class="btn-edit-profile">
                <span>Edit</span>
                <ion-icon name="create-outline"></ion-icon>
            </a>
        </div>

            <!-- CARD SETTINGS & LOGOUT (KANAN) -->
            <div class="settings-column">
                <!-- Kelola Kata Sandi -->
                <a href="{{ route('admin.kelolakatasandi') }}" class="setting-card">
                    <div class="setting-icon icon-lock">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </div>
                    <div class="setting-text">
                        <h3>Kelola Kata Sandi</h3>
                        <p>Ganti kata sandi akun Anda secara berkala untuk menjaga keamanan data sekolah</p>
                    </div>
                    <ion-icon name="chevron-forward-outline" class="arrow-icon"></ion-icon>
                </a>

                <!-- Keluar dari Akun -->
                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                    @csrf
                    <!-- 🟢 type="button" agar tidak langsung submit, dan onclick dipasang di button utama -->
                    <button type="button" class="setting-card card-logout" onclick="showLogoutModal()">
                        <div class="setting-icon icon-logout">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </div>
                        <div class="setting-text">
                            <h3 class="text-danger">Keluar dari Akun</h3>
                        </div>
                        <ion-icon name="chevron-forward-outline" class="arrow-icon text-danger"></ion-icon>
                    </button>
                </form>

                <!-- MODAL POPUP LOGOUT -->
                <div id="logoutModal" class="logout-modal-overlay">
                    <div class="logout-modal-box">
                        <h3>Keluar dari Akun?</h3>
                        <p>Anda akan keluar dari admin Seruli Anda. Apakah Anda yakin ingin melanjutkan?</p>

                        <div class="logout-modal-btns">
                            <button type="button" class="btn-batal" onclick="hideLogoutModal()">Batal</button>
                            <button type="button" class="btn-yes" onclick="submitLogout()">Ya, Keluar</button>
                        </div>
                    </div>
                </div>

                <div id="logoutModal" class="logout-modal-overlay">
                    <div class="logout-modal-box">
                        <h3>Keluar dari Akun?</h3>
                        <p>Anda akan keluar dari admin Seruli Anda. Apakah Anda yakin ingin melanjutkan?</p>

                        <div class="logout-modal-btns">
                            <button type="button" class="btn-batal" onclick="hideLogoutModal()">Batal</button>
                            <button type="button" class="btn-yes" onclick="submitLogout()">Ya, Keluar</button>
                        </div>
                    </div>
                </div>

</body>
<script>
    function showLogoutModal() {
        document.getElementById('logoutModal').style.display = 'flex';
    }

    function hideLogoutModal() {
        document.getElementById('logoutModal').style.display = 'none';
    }

    function submitLogout() {
        document.getElementById('logout-form').submit();
    }
</script>

</html>
