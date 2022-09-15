@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom col-lg-10">
        <h1 class="h2">Data Orang Tua</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success col-lg-10 alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card mb-3 col-lg-10">
        @foreach ($ortus as $ortu)
        <div class="card-body">
        <a href="/dashboard/ortus/{{ $ortu->id}}/edit" class="btn btn-primary">Edit</a>
          <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
            <h6 class="card-title">Nama Ibu</h6>
            <p class="card-text">{{$ortu->nama_ibu}}</p>
          </div>
          <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
            <h6 class="card-title">Pekerjaan Ibu</h6>
            <p class="card-text">{{$ortu->pekerjaan_ibu}}</p>
          </div>
          <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
            <h6 class="card-title">Penghasilan Ibu</h6>
            @if($ortu->penghasilan_ibu)
            <p class="card-text">{{$ortu->penghasilan_ibu}} /bulan</p>
            @else
            <p></p>
            @endif
          </div>
          <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-2 border-bottom">
            <h6 class="card-title">Nama Ayah</h6>
            <p class="card-text">{{$ortu->nama_ayah}}</p>
          </div>
          <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
            <h6 class="card-title">Pekerjaan Ayah</h6>
            <p class="card-text">{{$ortu->pekerjaan_ayah}}</p>
          </div>
          <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
            <h6 class="card-title">Penghasilan Ayah</h6>
            @if($ortu->penghasilan_ayah)
            <p class="card-text">{{$ortu->penghasilan_ayah}} /bulan</p>
            @else
            <p></p>
            @endif
          </div>
        </div>
        @endforeach
    </div>
@endsection 