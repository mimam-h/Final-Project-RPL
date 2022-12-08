<div class="wrapper">
    <aside class="sidebar">
        <menu>
            <ul class="menu-content">
                <li><a href="/dashboard/transaksi/create"><i class="fa fa-plus-square"></i> <span>Entri Laundry</span></a>
                </li>
                <li><a href="/dashboard/transaksi"><span
                            class="glyphicon glyphicon-th-list {{ Request::is('dashboard/transaksi*') ? 'active' : '' }}"></span>
                        <span>Daftar Laundry</span></a></li>
                <li><a href="/dashboard/diproses"><span class="glyphicon glyphicon-time"></span> <span>Diproses</span></a></li>
                <li><a href="/dashboard/selesai"> <span class="glyphicon glyphicon-ok-circle"></span> <span>Selesai</span></a></li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit"></span> <span>Logout</span></button>
                    </form>
                </li>
            </ul>
        </menu>
    </aside>
</div>
