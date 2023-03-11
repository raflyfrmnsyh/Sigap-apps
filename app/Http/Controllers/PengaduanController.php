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
            'foto' => 'required|mimes:png,jpg,jpeg|max:2048',
            'publish' => 'required'
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


    public function editProsess(Request $request, Pengaduan $id)
    {
        // return $id->id;
        // Validasi data
        $request->validate([
            'judul_laporan' => 'required|max:225',
            'isi_laporan' => 'required',
            'lokasi' => 'required|max:30',
            'foto' => 'mimes:png,jpg,jpeg|max:2048',
            'publish' => 'required'
        ]);

        $request->merge([
            'masyarakat_id' => auth()->user()->masyarakat->id,
            'nik' => auth()->user()->masyarakat->nik,
            'publish' => $request->publish
        ]);

        if ($request->foto != null) {
            $foto = $request->file('foto');

            $fileName = $request->file('foto')->storeAs(
                'uploads/',
                date('Ymdhis_') . $foto->getClientOriginalName(),
                'public',
            );

            $data = $request->all();

            $data['foto'] = $fileName;

            // dd($data);
            $data = collect($data);

            Pengaduan::where('id', $id->id)
                ->update($data->except(['_token'])->toArray());

            return redirect(route('history.masyarakat'))->with('success', 'Pengaduan berhasil Di Update!');
        }

        $data = collect($request->all());

        Pengaduan::where('id', $id->id)
            ->update($data->except(['_token', 'foto'])->toArray());

        return redirect(route('history.masyarakat'))->with('success', 'Pengaduan berhasil Di Update!');

        // dd($request->all());



        // Check jika foto di isi atau tidak
    }
}
