@extends('Masyarakat\Tamplate\Auth-tamplate')

@section('formAuth')
    <form action="{{ Route('register') }}" class="form-auth d-flex" method="POST">
        @csrf
        <div class="form-head">
            <img src="Masyarakat/Assets/img/logo-dark.png" alt="Logo">
            <p>Jika anda ingin menggunakan aplikasi ini dan anda belum memiliki akun, silahkan untuk membuat
                akun terlebih dahulu.</p>
        </div>
        <div class="form-input">
            <label for="nik" class="form-input_group">
                <input type="text" name="nik" id="nik" required="required" value="{{ old('nik') }}" maxlength="16">
                <span>NIK</span>
            </label>
                @if(session()->has('nik_tersedia'))
                    <span class="error_message">{{ session('tersedia') }}</span>
                @endif
            @error('nik')
                    <span class="error_message">{{ $message }}</span>
                @enderror
            <label for="Name" class="form-input_group">
                <input type="text" name="name" id="Name" required="required" value="{{ old('name') }}">
                <span>Nama Lengkap</span>
            </label>
                @error('name')
                    <span class="error_message">{{ $message }}</span>
                @enderror
            <label for="Username" class="form-input_group">
                <input type="text" name="username" id="Username" required="required" value="{{ old('username') }}">
                <span>Username</span>
            </label>

                @if(session()->has('tersedia'))
                    <span class="error_message">{{ session('tersedia') }}</span>
                @endif
                @error('username')
                    <span class="error_message">{{ $message }}</span>
                @enderror
             <label for="telp" class="form-input_group">
                <input type="text" name="telp" id="telp" required="required" value="{{ old('telp') }}" maxlength="13">
                <span>No.Phone</span>
            </label>
                @error('telp')
                    <span class="error_message">{{ $message }}</span>
                @enderror
            <label for="Password" class="form-input_group">
                <input type="password" name="password" id="Password" required="required">
                <span>Buat Password</span>
            </label>
                @error('password')
                    <span class="error_message">{{ $message }}</span>
                @enderror

        </div>
        <div class="form-foot">
            <button class="btn" type="submit">Daftar</button>
            <span>Sudah Memiliki akun?<a href="/login">Login</a></span>
        </div>
    </form>
@endsection
