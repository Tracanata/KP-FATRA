@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">import mahasiswa</h1>
    </div>

    <div class="col-lg-8 mb-5">
        <form method="post" action="{{ route('import.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="cover">Upload File</label>
                <input type="file" class="form-control" name="excel">
            </div>

            <button type="submit" class="btn btn-primary mt-4" >Import</button>
        </form>
    </div>
@endsection 