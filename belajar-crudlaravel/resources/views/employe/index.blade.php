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
                <h2 class="text-center">Table Employe Data </h2>
                <a href="{{ route('employes.create') }}" class="btn btn-primary">Add Employe Data</a>
            </div>
            @if (session('pesan'))
                <div class="alert alert-success">
                    {{session('pesan')}}
                </div>
                    
            @endif
            @if (session('hapus'))
                <div class="alert alert-danger">
                    {{session('hapus')}}
                </div>
                    
            @endif
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Bagian</th>
                    <th>Alamat</th>
                </thead>
                <tbody>
                    @forelse ($employes as $employe)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ route('employes.show', ['employe' => $employe->id]) }}">{{ $employe->nik }}</a></td>
                            <td>{{ $employe->nama }}</td>
                            <td>{{ $employe->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'}}</td>
                            <td>{{ $employe->bagian }}</td>
                            <td>{{ $employe->alamat == '' ? 'N/A' : $employe->alamat}}</td>
                        </tr>
                        
                    @empty
                        <td colspan="6" class="text-center">Data Kosong</td>
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>