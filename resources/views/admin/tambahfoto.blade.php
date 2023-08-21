@extends('partials.admin')

@section('content')

<div class="container-fluid  col-lg-8 mt-5">
<div class="card alumni">
  <div class="mx-3 my-3">
    <h4 class="mb-3">Tambah Foto</h4>
    <form  method="POST" action="/gallery" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">KETERANGAN</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="keterangan" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">FOTO</label>
            <div class="col-sm-8">
              <input type="file" class="form-control border " name="foto" required>
            </div>
          </div>
          <button class="btn  text-light mt-3" type="submit"  style="background-color: #0A6EBD">Simpan</button>

    </form>
  </div>
</div>
   
</div>
@endsection