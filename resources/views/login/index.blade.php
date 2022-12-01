@extends('layouts.main')

@section('container')
    <a href="/">
        <img src="img/back-button.png" alt="" style="width:50px;margin-left:-6%"
            class="position-absolute btn btn-outline-primary mt-4">
    </a>
    <div class="row justify-content-center">
        <div class="col-lg-5 text-center">
            @if (session()->has('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
        </div>
    </div>
    <section class="login-section p-4">
        <div class="container-rataKanan p-4 lh-lg">
            <form action="/login" method="POST" class="border border-dark p-4 rounded-3 position-relative start-50 end-50" style="margin-left:-10%">
                @csrf
                <h2 class="fw-semibold text-center mb-4">Login</h2>
                <div class="mb-1">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomorTelepon" aria-describedby="emailHelp" autofocus required>
                    @error('nomor_telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" aria-describedby="passwordHelpBlock" required>
                    @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </div>
                <div class="text-center">
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </div>
                <div class="register text-center">
                    <p class="mt-4">Belum punya akun? <a type="button" class="text-primary" href="/register"
                            alt="Register">Daftar!</a></p>
                </div>
            </form>
        </div>
    </section>
@endsection
