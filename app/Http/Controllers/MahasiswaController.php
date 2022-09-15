<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class MahasiswaController extends Controller
{
    public function index(){
        return view('promahasiswas', [
            "title" => "Prestasi Mahasiswa",
            "active" => "mhs",
            // "prestasis"=> Prestasi::all()->unique('mahasiswa_id')->paginate(7),
            "prestasis"=> Prestasi::all()->unique('mahasiswa_id')

        ]);
    }

    public function show(Mahasiswa $mahasiswa){
        return view('mahasiswa',[
            "active" => 'pres',
            "mahasiswa" => $mahasiswa,
            "prestasis" => Prestasi::where('mahasiswa_id',$mahasiswa->id)->get()
        ]);
    }
}
