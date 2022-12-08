@extends('dashboard.layouts.main')

@section('container')
    <section class="content">
        <div class="inner">
            <h2 class="fw-semibold">Laundry Selesai</h2>
            <section class="table-section p-4">
                <div class="tabel p-4 top-50">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table ms-4 table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Tarif</th>
                                <th scope="col">Estimasi</th>
                                <th scope="col">Pembayaran</th>
                                <th scope="col">Action</th>
                                <th scope="col">Proses</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $item)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $item->customer->nama_lengkap }}</td>
                                    <td>{{ $item->berat_baju }}</td>
                                    <td>{{ $item->total_tarif }}</td>
                                    <td>{{ $item->estimasi_selesai }}</td>
                                    <td>{{ $item->status_bayar }}</td>
                                    <td>
                                        <a href="/dashboard/transaksi/{{ $item->id }}" class="badge bg-info"><span
                                                data-feather="eye"></span></a>
                                        <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                                        <form action="/dashboard/transaksi/{{ $item->id }}" method="POST"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0"
                                                onclick="return confirm('Yakin ingin hapus data?')">
                                                <span data-feather="x-circle"></span>
                                            </button>
                                        </form>
                                    </td>
                                    <td><a href="https://wa.me/62{{ substr($item->customer->nomor_telepon,1) }}?text=Hai%2C%20laundrymu%20telah%20selesai%20%5E.%5E" class="badge bg-success"><i class="bi bi-whatsapp"></i>Hubungi</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </section>
@endsection
