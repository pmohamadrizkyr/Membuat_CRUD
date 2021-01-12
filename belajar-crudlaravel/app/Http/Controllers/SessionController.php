<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index(){
        echo "<ul>";
            echo "<li><a href='/buat-session'>Buat Session</a></li>";
            echo "<li><a href='/akses-session'>Akses Session</a></li>";
            echo "<li><a href='/hapus-session'>Hapus Session</a></li>";
            echo "<li><a href='/flash-session'>Flash Session</a></li>";
        echo "</ul>";  
    }

    public function buatSession(){
        session(['hakAkses' => 'admin', 'nama' => 'rizky']);
        return "Session sudah di buat";
    }

    public function aksesSession(Request $request){
        //menggunakan helper function
        // echo session('hakAkses');
        // echo session('nama');
        // echo '<hr>';

        //Dari request object
        // echo $request->session()->get('hakAkses');
        // echo $request->session()->get('nama');
        // echo '<hr>';

        //Menggunakan Facade Session
        // echo Session::get('hakAkses');
        // echo Session::get('nama');

        if (session()->has('hakAkses')){
            echo "Session 'Hak Akses ' Terdeteksi : " . session('nama');
        }
    }

    public function hapusSession(Request $request){
        // Menghapus 1 session menggunakan helper function
        session()->forget('hakAkses');

        // Menggunakan 1 session menggunakan Request Object
        $request->session()->forget('hakAkses');

        //Menggunakan 1 session menggunakan facade Session
        Session::forget('hakAkses');
        echo "Session hakAkses sudah di hapus";
    }

    public function flashSession(Request $request){
        //Membuat 1 flash session menggunakan 
        session()->flash('hakAkses', 'admin');

        //Membuat 1 flash session menggunakan Request Object
        $request->session()->flash('hakAkses', 'admin');

        //Membuat 1 flash session menggunakan Facade Session
        Session::flash('hakAkses','admin');
        echo "Flash session hakAkses sudah di buat";
    }
}
