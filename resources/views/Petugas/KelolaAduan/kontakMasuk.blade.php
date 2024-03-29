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
                <th>Published</th>
                <th>Actions</th>
                
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @if (count($data) > 0)
                    @foreach ($data as $item)
                    {{-- @dd($item) --}}
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td><strong>{{ $item->judul_laporan }}</strong></td>
                            <td><img src="../../storage/{{ $item->foto }}" alt="img" width="100%"></td>
                            <td>{{ date( 'D - m - Y', strtotime( $item->tgl_pengaduan ) ) }}</td>
                            <td>
                                {{ $item->masyarakat->user->username }}
                            </td>
                            <td><span class="badge bg-label-warning me-1">{{ $item->status }}</span></td>
                            <td>
                                @if ($item->publish == 'public')
                                    <span class="badge bg-label-info me-1">{{ $item->publish }}</span>
                                @endif
                                @if ($item->publish == 'private')
                                    <span class="badge bg-label-secondary  me-1">{{ $item->publish }}</span>
                                @endif
                            </td>
                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="/Admin/Pengaduan/{{ $item->id }}"
                                    ><i class="bx bx-edit-alt me-1"></i> Detail</a
                                >
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

    {{-- Pagination --}}

    
    @endsection
@endsection