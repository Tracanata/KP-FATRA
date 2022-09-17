<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class LulusanController extends Controller
{
    public function index(){
        return view('prolulusans',[
            "title" => "Profil Lulusan",
            "active" => "lulusan",
            "mahasiswas" => Mahasiswa::all()->whereNotNull('pekerjaan')
        ]);
    }

    public function show(Mahasiswa $mahasiswa){
        return view('lulusan',[
            "title" => "single post",
            "active" => 'lulusan',
            "mahasiswa" => $mahasiswa,
            "prestasis" => Prestasi::where('mahasiswa_id',$mahasiswa->id)->get()
        ]);
    }
}
