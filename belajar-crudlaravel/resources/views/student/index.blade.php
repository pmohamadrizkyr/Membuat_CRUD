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
                <div class="py-4">
                    <h2>Tabel Data Mahasiswa Baru</h2>
                    <a href="{{ route('students.create') }}" class="btn btn-primary">Tambah Data Mahasiswa Baru</a>
                </div>
                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nim</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- CARA1 --}}
                                {{-- <td><a href="{{ route('students.show', ['student' => $student->id]) }}">{{ $student->nik }}</a></td> --}}
                                {{-- CARA2 --}}
                                <td><a href="{{ url('/students/'.$student->id) }}">{{ $student->nim }}</a></td>
                                <td>{{ $student->nama }}</td>
                                <td>{{ $student->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}</td>
                                <td>{{ $student->jurusan }}</td>
                                <td>{{ $student->alamat == '' ? 'N/A' : $student->alamat }}</td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Data kosong</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>