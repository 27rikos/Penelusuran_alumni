@extends('partials.admin')

@section('content')

<div class="container-fluid  col-lg-8 mt-5">

    <div class="card">
      <div class="mx-3 my-3">
        <h4 class="mb-3">Tambah Video</h4>
    <form  method="POST" action="/video_control" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">JUDUL VIDEO</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border "  name="judul" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">FOTO</label>
            <div class="col-sm-8">
              <input type="file" class="form-control border " name="file" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">LINK</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="link" required>
            </div>
          </div>
          
          <button class="btn text-light mt-3" type="submit"  style="background-color: #0A6EBD">Simpan</button>

    </form>
      </div>
    </div>
   
</div>
@endsection