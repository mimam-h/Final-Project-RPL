<nav class="navbar position-sticky top-0 navbar-expand-md navbar-dark" style="background-color: #5DA7DB;">
    <div class="container">
        <a class="navbar-brand d-flex flex-grid justify-content-center align-content-center gap-2" href="#">
            <h6 class="my-auto text-center">Dewi Laundry</h6>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto gap-1" style="text-align:right">
                <li class="nav-item">
                    @auth
                    <a class="nav-link {{ $title === 'Home' || $title === 'Beranda' ? 'active' : '' }}"
                        href="/home">Beranda</a>
                    @else
                    <a class="nav-link {{ $title === 'Home' || $title === 'Beranda' ? 'active' : '' }}"
                        href="/">Beranda</a>
                    @endauth
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Cek Estimasi' ? 'active' : '' }}" href=" /estimasi">Cek
                        Estimasi</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="img/dropdown-btn.svg" alt="" style="filter: invert(90%);width:20px">
                        </a>
                        <ul class="dropdown-menu mt-2 ml-0">
                            <li><a class="dropdown-item" href="/profil"><i
                                        class="bi bi-layout-text-window-reverse"></i>Profil</a>
                            </li>
                            <li><a class="dropdown-item" href="/transaksi"><i
                                        class="bi bi-layout-text-window-reverse"></i>Transaksi</a>
                            </li>
                            <li><a class="dropdown-item" href="/riwayat"><i
                                        class="bi bi-layout-text-window-reverse"></i>Riwayat</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i
                                            class="bi bi-box-arrow-right"></i>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item">
                    <a class="nav-link {{($title==="Transaksi")? 'active': ''}}"" href="/transaksiAktif">Transaksi</a>
                  </li>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                    <li><a class="dropdown-item" href="/profil">Profil</a></li>
                    <li><a class="dropdown-item" href="/riwayat">Riwayat</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/">Logout</a></li>
                  </ul> --}}
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Masuk' ? 'active' : '' }}" href=" /login">Masuk</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
