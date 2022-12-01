@extends('layouts.main')
<!--merujuk ke main.blade.php-->
@section('container')
<a href="/home">
    <img src="img/back-button.png" alt="#" style="width:50px;margin-left:-6%"
        class="position-absolute btn btn-outline-primary mt-4">
</a>
<section class="profile-section p-4">
    <div class="container-img" style="width:50%;margin-top:10%">
        <img src="img/circleUser.png" alt="" draggable="false">
    </div>
    <div class="container-text flex-column justify-content-center border border-dark p-4 rounded-3" style="width:50%;">
        <h2 class="text-center fw-semibold">Profil</h2>
        <h5>Nomor Telepon</h4>
        <p>08223241123123</p>
        <h5>Nama Lengkap</h4>
        <p>Arundaon Imam Agung Nur Lazuardi</p>
        <h5>Alamat</h4>
        <p>Jalan-jalan</p>
        <h5>Jumlah Transaksi</h4>
        <p>2</p>
        <a class="btn btn-outline-primary" style="display:flex;width:max-content;height:40px" href="/updateProfil">
            <img src="img/updateBtn.svg" draggable="false" style="width:30px">
            <p style="font-size:16px;margin-top:5%" class="text-white">Update</p>
        </a>

    </div>
    <!-- </div> -->
</section>
@endsection