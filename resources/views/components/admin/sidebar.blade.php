        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-text mx-3">TRACK-DRIVER</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('/') || request()->is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-desktop"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tracking Master
            </div>

            @if (Auth::user()->roles[0]->id === 1)
                <li class="nav-item {{ request()->is('kendaraan*') ? 'active' : '' }}">
                    <a class="nav-link" href="/kendaraan">
                        <i class="fas fa-fw fa-truck"></i>
                        <span>Kendaraan</span></a>
                </li>

                <li class="nav-item {{ request()->is('paket*') ? 'active' : '' }}">
                    <a class="nav-link" href="/paket">
                        <i class="fas fa-fw fa-gift"></i>
                        <span>Paket</span></a>
                </li>

                <li class="nav-item {{ request()->is('users*sopir') ? 'active' : '' }}">
                    <a class="nav-link" href="/users/sopir">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Sopir</span></a>
                </li>


                <li class="nav-item {{ request()->is('checkpoint') ? 'active' : '' }}">
                    <a class="nav-link" href="/checkpoint">
                        <i class="fas fa-fw fa-map"></i>
                        <span>Checkpoint</span></a>
                </li>

                <li class="nav-item {{ request()->is('pengiriman') ? 'active' : '' }}">
                    <a class="nav-link" href="/pengiriman">
                        <i class="fas fa-fw fa-map"></i>
                        <span>Pengiriman</span></a>
                </li>
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item {{ request()->is('blog*post') || request()->is('blog*category') ? 'active' : '' }}">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-book"></i>
                        <span>Laporan</span>
                    </a>
                    <div id="collapseUtilities"
                        class="collapse {{ request()->is('laporan*') ? 'show' : '' }}"
                        aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">List Laporan:</h6>
                            <a class="collapse-item {{ request()->is('laporan*sopir') ? 'active' : '' }}"
                                href="{{ route('laporan.sopir') }}">Laporan Sopir</a>
                            <a class="collapse-item {{ request()->is('laporan*paket') ? 'active' : '' }}"
                                href="{{ route('laporan.paket') }}">Laporan Paket</a>
                            <a class="collapse-item {{ request()->is('laporan*tracking') ? 'active' : '' }}"
                                href="{{ route('laporan.tracking') }}">Laporan Tracking</a>
                        </div>
                    </div>
                </li>
            @else
                <li class="nav-item {{ request()->is('tracking') ? 'active' : '' }}">
                    <a class="nav-link" href="supir/tracking">
                        <i class="fas fa-fw fa-map"></i>
                        <span>Checkpoint</span></a>
                </li>
            @endif




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
