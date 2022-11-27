<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstimasiController extends Controller
{
    public function index()
    {
        return view('estimasi.index',[
            "title" => "Cek Estimasi Tarif"
        ]);
    }
}
