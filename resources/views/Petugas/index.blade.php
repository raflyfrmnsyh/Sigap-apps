@extends('Petugas\Tamplate\tamplate')


@section('content')
    @section('content-container')
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="card-title"> Total Pengaduan</span>
                        <div class="d-flex align-items-center justify-content-between mt-2 position-relative">
                            <h1 class="card-text mt-4">
                                {{ $total_pengaduan }}
                            </h1>
                            <i class="bx bx-bar-chart-alt-2 position-absolute" style="opacity: .2;font-size:54px;right:0; bottom:0;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="card-title">Pengaduan Masuk</span>
                        <div class="d-flex align-items-center justify-content-between mt-2 position-relative">
                            <h1 class="card-text mt-4">
                                {{ $total_prosess }}
                            </h1>
                            <i class="bx bx-task position-absolute " style="opacity: .2;font-size:54px;right:0; bottom:0;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="card-title">Pengaduan Diterima</span>
                        <div class="d-flex align-items-center justify-content-between mt-2 position-relative">
                            <h1 class="card-text mt-4">
                                {{ $total_diterima }}
                            </h1>
                            <i class="bx bx-list-check position-absolute " style="opacity: .2;font-size:54px;right:0; bottom:0;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="card-title">Pengaduan Ditolak</span>
                        <div class="d-flex align-items-center justify-content-between mt-2 position-relative">
                            <h1 class="card-text mt-4">
                                {{ $total_ditolak }}
                            </h1>
                            <i class="bx bx-task-x position-absolute" style="opacity: .2;font-size:54px;right:0; bottom:0;"></i>
                        </div>
                    </div>
                </div>
            </div>
            @if (auth()->user()->role_id == 1)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <span class="card-title">Masyarakat Terdaftar</span>
                            <div class="d-flex align-items-center justify-content-between mt-2 position-relative">
                                <h1 class="card-text mt-4">
                                    {{ $total_masyarakat }}
                                </h1>
                                <i class="bx bx-user position-absolute " style="opacity: .2;font-size:54px;right:0; bottom:0;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <span class="card-title">Petugas Terdaftar</span>
                            <div class="d-flex align-items-center justify-content-between mt-2 position-relative">
                                <h1 class="card-text mt-4">
                                    {{ $total_petugas }}
                                </h1>
                                <i class="bx bx-support position-absolute " style="opacity: .2;font-size:54px;right:0; bottom:0;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    @endsection
@endsection