<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PT ABCD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="{{ ('/daftar-karyawan') }}">Daftar Karyawan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ ('/tabel-karyawan') }}">Tabel Karyawan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ ('/blog-karyawan') }}">Blog Karyawan</a>
                </li>
            </ul>
            <ul>
                <div class="navbar-nav">
                    <li class="nav-item">
                        <span class="text-light">Hello, {{ session('username') }}</span>
                        <a href="{{ url('/logout') }}" class="nav-link d-inline">Logout</a>
                    </li>
                </div>
            </ul>
        </div>
      </nav>

      <div class="container">
          <h2 class="my-4">{{ $judul }}</h2>
      </div>
</body>
</html>