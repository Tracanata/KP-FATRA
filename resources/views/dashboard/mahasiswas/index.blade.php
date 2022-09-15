@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Mahasiswa</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success col-lg-10 alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="table-responsive col-lg-10">
        <a href="/dashboard/mahasiswas/create" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#importDataModal">
          Import
        </button>

        <!-- Modal -->
        <div class="modal fade" id="importDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="/importexcel" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cover">Upload File</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
          </div>
        </div>


        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NPM</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Program Studi</th>
              <th scope="col">Angkatan</th>
              <th scope="col">Kelas</th>
              <th scope="col">Status Aktif</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mahasiswas as $mahasiswa)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $mahasiswa->npm }}</td>
              <td>{{ $mahasiswa->nama}}</td>
              <td>{{ $mahasiswa->jk}}</td>
              <td>{{ $mahasiswa->prodi}}</td>
              <td>{{ $mahasiswa->angkatan}}</td>
              <td>{{ $mahasiswa->kelas}}</td>
              <td>{{ $mahasiswa->status_aktif}}</td>
              <td>
                <a href="/dashboard/mahasiswas/{{ $mahasiswa->id}}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/mahasiswas/{{ $mahasiswa->id }}/edit" class="badge bg-warning"><span data-feather="edit-2"></span></a>
                <form action="/dashboard/mahasiswas/{{ $mahasiswa->id}}" method="post" class="d-inline">
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