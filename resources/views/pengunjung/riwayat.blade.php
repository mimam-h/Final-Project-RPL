@extends('layouts.main')
@section('container')
    <a href="/home">
        <img src="img/back-button.png" alt="#" style="width:50px;margin-left:-6%"
            class="position-absolute btn btn-outline-primary mt-4">
    </a>
    <section class="table-section p-4">
        <h2 class="fw-semibold text-center">Riwayat Transaksi</h2>
        <div class="tabel p-4 top-50">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No Transaksi</th>
                        <th scope="col">Berat Baju(kg)</th>
                        <th scope="col">Total Biaya</th>
                        <th scope="col">Pembayaran</th>
                        <th scope="col">Status</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $item)
                        <tr class="text-center">
                            <td class="no fw-semibold" scope="row">1</td>
                            <td>{{ $item->berat_baju }}</td>
                            <td>{{ $item->total_tarif }}</td>
                            <td>{{ $item->status_bayar }}</td>
                            <td>{{ $item->status }}</td>
                            <td class="text-center">
                                <a type="button" class="text-primary text-center" href="/detail">Lihat</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
