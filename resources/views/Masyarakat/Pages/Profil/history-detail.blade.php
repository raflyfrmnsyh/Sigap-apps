<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }}</title>
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../../Masyarakat/Assets/css/style.css">
</head>
<body>

    {{-- @dd($tanggapan) --}}
        <header class="header2">
            <div class="container-md">
                <nav class="navbar-2">
                    <a href="/history" class="back _Btn">
                        <i class='bx bx-chevron-left'></i>
                        <!-- <p>bc</p> -->
                    </a>
                    <div class="navbar-title">
                        <span>{{ $data->judul_laporan }}</span>
                    </div>
                    <a href="/profil" class="notif _Btn">
                        <i class="bx bx bx-user"></i>
                        <!-- <p>nt</p> -->
                    </a>
                </nav>
            </div>            
        </header>


    <section class="detail-history">

        <div class="container-md">
            <div class="detail-bx">
                
            </div>
            <div class="detail_pengaduan">
                <div class="img-bx">
                    <img src="../../storage/{{ $data->foto }}" alt="detail_img">
                </div>
                <div class="detail-bx">
                    <div class="detail-body">
                        <p class="detail-date">
                            {{ date( 'D - m - Y', strtotime( $data->tgl_pengaduan ) ) }}
                        </p>
                        <h3 class="detail-title">
                            Judul Berita
                        </h3>
                        <div class="detail-paragraf">
                            <p>{{ $data->isi_laporan }}</p>
                        </div>
                    </div>
                @foreach ($tanggapan as $item)
                    <div class="tanggapan-bx">
                        <h3>Tanggapan : {{ $item->status }}</h3>
                        <p class="detail-tanggapan">
                            {{ $item->tanggapan }}
                        </p>

                        <span>
                            Di tanggapi oleh : {{ $item->username }}
                        </span>
                    </div>
                @endforeach
                </div>
                
            </div>
            

        </div>


    </section>


    <script src="Masyarakat/Assets/js/script.js"></script>

</body>

</html>
