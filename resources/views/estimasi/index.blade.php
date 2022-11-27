@extends('layouts.main')

@section('container')
    <a href="/">
        <img src="img/back-button.png" alt="" style="width:50px;margin-left:-6%"
            class="position-absolute btn btn-outline-primary mt-4">
    </a>
    <section class="rataKanan">
        <img src="img/estimasi-background.png" alt="">
        <h3 class="ms-5 justify-content-center position-absolute start-0 top-50 text-white">Temukan Kemudahan Mengetahui
            <br>Estimasi Tarif Laundry-mu
        </h3>
        <div class="d-inline-flex flex-column justify-content-center">
            <div class="container-rataKanan position-absolute start-50 ms-5 p-4">
                <form class="form-cekTarif border border-dark p-5 rounded-3">
                    <h4 style="font-weight: 500;">Isi Form Untuk Cek Tarif Laundry</h1>
                        <div class="mb-1">
                            <label for="beratBaju" class="form-label">Berat Baju(kg)</label>
                            <input type="number" class="form-control" id="beratBaju" aria-describedby="emailHelp"
                                placeholder="eg. 2">
                        </div>
                        <div class="mb-1">
                            <label for="jumlahJaket" class="form-label">Jumlah Jaket</label>
                            <input type="number" class="form-control" id="jumlahJaket" aria-describedby="emailHelp"
                                placeholder="eg. 1">
                        </div>
                        <div class="mb-1">
                            <label for="jumlahSelimut" class="form-label">Jumlah Selimut</label>
                            <input type="number" class="form-control" id="jumlahSelimut" aria-describedby="emailHelp"
                                placeholder="eg. 1">
                        </div>
                        <fieldset disabled>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Estimasi</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Rp ,-">
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary justify-content-center">Hitung</button>
                </form>
            </div>
        </div>
    </section>
@endsection
