@extends('layouts.main')

@section('container')
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/slider1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/slider2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/slider3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container mt-3 mb-5">
    <div class="card">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="card bg-primary mx-3" style="width: 20rem;">
                <div class="card-body">
                    <a href="/promahasiswas" class="text-decoration-none text-white">
                        <div class="text-center">
                            <h1><i class="bi bi-award"></i></h1>
                            <h3 class="card-title">Prestasi Mahasiswa</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card bg-success mx-3" style="width: 20rem;">
                <div class="card-body">
                    <a href="/prolulusan" class="text-decoration-none text-white">
                        <div class="text-center">
                            <h1><i class="bi bi-person-check-fill"></i></h1>
                            <h3 class="card-title">Lulusan</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection