<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pencarian Alumni</title>
    <script src="https://kit.fontawesome.com/fb034efa9e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('user/pencarian.css') }}">
</head>
<body>
    <section class="min-vh-100">
        <nav class="navbar navbar-expand-lg  navbar-light  ">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="../img/logo.png" class="logo" srcset=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link active " href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/pencarian">Pencarian</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link active" href="#"data-bs-toggle="dropdown" aria-expanded="false">Gallery</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="/view_gallery">Foto</a></li>
                                  <li><a class="dropdown-item" href="/video">Video</a></li>
                                </ul>
                              </div>
                           
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/tampil_kerja">Lowongan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Pencarian</li>
                </ol>
              </nav>
        </div>
        <div class="cari container text-center">
            

            <div class="alert alert-primary" role="alert">
                Silahkan Masukkan <strong>Nama/NPM/Stambuk</strong> Sebagai Kata Kunci
              </div>
            <form class="d-flex" role="search" method="GET" action="/pencarian/data" >
                <input class="form-control me-2"name="cari" type="search" placeholder="Cari alumni" aria-label="Search" value="{{ request('cari') }}">
                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
              </form>



            </div>
            <div id="tampil" class="container mt-5 mb-4 ">
               <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                @forelse ($datas as $item)
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <div class="card mb-3 text-center shadow" style="width: 18rem;height:30rem">
                                <div class="card-header">
                                   <h6 class="mt-2"> {{ $item->npm }}</h6>
                                   <p><small>{{ $item->stambuk }}</small></p>
                                </div>
                                <div class="card-body">
                                 <img src="{{ asset('storage/alumni_foto/'.$item->file) }}" alt=".." id="profile" class="rounded-circle" style="width:200px;height:200px">
                                <div class="mt-3">
                                    <h5> {{ $item->nama }}</h5>
                                    <p>{{ $item->pekerjaan }}</p>
                                    <div class="card-footer">
                                        <small>
                                            {{ $item->id_prodi }} <br>
                                            {{ $item->id_peminatan }}
                                        </small>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                <div class="alert alert-info mt-5 text-center" role="alert">
                    Data Belum Tersedia
                   </div>
                @endforelse
                {{ $datas->links() }}
               </div>
            </div>
           
    </section>
    <footer class="footer mt-3 text-light">
        <div class="container p-3">
            <div class="row ">
                <div class="col">
                    <h5>CONTACT:</h5>
                    <ul>
                    <i class="fa-solid fa-location-dot fa-lg"></i>
                        <li class="i text-light mb-2"> Jl. Hang Tuah No. 8 Madras Hulu, Kecamatan Medan Polonia, Kota
                            Medan, Sumatra Utara</li>
                        <i class="fa-solid fa-envelope fa-xl  mt-2"></i>
                        <li class="i text-light">www.methodist.ac.id</li>
                    </ul>
                </div>
                <div class="col ms-2">
                    <h5 class="media mb-3">FOLLOW US:</h5>
                    <ul class="d-flex">
                        <li class="icons me-3"> <a href="https://www.facebook.com/fikom.univmethodist?mibextid=ZbWKwL"><i class="fa-brands fa-facebook fa-2xl"style="color: #f7f7f7;" ></i></a>
                        </li>
                        <li class="icons me-3"> <a href="#"><i class="fa-brands fa-telegram fa-2xl" style="color: #f7f7f7;"></i></a>
                        </li>
                        <li class="icons me-3"> <a href="https://instagram.com/prodi_si_fikom_umi?igshid=MjEwN2IyYWYwYw=="><i class="fa-brands fa-instagram fa-2xl" style="color: #f7f7f7;"></i></a>
                        </li>
                        <li class="icons"> <a href="https://www.youtube.com/@fikomumi5881/about"><i class="fa-brands fa-youtube fa-2xl" style="color: #f7f7f7;"></i></a>
                        </li>
                    </ul>
                </div>
               
            </div>
        </div>
      <div class="text-center p-3 ">
        &copy;2023 Copyright : <a href="/" class="text-light">UNIVERSITAS METHODIST INDONESIA</a>
      </div>
    </footer>
    <script src="../js/pencarian.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>


</html>



