@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center">{{$title}}</h1>
    
    <div class="container">
        <div class="row justify-content-center">
            @foreach($prestasis as $prestasi)
                <div class="card mx-4 mb-5" style="width: 12rem;">
                    @if($prestasi->Mahasiswa->image)
                    <img src="{{ asset('storage/' . $prestasi->Mahasiswa->image) }}" class="rounded-circle mx-auto d-block mt-3"
                        alt="Profile Mahasiswa" height="120" width="120" style="object-fit: cover;">
                    @else
                    <img src="img/anonim.png" class="rounded-circle mx-auto d-block mt-3"
                        alt="Profile Mahasiswa" height="120" width="120" style="object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <a href="/promahasiswas/{{ $prestasi->Mahasiswa->id }}" class="text-decoration-none text-dark">
                            <div class="text-center">
                                <h6>{{ $prestasi->Mahasiswa->nama}}</h6>
                                <h6>{{ $prestasi->Mahasiswa->npm}}</h6>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection