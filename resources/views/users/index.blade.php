<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/fb034efa9e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('user/landing_page.css') }}">
</head>

<body>
    <section class="head" id="head">
        <nav class="navbar navbar-expand-lg  navbar-dark  ">
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
        <div class="text">
            <div class="row">

                <div class="col-md-10"><div data-aos="fade-right"  data-aos-duration="1500">
                    <h1 class="shadows-light fw-bolder">
                         Portal penelusuran Alumni Universitas Methodist Indonesia <br>
                        Falkutas Ilmu Komputer</h1>
                        <br>
                        <a href="/login" type="button" class="btn btn-light fw-bold  btn-lg">Log In</a>
                    </div> </div>
            </div>
        
        </div>

    </section>
    <section class="gallery min-vh-100">
        <div class="container  py-5">
            <div class="row ">
                <div class="col text-center" data-aos="zoom-in">
                    <img src="{{ asset('img/logo.png') }}"  alt="logo UMI" id="logo">
                </div>
                <div class="col">
                    <p class="teks">Fakultas Ilmu Komputer (FIKOM) Universitas Methodist Indonesia (UMI),
                        merupakan
                        sebuah fakultas
                        yang secara berkesinambungan terus melakukan pengembangan kurikulum, fasilitas dan SDM untuk
                        mencapai visi menjadi Fakultas yang terbaik di Sumatera Utara yang unggul dalam bidang Software
                        Engineering, Networking, Geographic Information System (GIS), Web Base Programming, Database
                        Management System dan ICT. Fakultas Ilmu Komputer atau disingkat dengan FIKOM, diresmikan bulan
                        Agustus 2005 dengan 2 Program Studi yaitu Teknik Informatika (Strata-1), Sistem Informasi
                        (Strata-1). Untuk Prodi Teknik Informatika dan Sistem Informasi penerimaan perkuliahan mahasiswa
                        baru, dimulai pada bulan September 2005 setelah memiliki ijin operasional dari DIKTI No.
                        3096/D/T/2005. Sedangkan prodi Pendidikan Teknologi Informasi Penerimaan perkuliahan mahasiswa
                        baru, dimulai bulan Agustus 2018 setelah memiliki izin operasional dari DIKTI No.
                        701/KPT/I/2018.</p>
                </div>
            </div>
            <div class="row ">
                <div class="col">
                    <p class="teks">
                    <h5>Visi :</h5> <hr>
                    <ul>
                        <li><b>Fakultas Ilmu Komputer :</b> Menjadi Fakultas Profesional yang unggul dalam IPTEKS,
                            bidang Informatika dan Sistem Informasi, yang berkarakter di tingkat Global pada Tahun 2035
                        </li>
                        <li><b>Program Studi Teknik Informatika :</b> Menjadi Program Studi Professional yang unggul
                            dalam pengembangan Networking dan Sistem Cerdas</li>
                        <li><b>Program Studi Sistem Informasi :</b> Menjadi Program Studi professional yang unggul dalam
                            pengembangan Sistem Informasi Enterprise dan Basis Data Terapan</li>
                        <li><b>Program Studi Pendiikan Teknologi Informasi :</b> Menjadi Program Studi yang menghasilkan
                            Tenaga
                            Pendidik Professional Bidang Teknologi Informasi yang Unggul di Tingkat Nasional Tahun 2035
                        </li>
                    </ul>
                    </p>
                </div>
                <div class="col">
                    <p class="teks">
                    <h5>Misi :</h5> <hr>
                    <ol>
                        <li>Menyelenggarakan proses pendidikan yang akuntabel dan berkelanjutan</li>
                        <li>Mengembangkan kurikulum yang mengacu kepada KKNI sesuai dengan perkembangan teknologi dan
                            riset di bidang Informatika</li>
                        <li>Meningkatkan kontribusi dan kolaborasi dengan pemangku kepentingan dalam riset dan
                            Pengabdian Kepada Masyarakat (PKM) bidang Informatika</li>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="min-vh-100 py-5">
        <div class="container">
        <h3 class=" text-center text-primary">Kata Sambutan</h3>
        <h2 class="text-center ">Ketua Alumni FIKOM UMI</h2> <hr>
        <div class="row ">
            <div class="col text-center" data-aos="zoom-in">
                <img src="{{ asset('img/logo.png') }}"  alt="logo UMI" id="logo">
            </div>
            <div class="col">
                <p class="teks">
                    <strong>SHALOM</strong> Sahabat Alumni Fikom UMI yang diberkati Tuhan, <br>
                    Alumni Fakultas Ilmu Komputer Universitas Methodist Indonesia yang tangguh,hebat dan kuat.
                    Alumni yang perduli almamaternya   Kita patut mengucapkan syukur atas segala berkat yang Tuhan
                     sudah berikan kepada kita para tamatan Fakultas Ilmu Komputer Universitas Methodist Indonesia 
                     sehingga kita semua, hingga saat ini tetap bersatu dalam roh pelayanan, saling mendukung, 
                     saling menginspirasi dan saling memotivasi melalui organisasi perkumpulan yang kita cintai
                    bersama yaitu Ikatan Alumni Fakultas Ilmu Komputer Universitas Methodist Indonesia(INIFIKOM-UMI).<br>
                    Melalui INIFIKOM-UMI:
                   <div class="teks">
                    <ul>
                        <li>kita bisa memberikan kontribusi yang terbaik sesuai dengan kemampuan kita
                             masing-masing, untuk kebaikan dan kemajuan para alumni, almamater dan bangsa kita.</li>
                        <li>Wewujudkan bersama tercapainya <strong> VISI INIFIKOM-UMI</strong>,
                             yaitu menjadi sponsor dalam pengabdian pelayanan masyarakat.</li>
                        <li>Menjalankan <strong>Misi INIFIKOM-UMI</strong>, yaitu menjadi sebuah pusat organisasi yang dinamis, 
                            yang dikenal dan diakui dapat memberikan energi pada setiap ide-ide produktif, 
                            serta memaksimalkan setiap potensi nilai lebih para alumnusnya di mata Indonesia.</li>
                        <li>Semangat <strong> BERSATU, BERPRESTASI,</strong> dan <strong> BERKONTRIBUSI</strong> 
                            untuk Universitas Methodist Indonesia dan Indonesia</li>
                    </ul>
                   </div>
                </p>
                <p class="teks">
                    Apa yang kita sudah mulai akan terus kita tingkatkan berupa program-program yang 
                    benar menyentuh dan bermanfaat untuk kita alumni, dan juga almamater. Kita terus meningkatkan manajemen
                     yang baik untuk menjadikan wadah ini bekerja secara lebih professional dalam membagikan informasi, 
                     melaporkan setiap kegiatan yang dijalankan, melaporkan laporan keuangan secara transparan. 
                     Website yang sudah kita bangun diharapkan dapat meningkatkan awareness kita tentang apa yang dilakukan oleh INIFIKOM-UMI 
                    sehingga diharapkan para anggota merasakan manfaatnya dan bangga menjadi alumnus Fikom UMI. <br>
                    Dengan demikian kita akan <strong> terpacu, terdorong, terinspirasi untuk berbuat yang lebih</strong> untuk para sahabat alumni kita,
                    almamater kita, dan bangsa kita yang kita cintai Bersama.<br>
                    Tuhan memberkati kita sekalian. <br>
                    <div class="d-flex justify-content-end">
                    Salam, <br>
                    <br>
                    <br>
                    Ketua INIFIKOM-UMI
                    </div>
                </p>
            </div>
        </div>
        </div>
    </section>
    <section class="min-vh-100 py-5">
            <div class="container">
                <div class="d-flex">
                    <div class="p-2 w-100"><h4>Berita Terbaru</h4> </div>
                    <div class="p-1 flex-shrink-1"><a href="/view_berita" class="btn btn-outline-primary">Berita Terkait</a></div>
                  </div> <hr>
                <div class="row">
                    @forelse ($datas as $item)
                    <div class="col  d-flex justify-content-center">
                        <div class="card" style="width: 20rem; height:19rem">
                            <img src="{{asset('storage/image/'.$item->foto)}}" class="card-img-top object-fit-cover" alt="..." style="height: 150px;">
                            <div class="card-body">
                              <p class="text-secondary"><i class="fa-regular fa-calendar-days fa-sm me-3"></i>{{ $item->tanggal }}</p>
                              <a href="/view/{{ $item->id }}/berita" style="text-decoration:none">{{ $item->judul }}</a>
                              <p class="card-text">{{ Str::limit(Strip_tags($item['isi']), 30,".....") }}</p>
                            </div>
                          </div>
                    </div>
                    @empty
                    <div class="alert alert-info mt-5 text-center" role="alert">
                       Berita belum tersedia
                      </div>
                    @endforelse
                    
                </div>

               
            </div>
        </div>
    </section>
    <footer class="footer mt-3 text-light">
        <div class="container p-3">
            <div class="row">
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
                    <h5 class="media mb-3 ">FOLLOW US:</h5>
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
        &copy;2023 Copyright : <a href="#head" class="text-light">UNIVERSITAS METHODIST INDONESIA</a>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>



