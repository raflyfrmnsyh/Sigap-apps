@extends('Masyarakat.Tamplate.tamplate')

@section('content')

{{-- @dd($userData) --}}
{{-- @dd($data); --}}

    @include('Masyarakat.Tamplate.Partials._navbar2')

    <section class="profil-saya">
        <div class="container-md">
            <div class="profil-detail">
                <div class="img-profil">
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
                <div class="profil-detail_txt">
                    <div class="_top">
                        <span class="account-info">{{"@" . $userData->username }}</span>
                        <h3 class="name">{{ $userData->name }}</h3>
                    </div>
                    <div class="_bottom">
                        <div class="count">
                            {{ $data }}
                        </div>
                        <div class="_info">
                            Laporan
                        </div>
                    </div>
                </div>
            </div>

            <div class="profil-nav">
                <ul>
                    <a href="{{ route('akun.saya.masyarakat') }}" class="profil-link">
                        <span>Akun Saya</span>
                        <i class='bx bx-chevron-right'></i>
                    </a>
                    <a href="{{ route('ubah.password_') }}" class="profil-link">
                        <span>Ubah Password</span>
                        <i class='bx bx-chevron-right'></i>
                    </a>
                    <a href="{{ route('pusat.bantuan') }}" class="profil-link">
                        <span>Bantuan</span>
                        <i class='bx bx-chevron-right'></i>
                    </a>
                </ul>
            </div>

            <form action="{{ route('logout') }}" class="btn_logout">
                <button type="submit">
                    Logout
                </button>
            </form>
        </div>
    </section>

@endsection