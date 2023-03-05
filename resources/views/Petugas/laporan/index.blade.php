@extends('Petugas\Tamplate\tamplate')

@section('content')
    @section('content-container')
    
        
        <div class="card">
            <div class="card-body">

                {{-- Sort sesuai tanggal --}}

                <form method="" action="{{ route('filter.pengaduan') }}" class="sortByTgl">
                    @csrf
                    <label for="" class="mb-2">Tanggal Awal</label>
                    <input class="form-control" type="date" name="tgl_awal" />

                    <label for="" class="mb-2 mt-3">Tanggal Akhir</label>
                    <input class="form-control" type="date" name="tgl_akhir" />
                    
                    <label for="" class="mt-3">Tanggal Akhir</label>
                    <div class="mt-2 input-group">
                        <select class="form-select" id="inputGroupSelect01" name="status">
                          <option selected>Pilih status Pengaduan</option>
                          <option value="prosess">Prosess</option>
                          <option value="terima">Diterima</option>
                          <option value="tolak">Ditolak</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary d-flex align-items-center mt-3">
                        <i class="bx bx-file-find"></i>
                        <span class="mx-2">Filter Data</span>
                    </button>

                </form>

            </div>
        </div>


    @endsection
@endsection