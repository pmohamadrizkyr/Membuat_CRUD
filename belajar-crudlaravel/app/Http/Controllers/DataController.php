<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function __construct(){
        $this->middleware('data');
    }
    
    public function daftarKaryawan(){
        return 'Form-Karyawan';
    }

    public function tableKaryawan(){
        return 'Table data karyawan';
    }

    public function blogKaryawan(){
        return 'Halaman blog Karyawan';
    }
}
