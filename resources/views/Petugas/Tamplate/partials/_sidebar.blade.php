<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/Admin/Dashboard" class="app-brand-link">
        <img src="../../Admin/assets/img/icons/brands/logo-dark.png" alt="" width="50%" style="margin-left: -12px;">
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="/Admin/Dashboard" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-customize"></i>
          <div data-i18n="">Pengaduan</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="/Admin/kontak-masuk" class="menu-link">
              <div data-i18n="managePengaduan">Kontak Masuk</div>
            </a>
          </li>
          
          <li class="menu-item">
            <a href="/Admin/sudah-ditanggapi" class="menu-link">
              <div data-i18n="generatePengaduan">Sudah Ditanggapi</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/Admin/ditolak" class="menu-link">
              <div data-i18n="generatePengaduan">Di Tolak</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-buildings"></i>
          <div data-i18n="">Kelola Fasilitas</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="/Admin/Fasilitas" class="menu-link">
              <div data-i18n="addPetugas">Tambah Fasilitas</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/Admin/petugas-dat" class="menu-link">
              <div data-i18n="seePetugas">Lihat Fasiltas</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Management</span>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-user-pin"></i>
          <div data-i18n="">Data Petugas</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="/Admin/petugas-reg" class="menu-link">
              <div data-i18n="addPetugas">Tambah Petugas</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/Admin/petugas-dat" class="menu-link">
              <div data-i18n="seePetugas">Lihat Petugas</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-user"></i>
          <div data-i18n="">Data Masyarakat</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="/Admin/kelola-masyarakat" class="menu-link">
              <div data-i18n="manageMasyarakat">Kelola Masyarakat</div>
            </a>
          </li>
        </ul>
      </li>
     {{-- Berita --}}
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Berita</span>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-detail"></i>
          <div data-i18n="">Berita</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="/Admin/tambah-berita" class="menu-link">
              <div data-i18n="addPetugas">Tambah Berita</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="/Admin/kelola-berita" class="menu-link">
              <div data-i18n="seePetugas">Kelola Berita</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Settings</span>
      </li>
      <li class="menu-item">
        <a href="/site-setting" class="menu-link">
          <i class="menu-icon tf-icons bx bx-server"></i>
          <div data-i18n="Analytics">Site Settings</div>
        </a>
      </li>
    </ul>
  </aside>