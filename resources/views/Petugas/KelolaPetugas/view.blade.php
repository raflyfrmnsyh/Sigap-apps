@extends('Petugas\Tamplate\tamplate')

@dd($data)
@section('content')
    @section('content-container')

    {{-- Search Bar --}}

    <div class="card my-3">
        
        <div class="table-responsive text-nowrap pt-2">
          <table class="table table-striped" >
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>No.phone</th>
                <th>Username</th>
                <th>RoleW</th>
                <th>Actions</th>
                
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                    @foreach ($data as $item)

                    @dd($item);
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td><strong>{{ $item->nama }}</strong></td>
                            <td>{{ $item }}</td>
                            <td>{{ date( 'D - m - Y', strtotime( $item->tgl_pengaduan ) ) }}</td>
                            <td>
                                {{ $item->masyarakat->user->username }}
                            </td>
                            <td><span class="badge bg-label-warning me-1">{{ $item->status }}</span></td>
                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="/Admin/Pengaduan/{{ $item->id_pengaduan }}"
                                    ><i class="bx bx-edit-alt me-1"></i> Detail</a
                                >
                                </div>
                            </div>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
          </table>

        </div>
    
        <div class="p-3">
            {!! $data->links() !!}
        </div>
    </div>  

    {{-- Pagination --}}

    
    @endsection
@endsection