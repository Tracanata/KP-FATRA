@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mx-3 mt-10">
                    <div class="image d-flex flex-column justify-content-center align-items-center">
                        @if($mahasiswa->image)
                        <img src="{{ asset('storage/' . $mahasiswa->image) }}" class="rounded-circle mx-auto d-block mt-3"
                            alt="Profile Mahasiswa" height="150" width="150" style="object-fit: cover;">
                        @else
                        <img src="/img/anonim.png" class="rounded-circle mx-auto d-block mt-3"
                            alt="Profile Mahasiswa" height="150" width="150" style="object-fit: cover;">
                        @endif
                    </div>
                    <table>
                        <tr>
                            <td class="py-2 px-2 idd">NPM</td>
                            <td>: </td>
                            <td class="p-2 idd">{{ $mahasiswa->npm }}</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-2 idd">Nama</td>
                            <td>: </td>
                            <td class="p-2 idd">{{ $mahasiswa->nama }}</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-2 idd">Program Studi</td>
                            <td>: </td>
                            <td class="p-2 idd">{{ $mahasiswa->prodi }}</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-2 idd">Angkatan</td>
                            <td>: </td>
                            <td class="p-2 idd">{{ $mahasiswa->angkatan }}</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-2 idd">Email</td>
                            <td>: </td>
                            @if($mahasiswa->email)
                                <td class="p-2 idd">{{ $mahasiswa->email }}</td>
                            @else
                                <td class="p-2 idd"><b>-</b></td>
                            @endif
                        </tr>
                        <tr>
                            <td class="py-2 px-2 idd">Pekerjaan</td>
                            <td>: </td>
                            <td class="p-2 idd">{{ $mahasiswa->pekerjaan }}</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-2 idd">Tempat Kerja</td>
                            <td>: </td>
                            @if($mahasiswa->email)
                                <td class="p-2 idd">{{ $mahasiswa->tempat_kerja }}</td>
                            @else
                                <td class="p-2 idd"><b>-</b></td>
                            @endif
                        </tr>
                    </table>
                    <h6 class="py-2 px-2 idd">Prestasi :</h6>
                    @foreach($prestasis as $prestasi)
                        <ul>
                            <li>{{$prestasi->nama}} ({{ $prestasi->waktu }})</li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
@endsection