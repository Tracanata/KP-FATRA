@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Pekerjaan</h1>
    </div>

    <div class="col-lg-8">
        @foreach($works as $work)
        <form method="post" action="/dashboard/works/{{$work->id}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <fieldset disabled="disabled">
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="number" class="form-control @error('npm') is-invalid @enderror" id="npm" name="npm" 
                value="{{ old('npm', $work->npm) }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                value="{{ old('nama', $work->nama) }}">
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi"
                value="{{ old('prodi', $work->prodi) }}">
            </div>
            <div class="mb-3">
                <label for="angkatan" class="form-label">Angkatan</label>
                <input type="text" class="form-control @error('angkatan') is-invalid @enderror" id="prodi" name="prodi"
                value="{{ old('angkatan', $work->angkatan) }}">
            </div>
            </fieldset>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Perkerjaan</label>
                <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan"
                value="{{ old('pekerjaan', $work->pekerjaan) }}">
                @error('pekerjaan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tempat_kerja" class="form-label">Tempat Kerja</label>
                <input type="text" class="form-control @error('tempat_kerja') is-invalid @enderror" id="tempat_kerja" name="tempat_kerja"
                value="{{ old('tempat_kerja', $work->tempat_kerja) }}">
                @error('tempat_kerja')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        @endforeach
    </div>
@endsection