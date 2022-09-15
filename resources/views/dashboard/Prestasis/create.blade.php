@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Data Prestasi</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/prestasis" enctype="multipart/form-data">
            @csrf
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
                <label for="tempat" class="form-label">Tempat</label>
                <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="tempat" name="tempat" 
                value="{{ old('tempat') }}">
                @error('tempat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu Pelaksanaan</label>
                <input type="date" class="form-control @error('waktu') is-invalid @enderror" id="waktu"
                    name="waktu" value="{{ old('waktu') }}" required autocomplete="off">
                @error('waktu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tingkat" class="form-label">Tingkat</label>
                <select class="form-select" name="tingkat">
                    <option selected disabled>--Tingkat Kegiatan--</option>
                    <option value="Lokal" {{ old('tingkat')=='Lokal' ? 'selected' : '' }}>Lokal</option>
                    <option value="Nasional"{{ old('tingkat')=='Nasional' ? 'selected' : '' }}>Nasional</option>
                    <option value="Internasional"{{ old('tingkat')=='Nasional' ? 'selected' : '' }}>Internasional</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Bukti Prestasi</label>
                <img class="img-preview img-fluid mb-3 col-sm-3">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" 
                name="image" onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
        </form>
    </div>

    <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            // mengambil data gambar
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection