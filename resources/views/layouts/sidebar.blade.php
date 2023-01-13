<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion position-relative" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href={{route('homepage')}}>
        <div class="sidebar-brand-icon">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            KI-APP
        </div>
        <div class="sidebar-brand-text mx-3">Kelas Industri</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href={{route('homepage')}}>
            <i class="fas fa-fw fa-newspaper"></i>
            <span>News</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Information
    </div>

    <!-- Nav Item - Guru Tamu -->
    <li class="nav-item">
        <a class="nav-link" href={{route('guruTamu')}}>
        <i class="fas fa-fw fa-graduation-cap"></i>
            <span>Guru Tamu</span></a>
    </li>

    <!-- Nav Item - Lowongan -->
    <li class="nav-item">
        <a class="nav-link" href={{route('lowongan')}}>
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Lowongan</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>PKL</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href={{route('info')}}>Info</a>
                <a class="collapse-item" href={{route('daftar')}}>Daftar</a>
                <a class="collapse-item" href={{route('info')}}>Status pendaftaran</a>

            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>