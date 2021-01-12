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
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2>Tabel Data Karyawan</h2>
                    <a href="{{ route('gallery.create') }}" class="btn btn-primary">
                        Tambah Data Karyawan
                    </a>
                    @if (session('pesan'))
                        <div class="alert alert-success">
                            {{ session('pesan') }}
                        </div>
                    @endif
                    @if (session('edit'))
                        <div class="alert alert-danger">
                            {{ session('edit') }}
                        </div>
                    @endif
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($item as $items)
                            <tr>
                                <td>{{  $loop->iteration }}</td>
                                <td>{{  $items->nama }}</td>
                                <td>{{  $items->alamat }}</td>
                                <td>
                                    <img src="{{ Storage::url($items->image) }}" alt="gambar" style="width: 150px">
                                </td>
                                <td>
                                    <a href="{{ route('gallery.edit', $items->id) }}" class="btn btn-info">Edit</a>

                                    <form action="{{ route('gallery.destroy', $items->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>
</html>