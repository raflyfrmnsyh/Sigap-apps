@extends('Masyarakat.Tamplate.tamplate')

@section('content')

{{-- @dd($data) --}}
<header class="header2">
    <div class="container-md">
        <nav class="navbar-2">
            <a href="/profil" class="back _Btn">
                <i class='bx bx-chevron-left'></i>
                <!-- <p>bc</p> -->
            </a>
            <div class="navbar-title">
                <span>Histoy Laporan</span>
            </div>
            <a href="{{ route('beranda.masyarakat') }}" class="notif _Btn">
                <i class="bx bx-home"></i>
                <!-- <p>nt</p> -->
            </a>
        </nav>
    </div>

    
</header>

<section class="history">
    <div class="container-md">
        @if (count($data) == 0)
            <div style="text-align:center;opacity:.6;">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <span>Tidak ada Pengaduan</span>
            </div>
        @endif

        @foreach ($data as $i)     
        {{-- @dd($i->status)        --}}
                <div class="history-bx">
                    <div class="card-history">
                        <div class="card-img">
                            <img src="storage/{{ $i->foto }}" alt="as">
                        </div>
                        <div class="card-body">
                            <div class="card-body_head">
                                <div class="_title">
                                    <div class="date">{{ date( 'D - m - Y', strtotime( $i->tgl_pengaduan ) ) }}</div>
                                    <a href="/history/lihat-detail/{{ $i->id }}" class="judul_pengaduan">{{ $i->judul_laporan }}</a>
                                </div>
                                <div class="status_pengaduan">
                                    @if ($i->status == 'prosess')
                                        <div class="badge badge-warning">
                                            <span>Belum diterima</span>
                                        </div>
                                    @endif
                                    @if ($i->status == 'tolak')
                                        <div class="badge badge-danger">
                                            <span>Laporan Ditolak</span>
                                        </div>
                                    @endif
                                    @if ($i->status == 'terima')
                                        <div class="badge badge-success">
                                            <span>Laporan Diterima</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body_text">
                                <p>{{ $i->isi_laporan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            @endforeach

        
    </div>
</section>
@endsection