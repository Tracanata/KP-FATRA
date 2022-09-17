<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MahasiswasImport implements WithHeadingRow, ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        User::create([
            'username' => $row['npm'],
            'name' => $row['nama'],
            'roles' => 'mahasiswa',
            'password'=> bcrypt('12345')
        ]);
        $user = User::where('username', $row['npm'])->value('id');
        Mahasiswa::create([
            'npm' => $row['npm'],
            'nama' => $row['nama'],
            'jk' => $row['jenis_kelamin'],
            'prodi' => $row['prodi'],
            'angkatan' => $row['angkatan'],
            'kelas' =>$row['kelas'],
            'status_aktif' => $row['status_aktif'],
            'user_id' => $user
        ]);
    }
}
