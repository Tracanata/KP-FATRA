<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class MahasiswaImport implements \Maatwebsite\Excel\Concerns\WithHeadingRow, \Maatwebsite\Excel\Concerns\ToModel
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
            'nama'=> $row['name'],
            'roles' => 'mahasiswa',
            'password' => bcrypt('12345')
        ]);

        $user = User::where('username', $row['npm'])->value('id');
        Mahasiswa::create([
            'npm' => $row['npm'],
            'nama' => $row['name'],
            'jk' => $row['jenis_kelamin'],
            'prodi' => $row['prodi'],
            'angkatan' => $row['angkatan'],
            'kelas' => $row['kelas'],
            'status_aktif' => $row['status_aktif'],
            'user_id' => $user
        ]);
    }
}
