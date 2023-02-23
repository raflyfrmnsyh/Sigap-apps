@extends('Petugas\Tamplate\tamplate');

@section('content')
    @section('content-container')
    <form action="/petugas-reg-proses" method="POST">
        @csrf
        <div class="card mb-4">
            <h5 class="card-header">Tambah Data Petugas</h5>
            <div class="card-body">
                <div>
                    <input
                    type="text"
                    class="form-control"
                    id="defaultFormControlInput"
                    placeholder="Nama Lengkap"
                    name="name"
                    value="{{ old('name') }}"
                    aria-describedby="defaultFormControlHelp"
                    />
                </div>
                @error('name')

                <div class="alert alert-danger alert-dismissible my-3" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    
                @enderror
                <div class="mt-4">
                    <input
                    type="text"
                    class="form-control"
                    id="defaultFormControlInput"
                    placeholder="Username"
                    name="username"
                    value="{{ old('username') }}"
                    aria-describedby="defaultFormControlHelp"
                    />
                </div>
                @error('username')

                <div class="alert alert-danger alert-dismissible my-3" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    
                @enderror
                <div class="mt-4">
                    <input
                    type="text"
                    class="form-control"
                    id="defaultFormControlInput"
                    placeholder="No.Telp"
                    name="telp"
                    value="{{ old('telp') }}"
                    aria-describedby="defaultFormControlHelp"
                    />
                </div>
                @error('telp')

                <div class="alert alert-danger alert-dismissible my-3" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    
                @enderror
                <div class="mt-4 input-group">
                    <select class="form-select" id="inputGroupSelect01" name="Level">
                      <option selected>Pilih Level</option>
                      <option value="1">Admin</option>
                      <option value="2">Petugas</option>
                    </select>
                </div>
                <div class="mt-4">
                    <input
                    type="password"
                    class="form-control"
                    name="password"
                    id="defaultFormControlInput"
                    placeholder="Buat Password"
                    aria-describedby="defaultFormControlHelp"
                    />
                </div>
                @error('password')

                <div class="alert alert-danger alert-dismissible my-3" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    
                @enderror
                <div class="my-4">
                    <input
                    type="submit"
                    class="btn btn-primary"
                    id="defaultFormControlInput"
                    value="Tambahkan"
                    aria-describedby="defaultFormControlHelp"
                    />
                </div>
            </div>
        </div>
    </form>
    @endsection
    @if (session()->has('success'))
        <script>
            alert(`{{ session('success') }}`);
        </script>
    @endif
@endsection