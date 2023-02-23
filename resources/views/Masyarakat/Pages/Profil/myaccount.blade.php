@extends('Masyarakat.Tamplate.tamplate')

@section('content')

<header class="header2">
    <div class="container-md">
        <nav class="navbar-2">
            <a href="/profil" class="back _Btn">
                <i class='bx bx-chevron-left'></i>
                <!-- <p>bc</p> -->
            </a>
            <div class="navbar-title">
                <span>Data Diri</span>
            </div>
            <a href="{{ route('beranda.masyarakat') }}" class="notif _Btn">
                <i class="bx bx-home"></i>
                <!-- <p>nt</p> -->
            </a>
        </nav>
    </div>
</header>

<section class="dataDiri">
    <div class="container-md">
        <div class="dataDiri-info">
            <div class="img-bx" style="display: flex;align-items:center; justify-content:center;">
                    @if ($userData->gender == 'tidak diketahui')
                        <i class="bx bxs-user" style="font-size: 64px; color:#888;"></i>
                    @endif
                    @if ($userData->gender == 'pria')
                       <img src="Masyarakat/Assets/img/pp.png" alt="ProfilImg">        
                    @endif
                    @if ($userData->gender == 'wanita')
                       <img src="Masyarakat/Assets/img/pp2.png" alt="ProfilImg">        
                    @endif
            </div>
            <div class="dataDiri-info_field">
                <div class="_field">
                    <label>NIK</label>
                    <span>{{ $userData->masyarakat->nik }}</span>
                </div>
                <div class="_field">
                    <label>Username</label>
                    <span>{{ $userData->username }}</span>
                </div>
                <div class="_field">
                    <label>Nama</label>
                    <span>{{ $userData->name }}</span>
                </div>
                <div class="_field">
                    <label>No.Phone</label>
                    <span>{{ $userData->masyarakat->telp }}</span>
                </div>
                <div class="_field">
                    <label>Gender</label>
                    <span>{{ $userData->gender }}</span>
                </div>
                <a  href="{{ route('ubah.akun.masyarakat') }}" class="ChangeBtn">
                    <button>Ubah</button>
                </a>
            </div>
        </div>

    </div>
</section>
    
@endsection