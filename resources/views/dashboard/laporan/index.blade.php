@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Laporan</h1>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="card mx-5 bg-info" style="width: 15rem; height: 12rem;">
                <div class="card-body">
                    <a href="#" class="text-decoration-none text-dark">
                        <div class="text-justify">
                            <h4>Recap Data Orang Tua Mahasiswa</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card mx-5 bg-secondary" style="width: 15rem; height: 12rem;">
                <div class="card-body">
                    <a href="#" class="text-decoration-none text-dark">
                        <div class="text-justify">
                            <h4>Recap Data Prestasi Siswa</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="card mx-5 bg-success" style="width: 15rem; height: 12rem;">
                <div class="card-body">
                    <a href="/exportwork" class="text-decoration-none text-dark">
                        <div class="text-justify">
                            <h4>Recap Data Pekerjaan Lulusan</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection 