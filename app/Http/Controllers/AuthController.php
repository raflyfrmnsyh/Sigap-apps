<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{


    /**
     * Route View
     */

    public function viewLogin()
    {
        return view('Masyarakat\Auth\index', [
            'title' => 'Login - Sigap'
        ]);
    }

    public function viewRegister()
    {
        return view('Masyarakat\Auth\daftar', [
            'title' => 'Register - Sigap'
        ]);
    }

    public function loginAdmin()
    {
        return view('Petugas\Auth\index', [
            'title' => 'Login - Admin'
        ]);
    }




    /**
     * Route Prosess
     */


    public function register(Request $request)
    {

        $request->validate([
            'nik' => 'required|max:16|min:15',
            'name' => 'required',
            'username' => 'required|min:5',
            'telp' => 'required|max:13',
            'password' => 'required|min:5'
        ]);

        $request['password'] = Hash::make($request['password']);

        $request->merge([
            'password' => $request['password'],
            'role_id' => 3
        ]);

        // Masukan data ke Database

        $user = User::create($request->all());

        $request->merge([
            'user_id' => $user->id
        ]);

        Masyarakat::create($request->all())->only('user_id', 'nik', 'name', 'telp');

        return redirect()->intended('/login')->with('success', 'Daftar Berhasil, silahakan Login!');

        // $data = $request->all();

        // return $request;
    }

    public function login(Request $request)
    {

        $log = $request->validate([
            'username' => 'required|min:5',
            'password' => 'required'
        ]);

        $check = User::where('username', $request->username)->first();

        if ($check) {
            if ($check->role_id == 1 || $check->role_id == 2) {
                return redirect(route('login.admin'));
            }
        }

        if (Auth::attempt($log)) {
            $request->session()->regenerate();

            return redirect()->intended(route('beranda.masyarakat'));
        } else {
            return back()->with('fail', 'Gagal Login!');
        }


        // return $request;
    }



    public function logout(Request $request)
    {


        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
