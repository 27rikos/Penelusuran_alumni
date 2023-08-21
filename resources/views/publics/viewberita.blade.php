<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berita</title>
    <script src="https://kit.fontawesome.com/fb034efa9e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('berita.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top " style="background-color: #0A6EBD">
        <div class="container">
            <a class="navbar-brand" href="/"></a>
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
    <section class="min-vh-100">
    <div class="container mt-4">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/view_berita">Berita</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $data->judul }}</li>
            </ol>
          </nav>
          <h1 class="mb-2">{{ $data->judul }}</h1>
          <p class="text-secondary"> <small>{{ $data->tanggal }}</small> /
        <small>{{ $data->penulis }}</small>
        </p>
           <div class="text-center">
            <img src="{{asset('storage/image/'.$data->foto)}}" alt="Dokumentasi" id="view">
           </div>
          <article style="text-align: justify" class="mt-3 mb-3"> {!! $data->isi !!}</article>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


