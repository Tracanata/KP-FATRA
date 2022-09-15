@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profile</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success col-lg-10 alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card mb-4 col-lg-10">
      @foreach($profils as $profil)
      <div class="card-body">
        <a href="/dashboard/profils/{{ $profil->id}}/edit" class="btn btn-primary">Edit Profil</a>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2">
          @if($profil->image)
            <img src="{{ asset('storage/' . $profil->image) }}" class="rounded-circle mx-auto mt-2"
            alt="Profile Mahasiswa" height="150" width="150" style="object-fit: cover;">
          @else
            <img src="/img/anonim.png" class="rounded-circle mx-auto mt-2"
            alt="Profile Mahasiswa" height="150" width="150" style="object-fit: cover;">
          @endif
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
          <h6 class="card-title">NPM</h6>
          <p class="card-text">{{$profil->npm}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
          <h6 class="card-title">Nama</h6>
          <p class="card-text">{{$profil->nama}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
          <h6 class="card-title">Prodi</h6>
          <p class="card-text">{{$profil->prodi}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
          <h6 class="card-title">Angkatan</h6>
          <p class="card-text">{{$profil->angkatan}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
          <h6 class="card-title">Email</h6>
          <p class="card-text">{{$profil->email}}</p>
        </div>
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
          <h6 class="card-title">No Telepon</h6>
          <p class="card-text">{{$profil->no_tlp}}</p>
        </div>
      </div>
      @endforeach
    </div>
@endsection 