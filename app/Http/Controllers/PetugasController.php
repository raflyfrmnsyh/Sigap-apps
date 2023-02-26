<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Petugas;
use App\Models\Tanggapan;


class PetugasController extends Controller
{
    /**
     * Route View
     */
    public function viewDashboard()
    {
        $data = Pengaduan::all();
        $data1 = Pengaduan::where('status', 'prosess');
        $data2 = Pengaduan::where('status', 'terima');
        $data3 = Pengaduan::where('status', 'tolak');


        return view('Petugas\index', [
            'title' => 'Dashboard',
            'total_pengaduan' => $data->count(),
            'total_prosess' => $data1->count(),
            'total_diterima' => $data2->count(),
            'total_ditolak' => $data3->count(),
        ]);
    }

    public function viewPengaduanMasuk()
    {
        $data = Pengaduan::where('status', 'prosess')->paginate(5);
        $count = 1;

        return view('Petugas\KelolaAduan\kontakMasuk', [
            'title' => 'Pengaduan Masuk',
            'data' => $data,
            'count' => $count
        ]);
    }


    public function viewPengaduanDitanggapi()
    {
        $data = Pengaduan::where('status', 'terima')->paginate(5);
        $count = 1;

        return view('Petugas\KelolaAduan\SudahDitanggapi', [
            'title' => 'Sudah Ditanggapi',
            'data' => $data,
            'count' => $count

        ]);
    }


    public function viewPengaduanDitolak()
    {
        $data = Pengaduan::where('status', 'tolak')->paginate(5);
        $count = 1;
        return view('Petugas\KelolaAduan\Ditolak', [
            'title' => 'Pengaduan Ditolak',
            'data' => $data,
            'count' => $count
        ]);
    }

    public function viewUbahDataPetugas(User $user_id)
    {
        // return $user_id;
        return view('Petugas\KelolaPetugas\ubahPetugas', [
            'title' => 'Ubah Data Petugas',
            'data' => $user_id

        ]);
    }


    public function viewDetail(Pengaduan $id)
    {
        $data = Tanggapan::where('id_pengaduan', $id->id);

        return view('Petugas\KelolaAduan\detail', [
            'title' => 'Detail Pengaduan',
            'data' => $id,
            'tanggapan' => $data
        ]);
    }


    public function tanggapi(Request $request, Pengaduan $id)
    {
        $request->merge([
            'id_pengaduan' => $id->id,
            'tanggapan' => $request->tanggapan,
            'status' => $request->status,
            'username' => auth()->user()->username
        ]);

        // dd($request->all());

        Tanggapan::create($request->all());

        Pengaduan::where('id', $id->id)
            ->where('status', 'prosess')
            ->update(['status' => $request->status]);

        return back()->with('success', 'Aduan berhasil Di tanggapi!');
    }



    public function viewKelolaMasyarakat()
    {
        $data = User::where('role_id', 3)
            ->with('masyarakat')
            ->paginate(5);

        // $data = Petugas::with('user')
        //     ->paginate(5);

        $count = 1;

        return view('Petugas\KelolaPetugas\masyarakat', [
            'title' => 'Data Petugas',
            'data' => $data,
            'count' => $count
        ]);
    }





    public function viewRegPetugas()
    {
        return view('Petugas\KelolaPetugas\addPetugas', [
            'title' => 'Register Petugas',
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:30'],
            'username' => ['required', 'min:5', 'max:20'],
            'telp' => ['required', 'min:12', 'max:14'],
            'password' => ['required', 'min:4', 'max:225']
        ]);

        $request->merge([
            'password' => Hash::make($request['password']),
            'role_id' => $request['Level']
        ]);

        $user = User::create($request->all());

        $request->merge([
            'user_id' => $user->id,
        ]);

        Petugas::create($request->all());

        return redirect()->back()->with('success', 'Akun Petugas Berhasil di tambahkan!');
    }


    public function viewDataPetugas()
    {

        $data = User::where('role_id', 1)
            ->orWhere('role_id', 2)
            ->with('petugas')
            ->paginate(5);

        // $data = Petugas::with('user')
        //     ->paginate(5);

        $count = 1;

        return view('Petugas\KelolaPetugas\view', [
            'title' => 'Data Petugas',
            'data' => $data,
            'count' => $count
        ]);
    }



    public function deletePetugas(User $user_id)
    {
        // return $user_id;

        $user_id->delete();
        return back()->with('success', 'Data Berhasil Di hapus');
    }
}