@include('Masyarakat.Tamplate.Partials._head')


<div class="landing-section">
    <div class="container-md">
        <nav class="navbar_landing">
            <a href="/" class="nav-logo">
                <img src="Masyarakat\Assets\img\logo-dark.png" alt="">
            </a>
            <ul class="nav-menu">
                <li class="nav-item active">
                    <a href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#fitur">Fitur Sigap</a>
                </li>
                <li class="nav-item">
                    <a href="#tentang">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a href="#alur">Alur Pengaduan</a>
                </li>

                {{-- CHECK AUTH --}}

                @if (Auth::check())
                    
                    @if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
                        <li class="nav-item btn">
                            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                    @endif
                    @if (auth()->user()->role_id == 3)
                        <li class="nav-item btn">
                            <a href="{{ route('beranda.masyarakat') }}">Beranda</a>
                        </li>
                    @endif

                @endif

                @if (!Auth::check())
                    <li class="nav-item btn">
                        <a href="{{ route('register.masyarakat') }}">Get Started</a>
                    </li>
                @endif
                
                
                
            </ul>

            <div class="menu-btn">
                <i class="bx bx-menu"></i>
            </div>
        </nav>

        <section class="hero" id="hero">
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

        <section class="fitur-section" id="fitur">
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
    <section class="tentang-section" id="tentang">
        <div class="container-md">
            <div class="tentang-info">
                <div class="text">
                    <h5>Tentang sigap</h5>
                    <h2>Platform pengaduan Masyarakat terbaik</h2>
                    <p>Sigap Merupakan aplikasi layanan masyarakat untuk melakukan pengaduan.Sigap hadir dengan nuansa modern supaya mempermudah para penggunanya dalam melakukan pengaduan.</p>
                </div>
            @if (!Auth::check())
                <div class="ctaBtn">
                    <a href="{{ route('register.masyarakat') }}" class="btn cta-btn">Get Started</a>
                </div>
            @endif
                
            </div>
            <div class="mockup-img">
                <img src="Masyarakat\Assets\img\mockup2.png" alt="">
            </div>
        </div>
        <div class="gradient"></div>
    </section>

    <section class="alur-section" id="alur">
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

    <section class="section-footer" id="footer">
        <div class="container-md">
            <div class="footer">
                <div class="footer-info">
                    <a href="" class="footer-logo">
                        <img src="Masyarakat\Assets\img\logo-dark.png" alt="">
                    </a>
                    <div class="footer-text">
                        <h2>Mulailah melakukan pengaduan bersama sigap</h2>
                        <p>Sigap hadir untuk menjadi penghubung antara masyarakat dan Pemerintah setempat untuk mengaukan aduan.</p>
                    </div>
                </div>
                <div class="footer-menu">
                    <ul class="footer-item">
                        <h3 class="_title">Navigasi cepat</h3>
                        <li class="footer-link">
                            <a href="/">Beranda</a>
                            <a href="#fitur">Fitur Sigap</a>
                            <a href="#tentang">Tentang Sigap</a>
                            <a href="#alur">Alur Pengaduan</a>
                        </li>
                    </ul>
                    <ul class="footer-item">
                        <h3 class="_title">Fitur-Fitur</h3>
                        <li class="footer-link">
                            <a href="{{ route('register.masyarakat') }}">Melakukan Pengaduan</a>
                            <a href="{{ route('register.masyarakat') }}">Feed Pengaduan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="container-md">
                <div>
                    <i class="bx bx-copyright"></i>
                    <span>copyright 2023 PT Sigap Sejahtera</span>
                </div>
            </div>
        </div>
    </section>

    

</div>
<div class="back-top-btn" onclick="topFunction()">
    <div class="btn-top">
        <i class='bx bx-chevron-up'></i>
    </div>
</div>










<script>

    const   nav_menu = document.querySelector('.nav-menu'),
            nav_toggle = document.querySelector('.menu-btn');

    nav_toggle.addEventListener('click', function () {
        nav_menu.classList.toggle('show');
    });

    let mybutton = document.querySelector(".back-top-btn");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction()
    {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.classList.add('show');
            nav_menu.classList.remove('show');
        } else {
            mybutton.classList.remove('show');

        }
    }

    function topFunction() {
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }


</script>



@include('Masyarakat.Tamplate.Partials._footer')