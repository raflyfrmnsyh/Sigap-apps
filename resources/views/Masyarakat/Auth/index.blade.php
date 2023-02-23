@extends('Masyarakat\Tamplate\Auth-tamplate')

@section('content')
@if (session()->has('success'))
    <div class="alert-cstm ">
        <div class="alert-bx alert_success show">
            <p class="alert-msg">
                {{ session('success') }}
            </p>
            <div class="alert_close">
                <i class="bx bx-plus"></i>
            </div>
        </div>
    </div>    
@endif

@if (session()->has('fail'))
    <div class="alert-cstm ">
        <div class="alert-bx alert_danger show">
            <p class="alert-msg">
                {{ session('fail') }}
            </p>
            <div class="alert_close">
                <i class="bx bx-plus"></i>
            </div>
        </div>
    </div>    
@endif
@endsection

@section('formAuth')

    <form action="{{ route('login') }}" method="POST" class="form-auth d-flex login">
        @csrf
        <div class="form-head">
            <img src="Masyarakat/Assets/img/logo-dark.png" alt="Logo">
            <p>Untuk menggunakan Aplikasi ini anda perlu melakukan proses login terlebih dahulu.</p>
        </div>
        <div class="form-input">
            <label for="Username" class="form-input_group">
                <input type="text" name="username" id="username" required="required" value="{{ old('username') }}">
                <span>Username</span>
            </label>
                @error('username')
                    <span class="error_message">{{ $message }}</span>
                @enderror
            <label for="Password" class="form-input_group">
                <input type="password" name="password" id="Password" required="required">
                <span>Password</span>
            </label>
                @error('password')
                    <span class="error_message">{{ $message }}</span>
                @enderror

        </div>
        <div class="form-foot">
            {{-- <a href="/forgot-password" class="forgot-pw">Lupa Password?</a> --}}
            <button class="btn" type="submit">Masuk</button>
            <span>Belum Memiliki akun?<a href="{{ Route('register.masyarakat') }}">Daftar</a></span>
        </div>
    </form>

@endsection

