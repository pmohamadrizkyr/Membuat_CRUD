<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index(){
        $karyawans = Karyawan::all();
        return view('karyawan.index', ['karyawans' => $karyawans]);
    }

    public function create(){
        return view('karyawan.create');
    }
    
    // public function show($karyawan){
    //     $karyawans = Karyawan::findOrFail($karyawan);
    //     return view('karyawan.show', compact('karyawans'));
    // }

    public function show(Karyawan $karyawan){
        return view('karyawan.show', compact('karyawan'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nik' => 'required|size:8|unique:karyawans',
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
        $request->session()->flash('pesan', "Data {$validatedData['nama']} Berhasil Disimpan");
        return redirect()->route('karyawans.index');    

    }
}

