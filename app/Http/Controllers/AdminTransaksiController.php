<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class AdminTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::latest()->where('status',"Menunggu")->get();
        return view('dashboard.transaksi.index',[
            'transaksi' => $transaksi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.transaksi.create',[
            'users' => User::where('role','pelanggan')->get()
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
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'user_id' => 'required',
            'berat_baju' => 'required|numeric',
            'jumlah_jaket' => 'integer',
            'jumlah_selimut' => 'integer',
            'estimasi_selesai' => 'required|date',
            'status_bayar' => 'required',
            'total_tarif' => 'required|integer',
        ]);

        $validatedData['status'] = "Menunggu";
        Transaksi::create($validatedData);

        return redirect('/dashboard/transaksi')->with('success','Transaksi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        return view('dashboard.transaksi.show',[
            'transaksi' => $transaksi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        return view('dashboard.transaksi.edit',[
            'transaksi' => $transaksi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $validatedData = $request->validate([
            'berat_baju' => 'required|numeric',
            'jumlah_jaket' => 'integer',
            'status' => 'required',
            'jumlah_selimut' => 'integer',
            'estimasi_selesai' => 'required|date',
            'status_bayar' => 'required',
            'total_tarif' => 'required|integer',
        ]);
        $validatedData['user_id'] = $transaksi->customer->id;
        Transaksi::where('id',$transaksi->id)->update($validatedData);

        return redirect('/dashboard/transaksi')->with('success','Transaksi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        Transaksi::destroy($transaksi->id);

        return redirect('/dashboard/transaksi')->with('success','Transaksi berhasil dihapus');
    }

    public function diproses()
    {
        $transaksi = Transaksi::latest()->where('status','Diproses')->get();

        return view('dashboard.transaksi.diproses',[
            'transaksi' => $transaksi
        ]);
    }

    public function selesai()
    {
        $transaksi = Transaksi::latest()->where('status','Selesai')->get();

        return view('dashboard.transaksi.selesai',[
            'transaksi' => $transaksi
        ]);
    }

    public function process(Transaksi $transaksi)
    {
        $request = Transaksi::where('id',$transaksi->id)->update(['status' => 'Diproses']);
        return redirect('/dashboard/diproses')->with('success','Transaksi berhasil diproses');
    }

    public function finish(Transaksi $transaksi)
    {
        $request = Transaksi::where('id',$transaksi->id)->update(['status' => 'Selesai']);
        return redirect('/dashboard/selesai')->with('success','Transaksi berhasil diselesaikan');
    }
}
