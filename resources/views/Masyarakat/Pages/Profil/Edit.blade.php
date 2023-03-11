@extends('Masyarakat.Tamplate.tamplate')

@section('css')
<link rel="stylesheet" href="../../Masyarakat/Assets/css/style.css">
@endsection

@section('content')

{{-- @dd($data) --}}

    <main style="margin-top : 80px;">
        <div class="container-md">
            <div class="form-pengaduan">
                <div class="form-pengaduan_header">
                    <h4>Edit Laporan</h4>
                    <p>Ada yang ingin anda laporkan?anda hanya perlu mengisi form pelaporan di bawah ini.</p>
                </div>
                <form action="/pengaduan/edit/store/{{ $data->id }}" class="form-pengaduan_form" method="POST" enctype="multipart/form-data">
                    @csrf
                        <select name="publish" id="" class="input-pengaduan-group" style="padding:0px 20px;outline:none;-webkit-appearance: none;
                        -moz-appearance: none;
                        text-indent: 1px;
                        text-overflow: '';color:#818181;">
                            <option value="{{ $data->publish }}" >{{ $data->publish }}</option>
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                        </select>
                        @error('publish')
                            <span class="error_message">{{ $message }}</span>
                            <br>
                            <br>
                        @enderror
                    <div class="input-pengaduan-group">
                        <input type="text" name="judul_laporan" placeholder="Masukan Judul Laporan" value="{{ $data->judul_laporan }}">
                    </div>
                    @error('judul_laporan')
                        <span class="error_message">{{ $message }}</span>
                        <br>
                        <br>
                    @enderror
                    <div class="input-pengaduan-group text-area">
                        <textarea name="isi_laporan" id="" placeholder="Isi Laporan">{{ $data->isi_laporan }}</textarea>
                    </div>
                    @error('isi_laporan')
                        <span class="error_message">{{ $message }}</span>
                        <br>
                        <br>
                    @enderror
                    <div class="input-pengaduan-group _date">
                        <input type="text" name="lokasi" placeholder="Lokasi Kejadian" value="{{ $data->lokasi }}">
                    </div>
                    @error('lokasi')
                        <span class="error_message">{{ $message }}</span>
                        <br><br>
                    @enderror
                    <div class="input-pengaduan-group _date">
                        <input type="file" class="choose-file_selected" name="foto" hidden >
                        <label for="placeholder" class="choose-file_select">
                            <span>{{ $data->foto }}</span>
                        </label> 
                    </div>
                        @error('foto')
                            <span class="error_message">{{ $message }}</span>
                            <br>
                            <br>
                        @enderror  
                    <div class="input-pengaduan-group btn">
                        <input type="submit" value="Update">
                    </div>


                </form>
            </div>
        </div>
    </main>

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

