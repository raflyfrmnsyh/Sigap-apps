<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    //


    public function index()
    {
        return view('Petugas.laporan.index', [
            'title' => 'Generate Laporan'
        ]);
    }

    public function filter(Request $request)
    {
        // return $request;
        $awal = $request->tgl_awal;
        $akhir = $request->tgl_akhir;
        $count = 1;
        $status = $request->status;


        if ($status == 'All') {
            $data = Pengaduan::with('tanggapan')->get();
        } else {
            $data = Pengaduan::with('tanggapan')
                ->where('status', $status)
                ->whereBetween('tgl_pengaduan', [$awal, $akhir])
                ->latest()
                ->get();
        }



        return view('Petugas.laporan.cetak', [
            'title' => 'Cetak Laporan',
            'data' => $data,
            'count' => $count
        ]);
    }
}
