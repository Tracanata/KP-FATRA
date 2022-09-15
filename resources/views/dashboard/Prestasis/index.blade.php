@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Prestasi Mahasiswa</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success col-lg-10 alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="table-responsive col-lg-10">
        <a href="/dashboard/prestasis/create" class="btn btn-primary mb-3">Input Prestasi</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Tempat</th>
              <th scope="col">Waktu</th>
              <th scope="col">Tingkat</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($prestasis as $prestasi)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $prestasi->nama}}</td>
              <td>{{ $prestasi->tempat}}</td>
              <td>{{ $prestasi->waktu}}</td>
              <td>{{ $prestasi->tingkat}}</td>
              <td>
                <a href="/dashboard/prestasis/{{$prestasi->id}}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/prestasis/{{$prestasi->id}}/edit" class="badge bg-warning"><span data-feather="edit-2"></span></a>
                <form action="/dashboard/prestasis/{{$prestasi->id}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('are you sure ?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection 