@extends('Masyarakat.Tamplate.tamplate')

@section('content')

<header class="header2">
    <div class="container-md">
        <nav class="navbar-2">
            <a href="{{ route('profil.masyarakat') }}" class="back _Btn">
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

<section class="dataDiri" style="margin-bottom: 0px;">
    <div class="container-md">
        <form class="dataDiri-info" action="{{ route('ubah.password.prosess') }}" method="POST">
            @csrf
            
            <div class="dataDiri-info_field">
                <input type="password" name="password-confirm" class="_field" placeholder="Password Dulu">
                    @error('password-confirm')
                        <span class="error_message">{{ $message }}</span>
                        <br>
                        <br>
                    @enderror
                    @if (session()->has('fail'))
                        <span class="error_message">{{ session('fail') }}</span>
                        <br>
                    @endif
                <input type="password" name="password-baru" class="_field" placeholder="Password Baru" value="">
                    @error('password-baru')
                        <span class="error_message">{{ $message }}</span>
                        <br>
                        <br>
                    @enderror
                <button type="submit">Ubah Password</button>
            </div>
        </form>
    </div>
</section>

@if (session()->has('success'))
    <script>
        alert(`{{ session('success') }}`);
    </script>
@endif
    
@endsection