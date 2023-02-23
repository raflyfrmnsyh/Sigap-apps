@extends('Petugas\Tamplate\tamplate')

{{-- @dd($tanggapan) --}}
@section('content')
    @section('content-container')

    <div class="card p-5">
        <div class="backBtn">
            <a href="/Admin/kontak-masuk" class="btn btn-primary">
                <i class='bx bx-chevron-left'></i></a>
        </div>
        <div class="mt-3">
            <img src="../../storage/{{ $data->foto }}" alt="" style="width:100%;object-fit:contain;">
        </div>
        
        <div class="detail-bx mt-4">
            <div class="judul">
                <span class="fs-6 fw-light" style="opacity: .6;">{{ date( 'D - m - Y', strtotime( $data->tgl_pengaduan ) ) }}</span>
                <h3 class="mt-2">{{ $data->judul_laporan }}</h3>
            </div>
            <div class="body" style="width:100%">
                <p style="word-wrap: break-word;" class="fw-lighter">
                    {{ $data->isi_laporan }}
                </p>
    
                <div class="mt-3">
                    <span>Di ajukan oleh : {{ $data->masyarakat->name }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-bx mt-3">
            <form action="/Admin/Pengaduan/tanggapan/{{ $data->id_pengaduan }}" class="formTanggapan" method="post">
                @csrf
                    <div class="card mb-4">
                      <h5 class="card-header">Form Tanggapan</h5>
                      <div class="card-body">
                        <div class="mb-3">
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="status"> 
                              <option selected>Pilih Aksi</option>
                              <option value="terima">Terima</option>
                              <option value="Tolak">Tolak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Beri Tanggapan" id="exampleFormControlTextarea1" name="tanggapan" rows="3"></textarea>
                        </div>
                        @if (session()->has('success'))
                            @foreach ($tanggapan as $item)
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Beri Tanggapan" id="exampleFormControlTextarea1" name="tanggapan"  rows="3">{{ $item->tanggapan }}</textarea>
                                </div>
                            @endforeach
                        @endif

                        <div class="btn-action">
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </div>

                      </div>
                    </div>
            </form>
    </div>

    @if (session()->has('success'))
        <script>

            const formTanggapan = document.querySelector('.formTanggapan');

            alert(`{{ session('success') }}`);

            formTanggapan.style.display = "none";
        </script>
    @endif

    @endsection
@endsection

