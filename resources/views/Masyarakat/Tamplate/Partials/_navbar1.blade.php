<header>
    <div class="container-md">
        <div class="navbar-top">
            <a href="/beranda"class="navbar-logo">
                <img src="Masyarakat/Assets/img/logo-dark.png" alt="Logo">
            </a>
            <div class="navbar-menu">
                <div class="nav-link">
                    <a href="{{ route('beranda.masyarakat') }}" class="active">Beranda</a>
                </div>
                <div class="nav-link">
                    <a href="{{ route('feed.masyarakat') }}">Feed</a>
                </div>
                <div class="nav-link">
                    <a href="{{ route('pusat.bantuan') }}">Pusat Bantuan</a>
                </div>
            </div>
            <div class="nav-icon">
                <div class="nav-link">
                    <a href="/history" class="btn-profil">
                        <i class='bx bx-bell'></i>
                    </a>
                </div>

                <div class="nav-link">
                    <a href="/profil" class="btn-profil">
                        <i class='bx bx-user'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>