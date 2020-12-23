<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('student.index', ['students' => $students]);
    }

    public function create(){
        return view('student.create');
    }

    public function show(Student $student){
        return view('student.show', compact('student'));
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

}
