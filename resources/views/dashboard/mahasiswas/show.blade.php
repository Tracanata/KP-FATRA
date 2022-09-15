@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Mahasiswa</h1>
    </div>
    <div class="card mb-4">
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1">
          <h2 class="card-title">Profile</h2>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-2">
          @if($mahasiswa->image)
            <img src="{{ asset('storage/' . $mahasiswa->image) }}" class="rounded-circle  mt-2"
            alt="Profile Mahasiswa" height="150" width="150" style="object-fit: cover;">
          @else
            <img src="/img/anonim.png" class="rounded-circle d-block mt-3"
            alt="Profile Mahasiswa" height="150" width="150" style="object-fit: cover;">
          @endif
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-2 border-bottom">
          <h6 class="card-title">NPM</h6>
          <p class="card-text">{{$mahasiswa->npm}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-2 border-bottom">
          <h6 class="card-title">Nama</h6>
          <p class="card-text">{{$mahasiswa->nama}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-2 border-bottom">
          <h6 class="card-title">Jenis Kelamin</h6>
          <p class="card-text">{{$mahasiswa->jk}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-2 border-bottom">
          <h6 class="card-title">Program Studi</h6>
          <p class="card-text">{{$mahasiswa->prodi}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-2 border-bottom">
          <h6 class="card-title">Angkatan</h6>
          <p class="card-text">{{$mahasiswa->angkatan}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-2 border-bottom">
          <h6 class="card-title">Status Aktif</h6>
          <p class="card-text">{{$mahasiswa->status_aktif}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-2 border-bottom">
          <h6 class="card-title">Email</h6>
          <p class="card-text">{{$mahasiswa->no_tlp}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-2 border-bottom">
          <h6 class="card-title">No Telepon</h6>
          <p class="card-text">{{$mahasiswa->no_tlp}}</p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2">
          <h2 class="card-title">Data Orang Tua</h2>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-2 border-bottom">
            <h6 class="card-title">Nama Ibu</h6>
            <p class="card-text">{{$mahasiswa->nama_ibu}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
            <h6 class="card-title">Pekerjaan Ibu</h6>
            <p class="card-text">{{$mahasiswa->pekerjaan_ibu}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
            <h6 class="card-title">Penghasilan Ibu</h6>
            @if($mahasiswa->penghasilan_ibu)
            <p class="card-text">Rp{{$mahasiswa->penghasilan_ibu}} /bulan</p>
            @else
            <p></p>
            @endif
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
            <h6 class="card-title">Nama Ayah</h6>
            <p class="card-text">{{$mahasiswa->nama_ayah}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
            <h6 class="card-title">Pekerjaan Ayah</h6>
            <p class="card-text">{{$mahasiswa->pekerjaan_ayah}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
            <h6 class="card-title">Penghasilan Ayah</h6>
            @if($mahasiswa->penghasilan_ayah)
            <p class="card-text">Rp{{$mahasiswa->penghasilan_ayah}} /bulan</p>
            @else
            <p></p>
            @endif
        </div>    
    </div>
    <div class="card mb-4">
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2">
          <h2 class="card-title">Prestasi</h2>
        </div>
        @foreach($prestasis as $prestasi)
            <p class="card-text"><b>-</b>{{$prestasi->nama}}</p>
        @endforeach
    </div>
@endsection