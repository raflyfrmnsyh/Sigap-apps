<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    //

    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'judul_laporan' => 'required|max:225',
            'isi_laporan' => 'required',
            'lokasi' => 'required|max:30',
            'foto' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        $request->merge([
            'masyarakat_id' => auth()->user()->masyarakat->id,
            'nik' => auth()->user()->masyarakat->nik,
            'publish' => $request->publish
        ]);

        $foto = $request->file('foto');

        $fileName = $request->file('foto')->storeAs(
            'uploads/',
            date('Ymdhis_') . $foto->getClientOriginalName(),
            'public',
        );

        $data = $request->all();

        $data['foto'] = $fileName;

        // @dd($data);
        // 
        Pengaduan::create($data);

        return redirect()->back()->with('success', 'Pengaduan Berhasil Di upload');


        // dd($request->all());
    }
}
