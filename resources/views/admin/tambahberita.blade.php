@extends('partials.admin')

@section('content')

<div class="container-fluid  col-lg-12 mt-3">
<div class="card alumni">
  <div class="mx-3 my-3">
    <h4 class="mb-3">Tambah Berita</h4>
    <form  method="POST" action="/berita" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">JUDUL BERITA</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="judul" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">FOTO</label>
            <div class="col-sm-8">
              <input type="file" class="form-control border " name="foto" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">PENULIS</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="penulis" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">ISI BERITA</label>
            <div class="col-sm-8">
              <input id="x" type="hidden" name="isi">
              <trix-editor input="x"></trix-editor>
            </div>
          </div>
          <div class=" row">
            <label for="" class="col-sm-4 col-form-label fw-bold">TANGGAL</label>
            <div class="col-sm-8">
              <input type="date" class="form-control border " name="tanggal" required>
            </div>
          </div>
          <button class="btn  text-light mt-3" type="submit"  style="background-color: #0A6EBD">Simpan</button>

    </form>
  </div>
</div>
   
</div>
@endsection