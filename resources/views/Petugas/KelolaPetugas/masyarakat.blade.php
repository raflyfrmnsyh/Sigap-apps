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
                <th>Nama</th>
                <th>No.phone</th>
                <th>Username</th>
                <th>Role</th>
                
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                    @foreach ($data as $item)

                      {{-- @dd($item) --}}
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td><strong>{{ $item->name }}</strong></td>
                            <td>{{ $item->masyarakat->telp }}</td>
                            <td>{{ "@" . $item->username }}</td>
                            <td>
                                Masyarakat
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

    @if (session()->has('success'))
      <script>
        alert(`{{ session('success') }}`);  
      </script>        
    @endif

    
    @endsection
@endsection