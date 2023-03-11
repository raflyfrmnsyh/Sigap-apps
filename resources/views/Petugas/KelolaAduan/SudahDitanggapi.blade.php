@extends('Petugas\Tamplate\tamplate')

{{-- @dd($data) --}}
@section('content')
    @section('content-container')

    {{-- Search Bar --}}

    <div class="card my-3">
        
        <div class="table-responsive text-nowrap pt-2">
          <table class="table table-striped" >
            <thead>
              <tr>
                <th>#</th>
                <th>Judul Laporan</th>
                <th style="width: 180px;">Foto</th>
                <th>Tanggal Laporan</th>
                <th>Username</th>
                <th>Status</th>
                <th>Actions</th>
                
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @if (count($data) > 0)
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td><strong>{{ $item->judul_laporan }}</strong></td>
                            <td><img src="../../storage/{{ $item->foto }}" alt="img" width="100%"></td>
                            <td>{{ date( 'D - m - Y', strtotime( $item->tgl_pengaduan ) ) }}</td>
                            <td>
                                {{ $item->masyarakat->user->username }}
                            </td>
                            <td><span class="badge bg-label-success me-1">{{ $item->status }}</span></td>
                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/Admin/Pengaduan/edit/{{ $item->id }}"
                                        ><i class="bx bx-edit-alt me-1"></i> Detail</a
                                    >
                                    <form action="/Admin/tanggapan/hapus/{{ $item->id }}" class="dropdown-item" method="post">
                                        @csrf
                                        <button class="btn px-1" type="submit" onclick="return confirm('Anda Yakin akan menghapus tanggapan?')"><i class="bx bx-trash me-1"></i> Hapus Tanggapan</button>
                                    </form>
                                    
                                </div>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
          </table>

        </div>
        @if (count($data) == 0)
            <span class="text-center mt-4">Data tidak ada</span>                    
        @endif
        <div class="p-3">
            {!! $data->links('pagination::bootstrap-4') !!}
        </div>
    </div>  

    @if (session()->has('success'))
        <script>
            alert(`{{ session('success') }}`);
        </script>
    @endif

    @endsection
@endsection