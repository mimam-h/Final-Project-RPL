@extends('dashboard.layouts.main')

@section('container')
    <section class="content">
        <div class="inner">
            <h2 class="fw-semibold">Daftar Antrian Laundry</h2>
            <a class="add" href="/dashboard/transaksi/create">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                    <path
                        d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                    <path
                        d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                </svg>
            </a>
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
                                        <a href="/dashboard/transaksi/{{ $item->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
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
                                    <td><button id="btn">Proses</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </section>
@endsection
