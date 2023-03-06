@include('Masyarakat.Tamplate.Partials._head')


<div class="landing-section">
    <div class="container-md">
        <nav class="navbar_landing">
            <a href="/landing-page" class="nav-logo">
                <img src="Masyarakat\Assets\img\logo-dark.png" alt="">
            </a>
            <ul class="nav-menu">
                <li class="nav-item active">
                    <a href="">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="">Fitur Sigap</a>
                </li>
                <li class="nav-item">
                    <a href="">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a href="">Alur Pengaduan</a>
                </li>
                <li class="nav-item btn">
                    <a href="">Get Started</a>
                </li>
            </ul>

            <div class="menu-btn">
                <i class="bx bx-menu"></i>
            </div>
        </nav>

        <section class="hero">
            <div class="hero-info">
                <div class="text">
                    <h2>APLIKASI PENGADUAN <span>MASYARAKAT</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
                </div>
                <div class="download">
                    <img src="Masyarakat\Assets\img\playstore.png" alt="Playstore" class="playstore">
                    <img src="Masyarakat\Assets\img\appstore.png" alt="App Store" class="App Store">
                </div>
            </div>
            <div class="hero-img">
                <img src="Masyarakat\Assets\img\mockup1.png" alt="Hero Img">
            </div>
        </section>

        <section class="fitur-section">
            <div class="fitur-list">
                <div class="card">
                    <div class="icon">
                        <img src="Masyarakat\Assets\img\Clipboard.png" alt="">
                    </div>
                    <div class="body">
                        <h3>Lapor Cepat</h5>
                        <p>Mengajukan Pengaduan dengan cepat dan mudah</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon">
                        <img src="Masyarakat\Assets\img\Responsive.png" alt="">
                    </div>
                    <div class="body">
                        <h3>Responsive Apps</h5>
                        <p>Aplikasi mampu digunakan dalam berbagai device</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon">
                        <img src="Masyarakat\Assets\img\Compliant.png" alt="">
                    </div>
                    <div class="body">
                        <h3>Keamanan Pengguna</h5>
                        <p>Data Pengguna terlindungi oleh system.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon">
                        <img src="Masyarakat\Assets\img\Forum.png" alt="">
                    </div>
                    <div class="body">
                        <h3>Feed Pengaduan</h5>
                        <p>Dapat Melihat Pengaduan Public</p>
                    </div>
                </div>
            </div>
            <div class="fitur-detail">
                <h5>Fitur sigap</h5>
                <h2>Fitur yang terdapat dalam aplikasi Sigap</h2>
                <p>Sigap Merupakan Aplikasi pengaduan yang dapat anda gunakan untuk mengadukan segala sesuatu yang ada di sekitar anda, dan terdapat beberapa fitur utama yang hadir untuk memudahkan anda.</p>
            </div>
        </section>
    </div>

    <section class="tentang-section">
        <div class="container-md">
            <div class="tentang-info">
                <div class="text">
                    <h5>Tentang sigap</h5>
                    <h2>Fitur yang terdapat dalam aplikasi Sigap</h2>
                    <p>Sigap Merupakan Aplikasi pengaduan yang dapat anda gunakan untuk mengadukan segala sesuatu yang ada di sekitar anda, dan terdapat beberapa fitur utama yang hadir untuk memudahkan anda.</p>
                </div>
                <div class="ctaBtn">
                    <a href="" class="btn cta-btn">Get Started</a>

                </div>
            </div>
            <div class="mockup-img">
                <img src="Masyarakat\Assets\img\mockup2.png" alt="">
            </div>
        </div>
        <div class="gradient"></div>
    </section>

    <section class="alur-section">
        <div class="container-md">
            <div class="title">
                <h4>Alur Pengaduan</h4>
                <h2>Bagaimana alur pengaduan masyarakat?</h2>
            </div>
            <div class="alur-bx">
                <div class="card">
                    <div class="icon">
                        <i class="bx bxs-user-account"></i>
                    </div>
                    <div class="body">
                        <h4>Registrasi Akun</h4>
                        <p>Tahap Pertama anda perlu mendaftar sebagai masyarakat di aplikasi Sigap.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon">
                        <i class="bx bx-edit-alt"></i>
                    </div>
                    <div class="body">
                        <h4>Menulis Laporan</h4>
                        <p>Setelah anda memiliki akun anda dapat membuat laporan dalam aplikasi.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon">
                        <i class="bx bx-loader"></i>
                    </div>
                    <div class="body">
                        <h4>Menunggu Ditanggapi</h4>
                        <p>Setelah Pengaduan terkirim anda perlu menunggu beberapa waktu untuk ditanggapi oleh petugas</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon">
                        <i class="bx bx-check-double"></i>
                    </div>
                    <div class="body">
                        <h4>Pengaduan Diterima</h4>
                        <p>Setelah pengaduan ditanggapi anda dapat melihat dalam halaman history</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>










<script>

    const   nav_menu = document.querySelector('.nav-menu'),
            nav_toggle = document.querySelector('.menu-btn');

    nav_toggle.addEventListener('click', function () {
        nav_menu.classList.toggle('show');
    });




</script>



@include('Masyarakat.Tamplate.Partials._footer')