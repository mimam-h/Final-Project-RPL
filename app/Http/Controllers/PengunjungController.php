<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Carbon\Carbon;
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
        $transaksi = Transaksi::latest()->where('user_id',auth()->user()->id)->get();

        $filtered = $transaksi->filter(function($item){
            if (!($item['status']=="Selesai" && $item['status_bayar'] =="Lunas")) {
                return $item;
            }
        });
        
        return view('pengunjung.transaksi',[
            "title" => "Transaksi",
            "transaksi" => $filtered
        ]);
    }

    public function riwayat()
    {
        $transaksi = Transaksi::latest()->where('user_id',auth()->user()->id)->get();

        $filtered = $transaksi->filter(function($item){
            if ($item['status']=="Selesai" && $item['status_bayar'] =="Lunas") {
                return $item;
            }
        });
        
        return view('pengunjung.riwayat',[
            "title" => "Riwayat",
            "transaksi" => $filtered
        ]);
    }

    public function profil()
    {   
        $transaksi = Transaksi::where('user_id',auth()->user()->user_id)->get();
        $total = $transaksi->count();
        return view('pengunjung.profil',[
            "title" => "Profil",
            "total_transaksi" => $total
        ]);
    }
}
