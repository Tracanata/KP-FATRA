<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Prestasi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashboardMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mahasiswas.index',[
            'mahasiswas' => Mahasiswa::all()
        ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.mahasiswas.create', [
            'users' => User::where('roles', 'mahasiswa')->get()->last()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'npm' => 'required',
            'nama' => 'required|max:255',
            'jk' => 'required',
            'prodi' => 'required',
            'angkatan' => 'required',
            'kelas' => 'required',
            'status_aktif' => 'required'
        ];
        $validateData = $request->validate($rules);

        $validate = Validator::make($validateData,$rules);

        if(!$validate->fails()){
            User::create([
                'name' => $request->nama,
                'username' => $request->npm,
                'roles' => 'mahasiswa',
                'password' => bcrypt('12345')
            ]);
        }

        $validateData['user_id'] = User::where('username', $request->npm)->value('id');
        Mahasiswa::create($validateData);

        return redirect('/dashboard/mahasiswas')->with('success', 'Data Mahasiswa dan Akun Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('dashboard.mahasiswas.show', [
            'mahasiswa' => $mahasiswa,
            'prestasis' => Prestasi::where('mahasiswa_id',$mahasiswa->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('dashboard.mahasiswas.edit', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $rules = [
            'npm' => 'required',
            'nama' => 'required|max:255',
            'jk' => 'required',
            'prodi' => 'required',
            'angkatan' => 'required',
            'kelas' => 'required',
            'status_aktif' => 'required'
        ];
        $validateData = $request->validate($rules);

        $validate = Validator::make($validateData,$rules);

        if(!$validate->fails()){
            User::where('id', $mahasiswa->user_id)->update([
                'name' => $request->nama,
                'username' => $request->npm,
            ]);
        }

        $validateData['user_id'] = User::where('username', $request->npm)->value('id');
        Mahasiswa::where('id', $mahasiswa->id)->update($validateData);

        return redirect('/dashboard/mahasiswas')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        if($mahasiswa->image) {
            Storage::delete($mahasiswa->image);
        }
        User::destroy(User::where('id', Mahasiswa::where('id', $mahasiswa->id)->value('user_id'))->value('id'));
        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/dashboard/mahasiswas')->with('success', 'Data has been deleted!');
    }
}
