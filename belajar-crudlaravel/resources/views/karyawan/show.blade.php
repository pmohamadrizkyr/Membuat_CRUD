<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
               <div class="py-3">
                   Biodata {{ $karyawan->nama }}
               </div>
               <hr>
               <ul>
                   <li>Nik : {{ $karyawan->nik }}</li>
                   <li>Nama : {{ $karyawan->nama }}</li>
                   <li>Jenis kelamin : {{ $karyawan->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}</li>
                   <li>Bagian : {{ $karyawan->bagian }}</li>
                   <li>Alamat : {{ $karyawan->nik == '' ? 'N/A' : $karyawan->alamat }}</li>
                   <a href="{{ route('karyawans.index') }}" class="btn btn-info">Kembali</a>
               </ul>
            </div>
        </div>
    </div>
</body>
</html>