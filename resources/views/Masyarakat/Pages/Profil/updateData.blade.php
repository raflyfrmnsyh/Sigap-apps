@extends('Masyarakat.Tamplate.tamplate')

@section('content')

<header class="header2">
    <div class="container-md">
        <nav class="navbar-2">
            <a href="{{ route('akun.saya.masyarakat') }}" class="back _Btn">
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


<section class="dataDiri" style="margin-bottom: 50px;">
    <div class="container-md">
        <form class="dataDiri-info" action="{{ route('update.akun.masyarakat') }}" method="POST">
            @csrf
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
                <input type="text" name="nik" class="_field" placeholder="NIK" value="{{ $userData->masyarakat->nik }}" maxlength="16">
                    @error('nik')
                        <span class="error_message">{{ $message }}</span>
                        <br>
                        <br>
                    @enderror
                <input type="text" name="name" class="_field" placeholder="Nama" value="{{ $userData->name }}">
                    @error('name')
                        <span class="error_message">{{ $message }}</span>
                        <br>
                        <br>
                    @enderror
                <input type="text" name="username" class="_field" placeholder="Username" value="{{ $userData->username }}">
                    @error('username')
                        <span class="error_message">{{ $message }}</span>
                        <br>
                        <br>
                    @enderror
                <input type="text" name="telp" class="_field" placeholder="telp" value="{{ $userData->masyarakat->telp }}" maxlength="13">
                    @error('telp')
                        <span class="error_message">{{ $message }}</span>
                        <br>
                        <br>
                    @enderror
                @if ($userData->gender == 'tidak diketahui')
                    <select name="gender" id="gender">
                        <option value="tidak diketahui">-- Pilih Gender --</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                @endif
                @if ($userData->gender == 'pria' || $userData->gender == 'wanita')
                    <select name="gender" id="gender">
                        <option value="{{ $userData->gender }}">-- {{ $userData->gender }} -- </option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                @endif


                <button type="submit">Update Data</button>
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