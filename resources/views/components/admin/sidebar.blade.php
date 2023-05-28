        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-text mx-3">TRACK-DRIVER</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ (request()->is('/') || request()->is('dashboard')) ? 'active' : '' }}">
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
            
            <li class="nav-item {{ (request()->is('kendaraan*')) ? 'active' : '' }}">
                <a class="nav-link" href="/kendaraan">
                    <i class="fas fa-fw fa-list"></i>
                <span>Kendaraan</span></a>
            </li>

            <li class="nav-item {{ (request()->is('laporan*')) ? 'active' : '' }}">
                <a class="nav-link" href="/laporan/tracking">
                    <i class="fas fa-fw fa-list"></i>
                <span>Tracking</span></a>
            </li>

            <li class="nav-item {{ (request()->is('products*')) ? 'active' : '' }}">
                <a class="nav-link" href="/laporan">
                    <i class="fas fa-fw fa-list"></i>
                <span>Laporan</span></a>
            </li>
            
            @if (Auth::user()->roles[0]->id === 1)
            <!-- Menu khusus Admin -->
            <li class="nav-item {{ (request()->is('blog*post')) || (request()->is('blog*category')) ? 'active' : '' }}">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Users</span>
                </a>
                <div id="collapseUtilities" class="collapse {{ (request()->is('blog*post')) || (request()->is('blog*category')) ? 'show' : '' }}" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Blog features:</h6>
                        <a class="collapse-item {{ (request()->is('blog*post')) ? 'active' : '' }}" href="">Admin</a>
                        <a class="collapse-item {{ (request()->is('blog*category')) ? 'active' : '' }}" href="">Sopir</a>
                    </div>
                </div>
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
