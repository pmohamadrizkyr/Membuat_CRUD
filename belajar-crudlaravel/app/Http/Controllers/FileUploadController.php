<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request){
        $request->validate([
            'berkas'=> 'required|file|image|max:1000'
        ]);
        $path = $request->berkas->store('uploads');
        echo "Proses upload berhasil, file berada di : $path";
        // if($request->hasFile('berkas')){
        //     echo "path() : " . $request->berkas->path();
        //     echo "<br>";
        //     echo "extension() : " . $request->berkas->extension();
        //     echo "<br>";
        //     echo "getClientOriginalExtension() : " . $request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getMimeType() : " . $request->berkas->getMimeType();
        //     echo "<br>";
        //     echo "getClientOriginalName() : " . $request->berkas->getClientOriginalName();
        //     echo "<br>";
        //     echo "getSize() : " . $request->berkas->getSize();
        // }else{
        //     echo "Tidak ada file yang di upload";
        // }
        // dump($request->berkas);
        // return "Pemprosesan file upload di sini";
    }

    public function fileUploadRename(){
        return view('file-upload-rename');
    }

    public function prosesFileUploadRename(Request $request){
        $request->validate([
            'nama_gambar' => 'required|min:5|alpha_dash',
            'gambar_profile' => 'required|file|image|max:2000'
        ]);

        // ambil nama extension file asal
        $extFile = $request->gambar_profile->getClientOriginalExtension();

        //generate nama file akhir, di ambil dari inputan nama_gambar + extension
        $namaFile = $request->nama_gambar.".".$extFile;

        //pindahkan file upload ke folder storage/app/public/gambar
        $request->gambar_profile->storeAs('public/gambar',$namaFile);

        //generate path gambar yg bisa di akses (path di folder public)
        $pathPublic = asset('storage/gambar/'.$namaFile);
        // dd($pathPublic);
        echo "Gambar berhasil di upload ke <a href=".$pathPublic.">$namaFile</a>";
        echo "<br>";
        echo "<img src=".$pathPublic.">";

    }
}
