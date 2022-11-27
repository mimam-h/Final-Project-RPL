@extends('layouts.main')

@section('container')
    <section class="hero">
        <img src="img/default-section1.png" alt="">
        <div class="col-md-6">
            <figure class="text-justify mt-5 mb-3 position-relative lh-base">
                <h1 class="display-6 fw-semibold">Dewi Laundry</h1>
                <blockquote class="blockquote">
                    <p>Dewi Laundry Web App adalah sebuah aplikasi yang menyediakan layanan jasa laundry pada Dewi Laundry,
                        yang merupakan jasa laundry di Kota Malang. Pada aplikasi ini, anda akan menemukan kemudahan dalam
                        melakukan cek estimasi tarif, hingga tracking transaksi laundry anda. Jadi, tunggu apa lagi, gunakan
                        jasa kami dan maksimalkan waktu yang anda punya ^.^</p>
                </blockquote>
            </figure>
        </div>
    </section>
    <section class="cekEstimasi-section mt-0">
        <div class="header-img p-4 d-flex flex-column justify-content-center text-white lh-base" style="">
            <div class="container-cekEstimasi">
                <h1 class="display-6 mt-5 mb-4" id="typography" style="font-weight: 500;">Cek Tarif Laundry Kamu Sekarang!
                </h1>
                <p>
                    Fitur ini akan memudahkan anda untuk dapat mengetahui berapa estimasi biaya yang perlu anda keluarkan
                    untuk memesan jasa Dewi Laundry
                </p>
                <a type="button" class="btn text-white" href="/estimasi">Selengkapnya</a>
            </div>
        </div>
    </section>
    <section class="benefit-section">
        <div class="p-4 d-inline-flex flex-column justify-content-center">
            <div class="container-benefit position-absolute start-50 mt-0 lh-lg">
                <h3 class="mt-4 mb-3 text-center" id="typography" style="font-weight: 600;">Benefit Menggunakan Dewi Laundry
                    Web App</h1>
                    <ol class="text-justify text-wrap">
                        <li class="mb-3">Kemudahan mengetahui estimasi biaya laundry anda melalui fitur Cek Estimasi</li>
                        <li class="mb-3">Kemudahan melakukan tracking cucian anda melalui fitur Halaman Transaksi</li>
                        <li class="mb-3">Kemudahan mengetahui selesainya cucian anda dengan notifikasi WhatsApp </li>
                    </ol>
            </div>
        </div>
    </section>
@endsection
