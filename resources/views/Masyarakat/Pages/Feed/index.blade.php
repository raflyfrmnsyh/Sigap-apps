@extends('Masyarakat.Tamplate.tamplate')

@section('content')

<header>
    <div class="container-md">
        <div class="navbar-top">
            <a href="/beranda"class="navbar-logo">
                <img src="Masyarakat/Assets/img/logo-dark.png" alt="Logo">
            </a>
            <div class="nav-icon">
                <div class="nav-link">
                    <a href="{{ route('beranda.masyarakat') }}" class="btn-profil">
                        <i class='bx bx-plus'></i>
                    </a>
                </div>
                <div class="nav-link" style="display: flex !important; ">
                    <a href="{{ route('history.masyarakat') }}" class="btn-profil">
                        <i class='bx bx-bell'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="feed-container">
    <div class="container-md">
        @for ($i = 0; $i < 10; $i++)
            <div class="card-feed">
                <div class="card-header">
                    <div class="profil">
                        <img src="Masyarakat/Assets/img/pp2.png" alt="profil" class="profil-img">
                        <div class="profil_info">
                            <span>{{ "@" }}username</span>
                            <h4>nama pengguna</h4>
                        </div>
                    </div>
                    <div class="date">
                        <span>1 mnt ago</span>
                    </div>
                </div>
                <div class="feed-img">
                    <img src="https://www.suarasurabaya.net/wp-content/uploads/2021/01/WhatsApp-Image-2021-01-18-at-08.44.56-2-840x493.jpeg" alt="img-pengaduan">
                </div>
                <div class="feed-body">

                    <div class="feed-value">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ipsam odit repellendus dolore nemo quisquam assumenda obcaecati ut minima doloribus expedita ea, praesentium minus ad eveniet earum, magni, maxime sint fuga sed laboriosam voluptates! Velit modi similique animi molestias consectetur esse, rem quisquam dolor odit.
                        </p>
                    </div>
                </div>
                <div class="feed-tanggapan">
                    <span><b>Di Tanggapi oleh :</b> Nama Petugas</span>
                    <div class="tanggapan-value">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta consequatur tempore nisi praesentium nemo ratione, temporibus fugiat sapiente doloribus neque in dolorum non!
                        </p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</section>





    


    @include('Masyarakat.Tamplate.Partials._navBottom')


@endsection

