@extends('dashboard.layouts.main')

@section('container')
    <section class="content">
        <div class="inner">
            <h2 class="fw-semibold text-left">Entri Laundry</h2><br>
            <form method="POST" action="/dashboard/transaksi">
                @csrf
                <div class="row">
                    <div class="col sm-1">
                        <label for="nama_lengkap">Nama</label>
                        <select class="form-select @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->nama_lengkap }}">{{ $user->nama_lengkap }}</option>
                            @endforeach
                        </select>
                        @error('nama_lengkap')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col sm-1">
                        <label for="berat_baju">Berat Baju (kg)</label>
                        <input type="text" class="form-control" name="berat_baju" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col sm-1">
                        <label for="user_id">No. Telp</label>
                        <select class="form-select @error('user_id') is-invalid @enderror" name="user_id" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->nomor_telepon }}</option>
                            @endforeach
                        </select>
                        @error('nomor_telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col sm-1">
                        <label for="jumlah_jaket">Jumlah Jaket</label>
                        <input type="number" class="form-control @error('jumlah_jaket') is-invalid @enderror"
                            name="jumlah_jaket" required value="0"><br>
                        @error('jumlah_jaket')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col sm-1">
                        <label for="estimasi_selesai">Estimasi</label>
                        <input type="datetime-local" class="form-control @error('estimasi_selesai') is-invalid @enderror"
                            name="estimasi_selesai" required><br>
                        @error('estimasi_selesai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col sm-1">
                        <label for="jumlah_selimut">Jumlah Selimut</label>
                        <input type="number" class="form-control @error('jumlah_selimut') is-invalid @enderror"
                            name="jumlah_selimut" required value="0"><br>
                        @error('jumlah_selimut')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col sm-1">
                        <label for="number">Total Tarif</label>
                        <input type="number" class="form-control @error('total_tarif') is-invalid @enderror"
                            name="total_tarif" required><br>
                        @error('total_tarif')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col sm-1">
                        <label for="status_bayar">Pembayaran</label><br>
                        <div class="form-check form-check-inline sm-1">
                            <input class="form-check-input" type="radio" name="status_bayar" id="inlineRadio1"
                                value="Lunas" required>
                            <label class="form-check-label" for="status_bayar">Lunas</label>
                        </div>
                        <div class="form-check form-check-inline sm-1">
                            <input class="form-check-input " type="radio" name="status_bayar" id="inlineRadio2"
                                value="Belum Lunas" required>
                            <label class="form-check-label" for="status_bayar">Belum Lunas</label>
                        </div><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col sm-1">
                    </div>
                    <div class="col sm-1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
