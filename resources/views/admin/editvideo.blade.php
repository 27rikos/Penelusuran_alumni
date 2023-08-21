@extends('partials.admin')

@section('content')

<div class="container-fluid  col-lg-8 mt-5">

    <div class="card">
      <div class="mx-3 my-3">
        <h4 class="mb-3">Edit Video</h4>
    <form  method="POST" action="/video_control/{{ $data->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">JUDUL VIDEO</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border "  name="judul" required value="{{ $data->judul }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">FOTO</label>
            <div class="col-sm-8">
              <input type="file" class="form-control border " name="file">
              <img src="{{ asset('storage/video_foto/'.$data->file) }}" class="my-3" style="width:100px">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">LINK</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="link" required value="{{ $data->link }}">
            </div>
          </div>
          
          <button class="btn text-light mt-3" type="submit"  style="background-color: #0A6EBD">Simpan</button>

    </form>
      </div>
    </div>
   
</div>
@endsection