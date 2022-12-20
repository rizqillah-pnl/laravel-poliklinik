<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-center">
                <div class="logo">
                    <a href="{{ url('') }}/dashboard"><img src="assets/images/logo/logo.png" alt="Logo"
                            srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ url('') }}/dashboard" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub {{ Request::is('pasien', 'rekam') ? 'active' : '' }}">
                    <a href="" class='sidebar-link'>
                        <i class="iconly-boldProfile"></i>
                        <span>Pasien</span>
                    </a>
                    <ul class="submenu {{ Request::is('pasien', 'rekam') ? 'd-block' : '' }}">
                        @if (!in_array(auth()->user()->id_status, [2, 3]))
                            <li class="submenu-item">
                                <a href="{{ url('') }}/pasien"
                                    class="{{ Request::is('pasien') ? 'fw-bold text-warning' : '' }}">Data Pasien</a>
                            </li>
                        @endif
                        <li class="submenu-item">
                            <a href="{{ url('') }}/rekam"
                                class="{{ Request::is('rekam') ? 'fw-bold text-warning' : '' }}">Rekam
                                Medis</a>
                        </li>

                    </ul>
                </li>

                @if (!in_array(auth()->user()->id_status, [2, 3]))
                    <li class="sidebar-item has-sub {{ Request::is('obat', 'tambahobat') ? 'active' : '' }}">
                        <a href="#" class='sidebar-link'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-capsule" viewBox="0 0 16 16">
                                <path
                                    d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429l4.243 4.242Z" />
                            </svg>
                            <span>Obat</span>
                        </a>
                        <ul class="submenu {{ Request::is('obat', 'tambahobat') ? 'd-block' : '' }}">
                            <li class="submenu-item">
                                <a href="{{ url('') }}/obat"
                                    class="{{ Request::is('obat') ? 'fw-bold text-warning' : '' }}">Data
                                    Obat</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ url('') }}/tambahobat"
                                    class="{{ Request::is('tambahobat') ? 'fw-bold text-warning' : '' }}">Tambah
                                    Obat</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item has-sub {{ Request::is('lappasien', 'lapobat') ? 'active' : '' }}">
                        <a href="#" class='sidebar-link'>
                            <svg class="bi" width="1em" height="1em" fill="currentColor">
                                <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#clipboard-data" />
                            </svg>
                            <span>Report</span>
                        </a>
                        <ul class="submenu {{ Request::is('lappasien', 'lapobat') ? 'd-block' : '' }}">
                            <li class="submenu-item">
                                <a href="{{ url('') }}/lappasien"
                                    class="{{ Request::is('lappasien') ? 'fw-bold text-warning' : '' }}">Laporan
                                    Pasien</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ url('') }}/lapobat"
                                    class="{{ Request::is('lapobat') ? 'fw-bold text-warning' : '' }}">Laporan Obat</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item {{ Request::is('user') ? 'active' : '' }}">
                        <a href="{{ url('') }}/user" class='sidebar-link'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path
                                    d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                            </svg>
                            <span>User</span>
                        </a>
                    </li>
                @endif


                <li class="sidebar-item">
                    <form action="{{ url('') }}/logout" method="post">
                        @csrf
                        <button type="submit" class='sidebar-link btn btn-link border-0 text-start'
                            style="width: 100%">
                            <i class="bi bi-power"></i>
                            <span>Log Out</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
