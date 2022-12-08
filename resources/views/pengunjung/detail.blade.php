@extends('layouts.main')
<!--merujuk ke main.blade.php-->
@section('container')
    <a href="/transaksi">
        <img src="img/backButton.svg" alt="" style="width:50px;margin-left:-6%"
            class="position-absolute btn btn-outline-primary mt-4">
    </a>
    <section class="detail-section p-4">
        <h2 class="fw-semibold text-center mb-5">Detail Laundry</h2>
        <div class="container-detail p-4 lh-lg border border-dark p-4 rounded-3 position-relative">
            <table>
                <tbody>
                    <tr>
                        <th>Berat Baju(kg)</th>
                        <td>{{ $transaksi->berat_baju }}</td>
                    </tr>
                    <tr>
                        <th>Jaket</th>
                        <td>{{ $transaksi->jumlah_jaket }}</td>
                    </tr>
                    <tr>
                        <th>Selimut</th>
                        <td>{{ $transaksi->jumlah_selimut }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $transaksi->status }}</td>
                    </tr>
                    <tr>
                        <th>Estimasi Selesai</th>
                        <td>{{ $transaksi->estimasi_selesai->diffForHumans() }}</td>
                    </tr>
                    <tr class="another">
                        <th>Total Biaya</th>
                        <td>Rp{{ $transaksi->total_tarif }}</td>
                    </tr>
                    <tr class="another fw-semibold">
                        <th></th>
                        <td>{{ $transaksi->status_bayar }}</td>
                    </tr>

                </tbody>
            </table>

        </div>
    </section>
@endsection
