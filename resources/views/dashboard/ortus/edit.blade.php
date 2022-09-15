@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Orang Tua</h1>
    </div>

    <div class="col-lg-8">
        @foreach($ortus as $ortu)
        <form method="post" action="/dashboard/ortus/{{$ortu->id}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu"
                value="{{ old('nama_ibu', $ortu->nama_ibu) }}">
                @error('nama_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu" name="pekerjaan_ibu"
                value="{{ old('pekerjaan_ibu', $ortu->pekerjaan_ibu) }}">
                @error('perkerjaan_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
            <label for="penghasilan_ibu" class="form-label">Penghasilan Ibu</label>
                <select class="form-select" name="penghasilan_ibu">
                    <option selected disabled>--Pilih Penghasilan--</option>
                    <option value="< Rp1.000.000" {{ old('penghasilan_ibu', $ortu->penghasilan_ibu)=='< Rp1.000.000' ? 'selected' : '' }}> < Rp.1.000.000</option>
                    <option value="Rp1.000.000 - Rp3.000.000" {{ old('penghasilan_ibu', $ortu->penghasilan_ibu)=='Rp1.000.000 - Rp3.000.000' ? 'selected' : '' }}> Rp1.000.000 - Rp3.000.000</option>
                    <option value="Rp3.000.000 - Rp5.000.000" {{ old('penghasilan_ibu', $ortu->penghasilan_ibu)=='Rp3.000.000 - Rp5.000.000' ? 'selected' : '' }}> Rp3.000.000 - Rp5.000.000</option>
                    <option value="> Rp.5.000.000" {{ old('penghasilan_ibu', $ortu->penghasilan_ibu)=='=> Rp.5.000.000' ? 'selected' : '' }}> >Rp.5.000.000</option>
                </select>
            </div>
            <div class="mb-3 mt-5">
                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah"
                value="{{ old('nama_ayah', $ortu->nama_ayah) }}">
                @error('nama_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pekerjaan_ayah" class="form-label">Perkerjaan Ayah</label>
                <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah" name="pekerjaan_ayah"
                value="{{ old('pekerjaan_ayah', $ortu->pekerjaan_ayah) }}">
                @error('pekerjaan_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
            <label for="penghasilan_ayah" class="form-label">Penghasilan ayah</label>
                <select class="form-select" name="penghasilan_ayah">
                    <option selected disabled>--Pilih Penghasilan--</option>
                    <option value="< Rp1.000.000" {{ old('penghasilan_ayah', $ortu->penghasilan_ayah)=='< Rp1.000.000' ? 'selected' : '' }}> < Rp.1.000.000</option>
                    <option value="Rp1.000.000 - Rp3.000.000" {{ old('penghasilan_ayah', $ortu->penghasilan_ayah)=='Rp1.000.000 - Rp3.000.000' ? 'selected' : '' }}> Rp1.000.000 - Rp3.000.000</option>
                    <option value="Rp3.000.000 - Rp5.000.000" {{ old('penghasilan_ayah', $ortu->penghasilan_ayah)=='Rp3.000.000 - Rp5.000.000' ? 'selected' : '' }}> Rp3.000.000 - Rp5.000.000</option>
                    <option value="> Rp.5.000.000" {{ old('penghasilan_ayah', $ortu->penghasilan_ayah)=='=> Rp.5.000.000' ? 'selected' : '' }}> >Rp.5.000.000</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
        </form>
        @endforeach
    </div>
@endsection