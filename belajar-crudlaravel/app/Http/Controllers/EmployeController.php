<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    public function index(){
        $employes = Employe::all();
        return view('employe.index', ['employes' => $employes]);
    }

    public function create(){
        return view('employe.create');
    }

    public function show(Employe $employe){
        return view('employe.show', compact('employe'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nik'=>'required|size:5|unique:employes',
            'nama'=>'required|min:3|max:50',
            'jenis_kelamin'=>'required|in:P,L',
            'bagian'=>'required',
            'alamat'=>''
        ]);
        // $employe = new Employe();
        // $employe->nik = $validatedData['nik'];
        // $employe->nama = $validatedData['nama'];
        // $employe->jenis_kelamin = $validatedData['jenis_kelamin'];
        // $employe->bagian = $validatedData['bagian'];
        // $employe->alamat = $validatedData['alamat'];
        // $employe->save();
        Employe::create($validatedData);
        $request->session()->flash('pesan', "Data {$validatedData['nama']} Berhasil Disimpan");
        return redirect()->route('employes.index');

    }

    public function edit(Employe $employe){
        return view('employe.edit', compact('employe'));
    }

    public function update(Request $request, Employe $employe){
        $validatedData = $request->validate([
            'nik'=>'required|size:5|unique:employes,nik,'.$employe->id,
            'nama'=>'required|min:3|max:50',
            'jenis_kelamin'=>'required|in:P,L',
            'bagian'=>'required',
            'alamat'=>''
        ]);
        $employe->update($validatedData);
        return redirect()->route('employes.show', ['employe' => $employe->id])->with('pesan', "Update data {$validatedData['nama']} Berhasil");

    }

    public function destroy(Employe $employe){
        $employe->delete();
        return redirect()->route('employes.index')->with('hapus', "Hapus Data $employe->nama Berhasil");
    }
}
