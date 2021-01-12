<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function daftarKaryawan(){
        return view('halaman', ['judul' => 'Daftar Karyawan']);
    }

    public function tabelKaryawan(){
        return view('halaman', ['judul' => 'Tabel Karyawan']);
    }

    public function blogKaryawan(){
        return view('halaman', ['judul' => "Blog Karyawan"]);
    }

    public function login(){
        return view('form-login');
    }
    //sistem Login
    public function prosesLogin(Request $request){
        $request->validate([
            'username' => 'required'
        ]);
        $validUsername = ['joko', 'edi', 'muri', 'santi'];
        // jika inputan username di array. buat session 'username'
        //jika datanya benar joko, edi, muri, santi buat session username
        if(in_array($request->username, $validUsername)){
            session(['username' => $request->username]);
            return redirect('/daftar-karyawan');
        }else{
            //kalo username tidak ada di daftar back to input, dan pesan username tidak valid
            return back()->withInput()->with('pesan', "Username tidak valid");
        }

    }

    //sistem logout
    public function logout(){
        //hapus session username
        session()->forget('username');
        return redirect('/login')->with('pesan', 'logout berhasil');
    }
}
