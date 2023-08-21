@extends('partials.admin')
@section('content')
<div id="page-content-wrapper">
    
</div>
<div class="container-fluid px-4">
    <div class="row g-3 my-2 ">
        <div class="col-md-3 ">
            <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded text-light" style="background-color:#068FFF">
                <div>
                    <h3 class="fs-2">{{ $alumnis }}</h3>
                    <p class="fs-5">Data Alumni</p>
                </div>
                <i class="bi bi-mortarboard fs-1 primary-text  p-3"></i>
    
            </div>
        </div>
    
        <div class="col-md-3">
            <div class="p-3 text-white shadow-sm d-flex justify-content-around align-items-center rounded" style="background-color: #F24C3D">
                <div>
                    <h3 class="fs-2">{{ $beritas }}</h3>
                    <p class="fs-5">Jumlah Berita</p>
                </div>
                <i class="bi bi-newspaper fs-1 primary-text p-3"></i>
            </div>
        </div>
    
        <div class="col-md-3">
            <div class="p-3 text-white shadow-sm d-flex justify-content-around align-items-center rounded" style="background-color: #22A699">
                <div>
                    <h3 class="fs-2">{{ $lowongans }}</h3>
                    <p class="fs-5">Lowongan </p>
                </div>
                <i class="bi bi-person-lines-fill fs-1 primary-text p-3"></i>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 text-white shadow-sm d-flex justify-content-around align-items-center rounded" style="background-color: #F29727">
                <div>
                    <h3 class="fs-2">{{ $foto }}</h3>
                    <p class="fs-5">Jumlah Foto </p>
                </div>
                <i class="bi bi-images fs-1 primary-text p-3"></i>
            </div>
        </div>
    </div>

   

</div>






    
@endsection