<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DashboardPrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.prestasis.index',[
            'prestasis' => Prestasi::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.prestasis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'tempat' => 'required',
            'waktu' => 'required',
            'tingkat' => 'required',
            'image' => 'required|image|file|max:5024'
        ]);
        $validateData['image'] = $request->file('image')->store('prestasi-images');
        $validateData['mahasiswa_id']=Mahasiswa::where('user_id',auth()->user()->id)->value('id');
        $validateData['user_id']=auth()->user()->id;
        Prestasi::create($validateData);

        return redirect('/dashboard/prestasis')->with('success', 'Data Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        return view('dashboard.prestasis.show', [
            'prestasi' => $prestasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestasi $prestasi)
    {
        return view('dashboard.prestasis.edit',[
            'prestasi' => $prestasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'tempat' => 'required',
            'waktu' => 'required',
            'tingkat' => 'required',
            'image' => 'image|file|max:5024'
        ]);
        
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('prestasi-images');
        }
        $validateData['mahasiswa_id']=Mahasiswa::where('user_id',auth()->user()->id)->value('id');
        $validateData['user_id']=auth()->user()->id;
        Prestasi::where('id', $prestasi->id)->update($validateData);
        return redirect('/dashboard/prestasis')->with('success', 'Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $prestasi)
    {
        if($prestasi->image) {
            Storage::delete($prestasi->image);
        }
        Prestasi::destroy($prestasi->id);
        return redirect('/dashboard/prestasis')->with('success', 'Post has been deleted');
    }
}
