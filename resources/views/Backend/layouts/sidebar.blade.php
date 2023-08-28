<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{!! asset('backend/img/logo/logo2.png') !!}">
        </div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        DATA
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fa-solid fa-layer-group"></i></i>
            <span>Master Data</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/pengguna">Data Pengguna</a>
                <a class="collapse-item" href="/getDataPengguna">Data Pelanggan</a>
                <a class="collapse-item" href="/stylist">Data Hair Stylist</a>
                <a class="collapse-item" href="/layanan">Data Layanan</a>
                <a class="collapse-item" href="/treatment">Data Treatment</a>
                <a class="collapse-item" href="/course">Data Course</a>
                <a class="collapse-item" href="/angkatan">Data Angkatan</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/bookingcut">
            <i class="fa-solid fa-file-lines"></i>
            <span>Data Booking Hair Cut</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="/data_academy">
            <i class="fa-solid fa-file-lines"></i>
            <span>Data Booking Academy</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Transaksi
    </div>
    <li class="nav-item">
        <a class="nav-link" href="/pendapatan">
            <i class="fa-regular fa-folder"></i>
            <span>Data Pembayaran</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Laporan
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
            <i class="fa-regular fa-folder"></i>
            <span>Laporan</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Example Pages</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fa-regular fa-folder"></i>
            <span>Laporan Pemasukkan</span>
        </a>
    </li>

</ul>
