@extends('Masyarakat.Tamplate.tamplate')

@section('content')

{{-- @dd($data) --}}

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
                    <a href="{{ route('beranda.masyarakat') }}" class="btn-profil">
                        <i class='bx bx-bell'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="feed-container">
    <div class="container-md">
        
        @if ($data->count() < 0)
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <center>
                <span style="opacity: .6;">Belum ada Pengaduan</span>
            </center>
        @endif
        @foreach ($data as $item)
            {{-- @dd($item) --}}
                <div class="card-feed">
                    <div class="card-header">
                        <div class="profil">
                            @if ($item->masyarakat->user->gender == 'tidak diketahui')
                                <img src="Masyarakat/Assets/img/unknown.png" alt="profil" class="profil-img"> 
                            @endif
                            @if ($item->masyarakat->user->gender == 'pria')
                                <img src="Masyarakat/Assets/img/pp.png" alt="profil" class="profil-img"> 
                            @endif
                            @if ($item->masyarakat->user->gender == 'wanita')
                                <img src="Masyarakat/Assets/img/pp2.png" alt="profil" class="profil-img"> 
                            @endif
                            <div class="profil_info">
                                <span>{{ "@" . $item->masyarakat->user->username }}</span>
                                <h4>{{ $item->masyarakat->name }}</h4>
                            </div>
                        </div>
                        <div class="date">
                            <span>{{ $item->updated_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    <div class="feed-img">
                        <img src="../../storage/{{ $item->foto }}" alt="img-pengaduan">
                    </div>
                    <div class="feed-body">

                        <div class="feed-value">
                            <div class="head">
                                <div class="title">
                                    <h3>{{ $item->judul_laporan }}</h3>
                                </div>
                                <div class="location">
                                    <span>{{ $item->lokasi }}</span>
                                    <i class="bx bx-map"></i>
                                </div>
                            </div>
                            <p>
                            {{ $item->isi_laporan }}
                            </p>
                        </div>
                    </div>
                    @if (!is_null($item->tanggapan))
                        <div class="feed-tanggapan">
                            <span><b>Di Tanggapi oleh :</b>{{ $item->tanggapan->username }}</span>
                            <div class="tanggapan-value">
                                <p>
                                    {{ $item->tanggapan->tanggapan }}
                                </p>
                            </div>
                        </div>  
                    @endif
                    
                </div>
            @endforeach

        
    </div>
</section>





    


    @include('Masyarakat.Tamplate.Partials._navBottom')


@endsection

