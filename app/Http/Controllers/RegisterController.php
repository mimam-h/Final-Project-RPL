<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            "title" => "Register"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_telepon' => 'required|numeric|digits_between:11,13|unique:users',
            'nama_lengkap' => 'required|max:255|string',
            'alamat' => 'required|max:255|string',
            'password' => 'required|min:8'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        session()->flash('success','Registrasi berhasil! Silahkan login');
        return redirect('/login');
    }
}
