<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/fb034efa9e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('user/dasboard.css') }}">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="menu" id="sidebar-wrapper" style="background-color: #2C3333">
            <div class="sidebar-heading text-center mt-3 fw-bold fs-5 bold text-white">USER MENU
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="/home" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-person-vcard-fill me-2 fa-lg"></i>Data Alumni <hr></a>
                <a href="/daftar" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-mortarboard  me-2 fa-lg"></i> Daftar <hr></a>
                <a href="/lowongan_kerja" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-person-lines-fill  me-2 fa-lg"></i>Lowongan Kerja <hr></a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <div id="app">
                <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #0A6EBD">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center">
                           
                            <span class="navbar-toggler-icon" id="menu-toggle"></span>
                           
                        </div>
        
                        <div>
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
        
                            </ul>
        
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
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
                                            {{ Auth::user()->npm }}
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
                            </ul>
                        </div>
                    </div>
                </nav>
        
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>

    </div>
    <script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
    </script>
    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>