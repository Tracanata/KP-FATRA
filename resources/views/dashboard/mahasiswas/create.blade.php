@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Mahasiswa</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/mahasiswas" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="number" class="form-control @error('npm') is-invalid @enderror" id="npm" name="npm" 
                value="{{ old('npm') }}">
                @error('npm')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                value="{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jk">
                        <option selected disabled>--Pilih Jenis Kelamin--</option>
                        <option value="Laki-Laki" {{ old('jk')=='Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="Perempuan"{{ old('jk')=='Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi</label>
                <select class="form-select" name="prodi">
                    <option selected disabled>--Pilih Program Studi--</option>
                    <option value="Teknik Sipil" {{ old('prodi')=='Teknik Sipil' ? 'selected' : '' }}>Teknik Sipil</option>
                    <option value="Teknik Industri"{{ old('prodi')=='Teknik Industri' ? 'selected' : '' }}>Teknik Industri</option>
                    <option value="Informatika"{{ old('prodi')=='Informatika' ? 'selected' : '' }}>Informatika</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="angkatan" class="form-label">Angkatan</label>
                <input type="text" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan" name="angkatan"
                value="{{ old('angkatan') }}">
                @error('angkatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <select class="form-select" name="kelas">
                    <option selected disabled>--Pilih Kelas--</option>
                    <option value="Reguler A" {{ old('kelas')=='Reguler A' ? 'selected' : '' }}>Reguler A</option>
                    <option value="Reguler B" {{ old('kelas')=='Reguler B' ? 'selected' : '' }}>Reguler B</option>
                    <option value="Reguler C" {{ old('kelas')=='Reguler C' ? 'selected' : '' }}>Reguler C</option>
                    <option value="Reguler D" {{ old('kelas')=='Reguler D' ? 'selected' : '' }}>Reguler D</option>
                    <option value="Non Reguler" {{ old('kelas')=='Non Reguler' ? 'selected' : '' }}>Non Reguler</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="status_aktif" class="form-label">Status Aktif</label>
                <select class="form-select" name="status_aktif">
                    <option selected disabled>--Status Aktif--</option>
                    <option value="Aktif" {{ old('status_aktif')=='Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Tidak Aktif" {{ old('status_aktif')=='Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                    <option value="Cuti" {{ old('status_aktif')=='Cuti' ? 'selected' : '' }}>Cuti</option>
                    <option value="Lulus" {{ old('status_aktif')=='Lulus' ? 'selected' : '' }}>Lulus</option>
                </select>
            </div>
           
            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
        </form>
    </div>
@endsection