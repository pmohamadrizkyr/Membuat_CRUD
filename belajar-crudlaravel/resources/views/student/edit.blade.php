<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Pendaftaran Mahasiswa</h1>
                <hr>
                <form action="{{ route('students.update', $murid->id) }}" method="POST"> 
                   @csrf
                   @method('PATCH')
                    <div class="form-group">
                        <label for="nim">Nim :</label>
                        <input type="text" name="nim" id="nim" class="form-control @error('nim')is-invalid @enderror" value="{{ old('nim') ?? $murid->nim }}">
                        @error('nim')
                            <div class="alert alert-danger">{{ $message }}</div>  
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap :</label>
                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') ?? $murid->nama }}">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin :</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" {{ old('jenis_kelamin') ?? $murid->jenis_kelamin == 'L' ? 'checked' : '' }}>
                        <label class="form-check-label" for="laki_laki">Laki-laki</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" {{ old('jenis_kelamin') ?? $murid->jenis_kelamin == 'P' ? 'checked' : '' }}>
                        <label class="form-check-label" for="Perempuan">Perempuan</label>
                    </div>
                    @error('jenis_kelamin')
                        <div class="alert alert-danger">{{ $message }}</div>  
                    @enderror
                    <div class="form-group">
                        <label for="jurusan">Jurusan :</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Fakultas Teknik" {{ old('bagian')?? $murid->bagian  == 'Fakultas Teknik' ? 'selected' : '' }}>
                                Fakultas Teknik Informasi
                            </option>
                            <option value="Fakultas Ilmu Kedokteran" {{ old('bagian') ?? $murid->bagian == 'Fakultas Ilmu Kedokteran' ? 'selected' : '' }}>
                                Fakultas Ilmu Kedokteran
                            </option>
                            <option value="Fakultas Farmasi" {{ old('bagian') ?? $murid->bagian == 'Fakultas Farmasi' ? 'selected' : '' }}>
                                Fakultas Farmasi
                            </option>
                            <option value="Fakultas Teknik Sipil" {{ old('bagian') ?? $murid->bagian == 'Fakultas Teknik Sipil' ? 'selected' : '' }}>
                                Fakultas Teknik Sipil
                            </option>
                            <option value="Fakultas Kehutanan" {{ old('bagian') ?? $murid->bagian == 'Fakultas Kehutanan' ? 'selected' : '' }}>
                                Fakultas Kehutanan
                            </option>
                            <option value="Fakultas Ilmu Hukum" {{ old('bagian') ?? $murid->bagian == 'Fakultas Ilmu Hukum' ? 'selected' : '' }}>
                                Fakultas Ilmu Hukum
                            </option>
                            <option value="Fakultas Psikologi" {{ old('bagian') ?? $murid->bagian == 'Fakultas Psikologi' ? 'selected' : '' }}>
                                Fakultas Psikologi
                            </option>
                            <option value="Fakultas Manajemen dan Akuntansi" {{ old('bagian') ?? $murid->bagian == 'Fakultas Manajemen dan Akuntansi' ? 'selected' : '' }}>
                                Fakultas Manajemen dan Akuntansi
                            </option>
                            <option value="Fakultas Ilmu Hubungan Internasional" {{ old('bagian') ?? $murid->bagian == 'Fakultas Ilmu Hubungan Internasional' ? 'selected' : '' }}>
                                Fakultas Ilmu Hubungan Internasional
                            </option>
                            <option value="Fakultas Ilmu Komunikasi" {{ old('bagian') ?? $murid->bagian == 'Fakultas Ilmu Komunikasi' ? 'selected' : '' }}>
                                Fakultas Ilmu Komunikasi
                            </option>
                        </select>
                        @error('jurusan')
                            <div class="alert alert-danger">{{ $message }}</div>  
                        @enderror
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="3" class="form-control">{{ old('alamat') ?? $murid->alamat }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>