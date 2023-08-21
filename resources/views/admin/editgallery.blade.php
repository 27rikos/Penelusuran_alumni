@extends('partials.admin')

@section('content')

<div class="container-fluid  col-lg-8 mt-5">
<div class="card alumni">
  <div class="mx-3 my-3">
    <h4 class="mb-3">Edit Foto</h4>
    <form  method="POST" action="/gallery/{{ $foto->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">KETERANGAN</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="keterangan" required value="{{ $foto->keterangan }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">FOTO</label>
            <div class="col-sm-8">
              <input type="file" class="form-control border " name="foto">

              <img src="{{ asset('storage/gallery/'.$foto->foto) }}" alt="" style="width:150px">
            </div>
          </div>
          <button class="btn  text-light mt-3" type="submit"  style="background-color: #0A6EBD">Simpan</button>

    </form>
  </div>
</div>
   
</div>
@endsection