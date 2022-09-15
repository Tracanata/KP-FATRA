@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom col-lg-10">
        <h1 class="h2">Form Pekerjaan</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-10 alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card mb-5 col-lg-10">
        @foreach($works as $work)
        <div class="card-body">
            @if($work->status_aktif === 'Lulus')
                @if($work->pekerjaan)
                    <a href="/dashboard/works/{{ $work->id}}/edit" class="btn btn-primary">Edit</a>
                @else
                    <a href="/dashboard/works/{{ $work->id}}/edit" class="btn btn-primary">Isi Form Pekerjaan</a>
                @endif
                <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                    <h6 class="card-title">NPM</h6>
                    <p class="card-text">{{$work->npm}}</p>
                </div>
                <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                    <h6 class="card-title">Nama</h6>
                    <p class="card-text">{{$work->nama}}</p>
                </div>
                <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                    <h6 class="card-title">Prodi</h6>
                    <p class="card-text">{{$work->prodi}}</p>
                </div>
                <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                    <h6 class="card-title">Angkatan</h6>
                    <p class="card-text">{{$work->angkatan}}</p>
                </div>
                <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                    <h6 class="card-title">Pekerjaan</h6>
                    @if($work->pekerjaan)
                        <p class="card-text">{{$work->pekerjaan}}</p>
                    @else
                        <p><b>-</b></p>
                    @endif
                </div>
                <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                    <h6 class="card-title">Tempat Kerja</h6>
                    @if($work->tempat_kerja)
                        <p class="card-text">{{$work->tempat_kerja}}</p>  
                    @else
                        <p class="card-text"><b>-</b></p>
                    @endif
                </div>
            @else
                <div class="center-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                    <h1 class="card-title text-center">Status Anda Masih Berupa Mahasiswa Aktif</h1>
                </div>
            @endif
        </div>
        @endforeach
    </div>
@endsection 