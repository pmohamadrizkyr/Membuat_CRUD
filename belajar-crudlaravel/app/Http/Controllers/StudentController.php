<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create(){
        return view('student.create');
    }

    public function show(Student $murid){
        // $murid->find($murid->id)->all();
        return view('student.show', compact('murid'));
    }

    public function store(Request $request){
        $validasiData = $request->validate([
            'nim' => 'required|size:7',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);

        Student::create($validasiData);
        $request->session()->flash('pesan', "Data {$validasiData['nama']} Berhasil Disimpan");
        return redirect()->route('students.index');
        // return "Data Berhasil Disimpan!!!";
    }

    public function edit(Student $murid){
        // $murid->find($murid->id)->all();
        return view('student.edit', compact('murid'));
    }

    public function update(Request $request, Student $murid){
        $validasiData = $request->validate([
            'nim' => 'required|size:7|unique:students,nim,'.$murid->id,
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => ''
        ]);

        $murid->update($validasiData);
        return redirect()->route('students.show', ['murid' => $murid->id])->with('pesan', "update Data {$validasiData['nama']} Berhasil");
        // return "Data Berhasil Disimpan!!!";
    }

    public function destroy(Student $murid){
        $murid->delete();
        return redirect()->route('students.index')->with('pesan', "Hapus data Mahasiswa $murid->nama Berhasil");
    }

}
