@extends('layouts.main')
@section('container')
    <a href="/login">
        <img src="img/back-button.png" alt="#" style="width:50px;margin-left:-6%"
            class="position-absolute btn btn-outline-primary mt-4">
    </a>
    <section class="rataKanan">
        <img src="img/bgRegister.png" alt="" draggable="false">
        <h2 class="ms-5 justify-content-center position-absolute start-0 top-50 text-white">Gabung Dewi Laundry<br>
            Maksimalkan Waktumu</h2>
        <div class="d-inline-flex flex-column justify-content-center">
            <div class="container-rataKanan position-absolute start-50 ms-5 p-0">
                <form class="border border-dark p-4 rounded-3" action="/register" method="POST">
                    @csrf
                    <h2 class="fw-semibold text-center">Register</h2>
                    <div class="mb-2">
                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon"
                            class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomorTelepon"
                            aria-describedby="emailHelp" required>
                        @error('nomor_telepon')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input name="nama_lengkap" type="text"
                            class="form-control @error('nama_lengkap') is-invalid @enderror" id="namaLengkap"
                            aria-describedby="emailHelp" required>
                        @error('nama_lengkap')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                            id="alamat" aria-describedby="emailHelp" required>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                aria-describedby="passwordHelpBlock" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                        </div>
                </form>
            </div>
        </div>
    </section>
@endsection
