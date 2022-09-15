<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class WorkExport implements \Maatwebsite\Excel\Concerns\FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mahasiswa::all()->whereNotNull('pekerjaan');
    }
}
