<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;


class MasyarakatController extends Controller
{
    //

    public function index()
    {
        return view('Masyarakat\index', [
            'title' => 'Beranda - Sigap'
        ]);
    }

    public function history()
    {
        $data = Pengaduan::where('nik', auth()->user()->masyarakat->nik)
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
        // $data = auth()->user()->masyarakat->nik;

        return view('Masyarakat\Pages\Profil\history', [
            'title' => 'History',
            'data' => $data
        ]);
    }


    public function detail(Pengaduan $detail)
    {

        $tes = Tanggapan::all()
            ->where('id_pengaduan', $detail->id_pengaduan);

        return view('Masyarakat\Pages\Profil\history-detail', [
            'title' => $detail->judul_laporan,
            'data' => $detail,
            'tanggapan' => $tes
        ]);
    }


    public function show()
    {
        return view('Masyarakat\Pages\PusatBantuan\index', [
            'title' => 'Pusat Bantuan'
        ]);
    }



    public function feedSigap()
    {
        return view('Masyarakat\Pages\Feed\index', [
            'title' => 'Feed Sigap',
            'data' => Pengaduan::all()
        ]);
    }
}
