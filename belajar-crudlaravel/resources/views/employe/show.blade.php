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
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h1 mr-auto">Biodata {{ $employe->nama }}</h1>
                    <a href="{{ route('employes.edit', $employe->id) }}" class="btn btn-primary">Edit</a>
                
                    <br>
                    <form action="{{ route('employes.destroy', $employe->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
                <hr>
                @if (session('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{session('pesan')}}
                    </div>
                    
                @endif
                <ul>
                    <li>Nik : {{ $employe->nik }}</li>
                    <li>Nama : {{ $employe->nama }}</li>
                    <li>Jenis Kelamin : {{ $employe->jenis_kelamin }}</li>
                    <li>Bagian : {{ $employe->bagian }}</li>
                    <li>Alamat : {{ $employe->alamat }}</li>
                    <a href="{{ route('employes.index') }}" class="btn btn-info">Back</a>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>