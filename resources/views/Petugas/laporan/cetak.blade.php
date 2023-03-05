@include('Petugas\Tamplate\partials\_head')

{{-- @dd($data) --}}

<style>
    body{
        background-color: #eaeaea;
    }
</style>

<div class="container">

    <div class="card mt-5">
        <h3 class="card-header">Laporan Pengaduan</h3>
        <div class="card-body">
          <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Judul Pengaduan</th>
                  <th>Tgl Pengaduan</th>
                  <th>Username</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                {{-- @dd($data) --}}
                
                @if (count($data) > 0)
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $item->judul_laporan }}</td>
                        <td>{{ date( 'D - m - Y', strtotime( $item->tgl_pengaduan ) ) }}</td>
                        <td>{{ "@" .$item->masyarakat->user->username }}</td>
                        <td>   
                            @if ( $item->status == 'prosess')
                                <span class="badge bg-label-warning me-1">Prosess</span>
                            @endif
                            @if ( $item->status == 'terima')
                                <span class="badge bg-label-success me-1">Diterima</span>
                            @endif
                            @if ( $item->status == 'tolak')
                                <span class="badge bg-label-danger me-1">Ditolak</span>
                            @endif
                        </td>
                    </tr>
                  @endforeach
                @endif
                
               
                
              </tbody>
            </table>
                @if (count($data) == 0)
                    <br>
                    <center>
                      <span>Data tidak ada</span>   
                    </center>             
                @endif
          </div>
        </div>
      </div>
</div>




<script>
    window.print();
</script>






@include('Petugas\Tamplate\partials\_foot')
