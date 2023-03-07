<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
        <img src="../../../Admin/assets/img/icons/brands/logo-dark.png" alt="" width="50%" style="margin-left: -12px;">
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-2">
      <!-- Dashboard -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">APPS</span>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.dashboard') }}" class="menu-link">
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
            <a href="{{ route('pengaduan.masuk') }}" class="menu-link">
              <div data-i18n="managePengaduan">Kontak Masuk</div>
            </a>
          </li>
          
          <li class="menu-item">
            <a href="{{ route('pengaduan.ditanggapi') }}" class="menu-link">
              <div data-i18n="generatePengaduan">Diterima</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('pengaduan.ditolak') }}" class="menu-link">
              <div data-i18n="generatePengaduan">Di Tolak</div>
            </a>
          </li>
        </ul>
      </li>
      @if (auth()->user()->role_id == 1)
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Management</span>
          </li>
          <li class="menu-item">
            <a href="{{ route('generate.laporan') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-file"></i>
              <div data-i18n="Analytics">Generate Laporan</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user-pin"></i>
              <div data-i18n="">Data Petugas</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ route('register.petugas') }}" class="menu-link">
                  <div data-i18n="addPetugas">Tambah Petugas</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('data.petugas') }}" class="menu-link">
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
                <a href="{{ route('kelola.masyarakat') }}" class="menu-link">
                  <div data-i18n="manageMasyarakat">Kelola Masyarakat</div>
                </a>
              </li>
            </ul>
          </li>
           
      @endif
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Logout</span>
      </li>
      <li class="menu-item">
        <form action="{{ route('admin.logout') }}" method="get" class="menu-link" style="cursor: pointer;background-color:transparent;">
          <button type="submit" class="btn btn-primary w-100">
            <i class="menu-icon tf-icons bx bx-power-off"></i>Logout
          </button>
        </form>
      </li>
    </ul>
  </aside>