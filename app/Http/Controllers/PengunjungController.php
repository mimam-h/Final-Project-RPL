<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    
    public function index()
    {
        return view('index',[
            "title" => "Home"
        ]);
    }
    
    public function transaksi()
    {
        return view('pengunjung.transaksi',[
            "title" => "Transaksi"
        ]);
    }

    public function riwayat()
    {
        return view('pengunjung.transaksi',[
            "title" => "Riwayat"
        ]);
    }

    public function profil()
    {   
        return view('pengunjung.profil',[
            "title" => "Profil"
        ]);
    }
}
