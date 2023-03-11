@include('Petugas\Tamplate\partials\_head')

{{-- @dd($data) --}}

<style>
    body{
        background-color: #eaeaea;
    }
</style>

  
    <div class="container mt-5">
      <header class="headerCetak mb-4">
        <button class="downloadBtn btn btn-primary">
          <i class="bx bx-download"></i>
          <span>Download</span>
        </button>
        <button class="printBtn btn btn-primary">
          <i class="bx bx-printer"></i>
          <span>Print</span>
        </button>
      </header>

      <div class="card mt-2 mb-2" id="table-filter">
        <h3 class="card-header">Laporan Pengaduan</h3>
        <div class="card-body">
          <div class="table-responsive text-nowrap">
            <table class="table table-bordered" >
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
    

    <script src="../../Masyarakat/Assets/js/html2pdf.bundle.min.js"></script>

    <script>

      let printBtn = document.querySelector('.printBtn'),
          downloadBtn = document.querySelector('.downloadBtn')
          header = document.querySelector('.headerCetak'),
          container = document.querySelector('.container');

          downloadBtn.addEventListener('click', () => {
            let el = document.getElementById('table-filter');

            let opt = {
              margin:       0.5,
              filename:     "ReportPengaduan.pdf",
              image:        { type: 'png', quality: 0.98 },
              html2canvas:  { scale:2 },
              jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' }
            }

            html2pdf(el, opt);

          });

          printBtn.addEventListener('click', () => {

            header.style.display = 'none';

            if(container.classList.contains('container')){
              container.classList.add('default');
              container.classList.remove('container');
              container.classList.remove('mt-5');

              window.print();

              return window.location.reload();
            }
          });



    </script>









@include('Petugas\Tamplate\partials\_foot')
