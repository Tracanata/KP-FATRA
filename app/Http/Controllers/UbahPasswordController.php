<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class UbahPasswordController extends Controller
{
    public function edit(){
        return view("dashboard.password.edit");
    }

    public function update(Request $request){
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:5', 'confirmed'],
        ]); 

        if(Hash::check($request->current_password, auth()->user()->password)){
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('success', 'Password Berhasil Di Ubah');
        }
        else{
            return back()->with('failed', 'Password Tidak Sesuai!');
        }
    }

    
}
