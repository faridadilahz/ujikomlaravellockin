<link rel="stylesheet" href="{{ asset('css/partials/admin/sidebar.css') }}" />

<aside class="sidebar">
    <div class="sidebar-brand">
        <a href="{{ url('/beranda') }}" class="logo">
            <img src="{{ asset('assets/img/logosss.png') }}" alt="Logo Seruli" class="logo-img" />
            <span class="logo-text">Seruli</span>
        </a>
    </div>

    <div class="sidebar-menu-wrapper">
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('admin.dasbor') }}"
                    class="nav-item {{ request()->routeIs('admin.dasbor') ? 'active' : '' }}">
                    <ion-icon name="grid-outline"></ion-icon>
                    <span>Dasbor</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.berita') }}"
                    class="nav-item {{ request()->routeIs('admin.berita*') ? 'active' : '' }}">
                    <ion-icon name="newspaper-outline"></ion-icon>
                    <span>Kelola Berita</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.galeri') }}"
                    class="nav-item {{ request()->routeIs('admin.galeri*') ? 'active' : '' }}">
                    <ion-icon name="images-outline"></ion-icon>
                    <span>Kelola Galeri</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidebar-footer">
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('admin.profil') }}"
                    class="nav-item {{ request()->routeIs('admin.profil') ? 'active' : '' }}">
                    <ion-icon name="person-outline"></ion-icon>
                    <span>Profil</span>
                </a>
            </li>
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="button" class="nav-item nav-item-danger" onclick="showLogoutModal()">
                        <ion-icon name="log-out-outline"></ion-icon>
                        <span>Keluar</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>

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
