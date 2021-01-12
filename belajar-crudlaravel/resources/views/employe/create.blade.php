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
    
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Employe Data </h1>
                <hr>
                <form action="{{ route('employes.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nik">Nik</label>
                        <input type="text" name="nik" id="nik" class="form-control @error('nik')is-invalid @enderror">
                        @error('nik')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control @error('nama')is-invalid @enderror">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" class="form-check-input" value="L" {{old('jenis_kelamin') == 'L' ? 'checked' : '' }}>
                        <label for="laki-laki" class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" class="form-check-input" value="P" {{old('jenis_kelamin')== 'P' ? 'checked' : '' }}>
                        <label for="perempuan" class="form-check-label">Perempuan</label>
                    </div>
                    @error('jenis_kelamin')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="bagian">Bagian</label>
                        <select class="form-control" id="bagian" name="bagian">
                            <option value="Frontend Developer" {{old('bagian') == 'Frontend Developer' ? 'selected' : ''}}>
                                Frontend Developer
                            </option>
                            <option value="Backend Developer" {{old('bagian') == 'Backend Developer' ? 'selected' : ''}}>
                                Backend Developer
                            </option>
                            <option value="Fullstack Developer" {{old('bagian') == 'Fullstack Developer' ? 'selected' : ''}}>
                                Fullstack Developer
                            </option>
                            <option value="Digital Marketing" {{old('bagian') == 'Digital Marketing' ? 'selected' : ''}}>
                                Digital Marketing
                            </option>
                            <option value="Network Engineer" {{old('bagian') == 'Network Engineer' ? 'selected' : ''}}>
                                Network Engineer
                            </option>
                            <option value="IT Database" {{old('bagian') == 'IT Database' ? 'selected' : ''}}>
                                IT Database
                            </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control">{{old('alamat') }}</textarea>
                     </div>
                     <button class="btn btn-primary mb-2" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>