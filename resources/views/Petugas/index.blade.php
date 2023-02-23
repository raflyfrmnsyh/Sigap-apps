@extends('Petugas\Tamplate\tamplate')

@section('content')
    @section('content-container')
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                    <span class="card-title">Pengaduan Masuk</span>
                    <h2 class="card-text mt-4">
                        {{ $total_prosess }}
                    </h2>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                    <span class="card-title">Pengaduan Diterima</span>
                    <h2 class="card-text mt-4">
                        {{ $total_diterima }}
                    </h2>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                    <span class="card-title">Pengaduan Ditolak</span>
                    <h2 class="card-text mt-4">
                        {{ $total_ditolak }}
                    </h2>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="mt-5">

        <h4>Table Seluruh data pengaduan</h4>

        <ul>
            <li>Table Pengaduan</li>
            <li>bisa Shorting data sesuai tanggal</li>
            <li>terdapat button untuk download data menjadi PDF</li>
        </ul>

        </div>
    @endsection
@endsection