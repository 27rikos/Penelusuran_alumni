@extends('partials.dashboard')

@section('content')

<div class="container-fluid  col-lg-8 mt-5">
<div class="card alumni ">
  <div class="card mx-3 my-3">
    <div class=" mx-3 my-3">
        <h4 class="mb-3">Bagikan Lowongan Kerja</h4>
    <form  method="POST" action="/lowongan_kerja" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">PENGIRIM</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="pengirim" required>
            </div>
          </div><div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">NO HP</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="hp" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">EMAIL</label>
            <div class="col-sm-8">
              <input type="email" class="form-control border " name="email" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">FILE</label>
            <div class="col-sm-8">
              <input type="file" class="form-control border " name="file" required>
            </div>
          </div>
          <button class="btn  text-light mt-3" type="submit"  style="background-color: #0A6EBD">Simpan</button>

    </form>
    </div>
  </div>
</div>
   
</div>
@endsection