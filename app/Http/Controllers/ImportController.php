<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Imports\MahasiswasImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(){
        return view('dashboard.import.create');
    }

    public function store(Request $request){
        Excel::import(new MahasiswasImport, $request->file('excel'));

        return redirect('/dashboard/mahasiswas')->with('success', 'Data Mahasiswa dan Akun Telah Ditambahkan!');
    }
}
