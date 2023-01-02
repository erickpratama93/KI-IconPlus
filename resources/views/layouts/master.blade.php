<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <!-- Favicon--> 
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/LandingPage/css/styles.css" rel="stylesheet" />
    </head>
    <body> 
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Kunjungan Industri</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href={{route('homepage')}}>Home</a>
                    {{-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Info Lowongan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a> --}}
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href={{route('event')}}>Events</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href={{route('profil')}}>Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href={{route('vanancy')}}>Lowongan</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
        
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            @yield('content')
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/LandingPage/js/scripts.js"></script>
</body>

</html>