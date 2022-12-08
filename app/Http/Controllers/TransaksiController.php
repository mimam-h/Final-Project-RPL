<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function show(Transaksi $transaksi)
    {
        $transaksi['estimasi_selesai'] = Carbon::parse($transaksi['estimasi_selesai']);
        return view('pengunjung.detail',[
            "title" => "Single Post",
            "transaksi" => $transaksi
        ]);
    }
}
