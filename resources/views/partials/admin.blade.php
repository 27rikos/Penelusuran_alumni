<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <script src="https://kit.fontawesome.com/fb034efa9e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('admincss/admin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admincss/trix.css') }}">
  <script type="text/javascript" src="{{ asset('trix.js') }}"></script>
  <style>
    trix-toolbar [data-trix-button-group="file-tools"]{
  display: none;
}
</style>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>



</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="bg" id="sidebar-wrapper" style="background-color: #2C3333">
            <div class="sidebar-heading text-center mt-3 fw-bold fs-5 bold text-white">ADMIN MENU <hr>
            </div>
            <div class="list-group list-group-flush ">
        <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-speedometer2 fa-lg me-2"></i>Dashboard</a>
            <a href="/main" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-people-fill fa-lg me-2"></i>Kelola User</a>
        <a href="/alumni" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-mortarboard fa-lg me-2"></i>Data Alumni</a>
        <a href="/prodi" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-book-fill fa-lg me-2"></i>Program
            Studi</a>
        <a href="/peminatan" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-bookmark-fill fa-lg me-2"></i>Peminatan</a>
        <a href="/berita" class="list-group-item list-group-item-action bg-transparent second-text active">
            <i class="bi bi-newspaper fa-lg me-2"></i>Berita</a>
        <a href="/lowongan" class="list-group-item list-group-item-action bg-transparent second-text active">
            <i class="bi bi-person-lines-fill me-2 fa-lg"></i>Lowongan Kerja</a>
        <a href="/gallery" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-images me-2 fa-lg"></i>Galeri</a>
        <a href="/video_control" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-camera-reels-fill me-2 fa-lg"></i>Video</a>
                
               
            </div>
        </div>
        <div id="page-content-wrapper" class="content">
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
            </div>
            @yield('content')
           
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