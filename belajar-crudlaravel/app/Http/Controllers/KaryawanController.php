<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index(){
        $karyawan = Karyawan::all();
        return view('karyawan.index', ['karyawans' => $karyawans]);
    }

    public function create(){
        return view('form-karyawan');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nik' => 'required|size:8',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'bagian' => 'required',
            'alamat' => ''
        ]);
        // dump($ $validateData);
        //cara pertama
        // $karyawan = new Karyawan();
        // $karyawan->nik = $validatedData['nik'];
        // $karyawan->nama = $validatedData['nama'];
        // $karyawan->jenis_kelamin = $validatedData['jenis_kelamin'];
        // $karyawan->bagian = $validatedData['bagian'];
        // $karyawan->alamat = $validatedData['alamat'];
        // $karyawan->save();
        // return "Data Berhasil Disimpan!!!";

        //Cara Kedua    
        //dimodels nya harus di tambahin protected
        Karyawan::create($validatedData);
        return "Data Berhasil Disimpan!!!";

    }
}

