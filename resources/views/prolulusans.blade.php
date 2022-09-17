@extends('layouts.main')
@section('container')
    <h1 class="mb-5 text-center">{{$title}}</h1>
    <div class="row justify-content-center">
        @foreach($mahasiswas as $mahasiswa)
            <div class="card mx-3" style="width: 12rem;">
                @if($mahasiswa->image)
                <img src="{{ asset('storage/' . $mahasiswa->image) }}" class="rounded-circle mx-auto d-block mt-3"
                    alt="Profile Mahasiswa" height="120" width="120" style="object-fit: cover;">
                @else
                <img src="img/anonim.png" class="rounded-circle mx-auto d-block mt-3"
                    alt="Profile Mahasiswa" height="150" width="150" style="object-fit: cover;">
                @endif
                <div class="card-body">
                    <a href="/prolulusans/{{ $mahasiswa->id }}" class="text-decoration-none text-dark">
                        <div class="text-center">
                            <h6>{{ $mahasiswa->nama}}</h6>
                            <h6>{{ $mahasiswa->npm}}</h6>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection