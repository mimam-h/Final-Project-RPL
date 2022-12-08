@extends('dashboard.layouts.main')

@section('container')
    <section class="content">
        <div class="inner">
            <h2 class="fw-semibold text-left">Form Ubah Data Laundry</h2><br>
            <form method="POST" action="/dashboard/transaksi/{{ $transaksi->id }}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col sm-1">
                        <label for="berat_baju">Berat Baju (kg)</label>
                        <input type="text" class="form-control" name="berat_baju" required
                            value="{{ old('berat_baju', $transaksi->berat_baju) }}"><br>
                    </div>
                    <div class="col sm-1">
                        <label for="jumlah_jaket">Jumlah Jaket</label>
                        <input type="number" class="form-control @error('jumlah_jaket') is-invalid @enderror"
                            name="jumlah_jaket" required value="{{ old('jumlah_jaket', $transaksi->jumlah_jaket) }}"><br>
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
                            name="estimasi_selesai" required
                            value="{{ old('estimasi_selesai', $transaksi->estimasi_selesai) }}"><br>
                        @error('estimasi_selesai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col sm-1">
                        <label for="jumlah_selimut">Jumlah Selimut</label>
                        <input type="number" class="form-control @error('jumlah_selimut') is-invalid @enderror"
                            name="jumlah_selimut" required
                            value="{{ old('jumlah_selimut', $transaksi->jumlah_selimut) }}"><br>
                        @error('jumlah_selimut')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col sm-1">
                        <label for="status">Status</label>
                        <select class="form-select @error('status') is-invalid @enderror" name="status" required>
                            <option value="Menunggu">Menunggu</option>
                            <option value="Diproses">Diproses</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col sm-1">
                        <label for="number">Total Tarif</label>
                        <input type="number" class="form-control @error('total_tarif') is-invalid @enderror"
                            name="total_tarif" required value="{{ old('total_tarif', $transaksi->total_tarif) }}"><br>
                        @error('total_tarif')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col sm-1">
                        <label for="status_bayar">Pembayaran</label><br>
                        @if ($transaksi->status_bayar === 'Lunas')
                            <div class="form-check form-check-inline sm-1">
                                <input class="form-check-input" type="radio" name="status_bayar" id="inlineRadio1"
                                    value="Lunas" required checked>
                                <label class="form-check-label" for="status_bayar">Lunas</label>
                            </div>
                            <div class="form-check form-check-inline sm-1">
                                <input class="form-check-input " type="radio" name="status_bayar" id="inlineRadio2"
                                    value="Belum Lunas" required>
                                <label class="form-check-label" for="status_bayar">Belum Lunas</label>
                            </div><br>
                        @else
                            <div class="form-check form-check-inline sm-1">
                                <input class="form-check-input" type="radio" name="status_bayar" id="inlineRadio1"
                                    value="Lunas" required>
                                <label class="form-check-label" for="status_bayar">Lunas</label>
                            </div>
                            <div class="form-check form-check-inline sm-1">
                                <input class="form-check-input " type="radio" name="status_bayar" id="inlineRadio2"
                                    value="Belum Lunas" required checked>
                                <label class="form-check-label" for="status_bayar">Belum Lunas</label>
                            </div><br>
                        @endif


                    </div>
                </div>
                <div class="row">
                    <div class="col sm-1">
                    </div>
                    <div class="col sm-1">
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin ingin mengubah data?')">Ubah</button>
                    </div>

                </div>

            </form>


        </div>
    </section>
@endsection
