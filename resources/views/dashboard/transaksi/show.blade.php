@extends('dashboard.layouts.main')

@section('container')
    <section class="content">
        <a href="/dashboard/transaksi">
            <img class="mt-4" id="bBack" src="img/backButton.png" alt="#">
        </a>
        <div class="inner detail-admin">
            <h2 class="fw-semibold text-center position-relative">Detail Laundry</h2>
            <div class="border border-dark p-4 rounded-3 auto">
                <div class="tabel">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td id="ket-l">Nama Pelanggan</td>
                                <td id="ket-r">{{ $transaksi->customer->nama_lengkap }}</td>
                            </tr>
                            <tr>
                                <td id="ket-l">Nomor telepon</td>
                                <td id="ket-r">{{ $transaksi->customer->nomor_telepon }}</td>
                            </tr>
                            <tr>
                                <td id="ket-l">Berat Baju(kg)</td>
                                <td id="ket-r">{{ $transaksi->berat_baju }} kg</td>
                            </tr>
                            <tr>
                                <td id="ket-l">Jaket</td>
                                <td id="ket-r">{{ $transaksi->jumlah_jaket }}</td>
                            </tr>
                            <tr>
                                <td id="ket-l">Selimut</td>
                                <td id="ket-r">{{ $transaksi->jumlah_selimut }}</td>
                            </tr>
                            <tr>
                                <td id="ket-l">Status</td>
                                <td id="ket-r">{{ $transaksi->status }}</td>
                            </tr>
                            <tr>
                                <td id="ket-l">Estimasi Selesai</td>
                                <td id="ket-r">{{ $transaksi->estimasi_selesai }}</td>
                            </tr>
                            <tr>
                                <td id="ket-l" style="font-size: 32px;font-weight: 600;">Total Biaya</td>
                                <td id="ket-r" style="font-size: 32px;font-weight: 600;">Rp{{ $transaksi->total_tarif }}
                                </td>
                            </tr>
                            <tr>
                                <td id="ket-l" style="font-size: 32px;border:none;"></td>
                                <td id="ket-r" style="font-size: 32px;color:#E74545;border:none;font-weight: 600;">
                                    {{ $transaksi->status_bayar }}</td>
                            </tr>
                        </tbody>
                </div>
            </div>
        </div>
    </section>
@endsection
