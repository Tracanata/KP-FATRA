@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Laporan</h1>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="card bg-primary mx-3" style="width: 20rem;">
                <div class="card-body">
                    <a href="/promahasiswas" class="text-decoration-none text-white">
                        <div class="text-center">
                            <h3 class="card-title">Recap Data Orang Tua Mahasiswa</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card bg-warning mx-3" style="width: 20rem;">
                <div class="card-body">
                    <a href="/promahasiswas" class="text-decoration-none text-white">
                        <div class="text-center">
                            <h3 class="card-title">Recap Data Prestasi Mahasiswa</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card bg-success mx-3" style="width: 20rem;">
                <div class="card-body">
                    <a href="/exportwork" class="text-decoration-none text-white">
                        <div class="text-center">
                            <h3 class="card-title">Recap Data Pekerjaan Lulusan</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection 