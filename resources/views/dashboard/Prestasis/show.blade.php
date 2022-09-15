@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="card col-lg-10">
                <div class="mt-3 mb-3">
                    <a href="/dashboard/prestasis" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
                    <a href="/dashboard/prestasis/{{$prestasi->id}}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/prestasis/{{$prestasi->id}}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger" onclick="return confirm('are you sure ?')"><span data-feather="x-circle"></span> Delete</button>
                    </form>
                    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                        <h6 class="card-title">Nama Kegiatan</h6>
                        <p class="card-text">{{$prestasi->nama}}</p>
                    </div>
                    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                        <h6 class="card-title">Tempat</h6>
                        <p class="card-text">{{$prestasi->tempat}}</p>
                    </div>
                    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                        <h6 class="card-title">Tempat</h6>
                        <p class="card-text">{{$prestasi->tempat}}</p>
                    </div>
                    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                        <h6 class="card-title">Waktu Pelaksanaan</h6>
                        <p class="card-text">{{$prestasi->waktu}}</p>
                    </div>
                    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                        <h6 class="card-title">Tingkat</h6>
                        <p class="card-text">{{$prestasi->tingkat}}</p>
                    </div>
                    <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2">
                        <h6 class="card-title">Bukti Prestasi</h6>
                        <img src="{{ asset('storage/' . $prestasi->image) }} " width="250" alt=" {{ $prestasi->nama }}" class="img-fluid mt-1">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection