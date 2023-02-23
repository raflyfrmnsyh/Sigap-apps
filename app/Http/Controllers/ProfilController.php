<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Rules\MatchOldPassword;

class ProfilController extends Controller
{
    //

    public function viewProfil()
    {


        return view('Masyarakat\Pages\Profil\index', [
            'title' => 'Profil Saya',
            'userData' => Auth::user(),
            'data' => Pengaduan::all()
                ->where('nik', auth()->user()->masyarakat->nik)->count()
        ]);
    }


    public function akunSaya()
    {

        return view('Masyarakat\Pages\Profil\myaccount', [
            'title' => 'Akun Saya',
            'userData' => Auth::user()
        ]);
    }


    public function viewUbah()
    {
        return view('Masyarakat\Pages\Profil\updateData', [
            'title' => 'Ubah Data',
            'userData' => Auth::user(),
        ]);
    }

    public function ubahPassword()
    {
        return view('Masyarakat\Pages\Profil\reset', [
            'title' => 'Reset Password'
        ]);
    }

    public function updatePassword(Request $request)
    {
        // return $request;
        $user = Auth::user();

        $pwOld = $user->password;

        // dd($pwOld);

        $request->validate([
            'password-confirm' => 'required',
            'password-baru'    => 'required|min:5',
        ]);

        $pw1 = $request['password-confirm'];
        $pw_new = Hash::make($request['password-new']);


        if (Hash::check($pw1, $pwOld)) {

            User::where('id', $user->id)
                ->update(['password' => $pw_new]);

            // dd("password sama");

            return redirect()->back()->with('success', 'Password Berhasil Dirubah!');
        } else {
            return redirect()->back()->with('fail', 'Password tidak sama');
        }
    }


    public function updateAkun(Request $request)
    {
        $userLog = Auth::user();

        $data = $request->validate([
            'username' => 'required|min:5|max:15',
            'name' => 'required|max:25',
            'nik' => 'required|min:15|max:16',
            'telp' => 'required|min:12|max:13'
        ]);

        $data = $request->merge([
            'gender' => $request['gender']
        ]);

        $data = collect($data);

        User::where('id', $userLog->id)
            ->update($data->except(['_token', 'nik', 'telp'])->toArray());


        return redirect()->back()->with('success', 'data berhasil diupdate!');
    }
}
