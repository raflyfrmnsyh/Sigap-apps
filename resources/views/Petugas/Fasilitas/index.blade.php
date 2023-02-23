@extends('Petugas\Tamplate\tamplate');

@section('content')
    @section('content-container')
    <form action="/Admin/Fasilitas/add" method="POST">
        @csrf
        <div class="card mb-4">
            <h5 class="card-header">Tambah Data Fasilitas</h5>
            <div class="card-body">
                <div>
                    <input
                    type="text"
                    class="form-control"
                    id="defaultFormControlInput"
                    placeholder="Nama Lengkap"
                    name="nama_fasilitas"
                    value="{{ old('nama_fasilitas') }}"
                    aria-describedby="defaultFormControlHelp"
                    />
                </div>
                @error('nama_fasilitas')

                <div class="alert alert-danger alert-dismissible my-3" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    
                @enderror
                <div class="my-4">
                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02" name="foto_fasilitas"/>
                    </div>
                </div>

                @error('foto_fasilitas')

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

@endsection