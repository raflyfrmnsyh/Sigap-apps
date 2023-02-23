@extends('Masyarakat.Tamplate.tamplate')

@section('content')

    @include('Masyarakat.Tamplate.Partials._navbar1')


    <main>
        <div class="container-md">
            <div class="form-pengaduan">
                <div class="form-pengaduan_header">
                    <h4>Buat Laporan</h4>
                    <p>Ada yang ingin anda laporkan?anda hanya perlu mengisi form pelaporan di bawah ini.</p>
                </div>
                <form action="{{ route('pengaduan.masyarakat') }}" class="form-pengaduan_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-pengaduan-group">
                        <input type="text" name="judul_laporan" placeholder="Masukan Judul Laporan" value="{{ old('judul_laporan') }}">
                    </div>
                    @error('judul_laporan')
                        <span class="error_message">{{ $message }}</span>
                        <br>
                        <br>
                    @enderror
                    <div class="input-pengaduan-group text-area">
                        <textarea name="isi_laporan" id="" placeholder="Isi Laporan">{{ old('isi_laporan') }}</textarea>
                    </div>
                    @error('isi_laporan')
                        <span class="error_message">{{ $message }}</span>
                        <br>
                        <br>
                    @enderror
                    <div class="input-pengaduan-group _date">
                        <input type="text" name="lokasi" placeholder="Lokasi Kejadian" value="{{ old('lokasi') }}">
                    </div>
                    @error('lokasi')
                        <span class="error_message">{{ $message }}</span>
                        <br><br>
                    @enderror
                    <div class="input-pengaduan-group _date">
                        <input type="file" class="choose-file_selected" name="foto" hidden >
                        <label for="placeholder" class="choose-file_select">
                            <span class="choose-text">Pilih File</span>
                        </label> 
                    </div>
                        @error('foto')
                            <span class="error_message">{{ $message }}</span>
                            <br>
                            <br>
                        @enderror  
                    <div class="input-pengaduan-group btn">
                        <input type="submit" value="Submit">
                    </div>


                </form>
            </div>
        </div>
    </main>


    @include('Masyarakat.Tamplate.Partials._navBottom')

    @if (session()->has('success'))
        <script>
            alert(`{{ session('success') }}`);
        </script>
    @endif
    <script>

        const choose_selected = document.querySelector('.choose-file_select');
        const choose_select = document.querySelector('.choose-file_selected');
        const choose_text = document.querySelector('.choose-text');
    
        choose_selected.addEventListener('click', () => {
            choose_select.click();
            // choose_text.innerHTML = "Nama File yang di pilih";
        });

        choose_select.onchange = ( {target} ) => {

            let file = target.files[0];
            if(file){
                let fileName = file.name;
                choose_text.innerHTML = fileName;
            }

        }



    
    </script>

@endsection

