@extends('partials.admin')

@section('content')
<div class="container-fluid  col-lg-12 mt-3">
<div class="card alumni">
  <div class="mx-3 my-3">
    <h4 class="mb-3">Edit Berita</h4>
    <form  method="POST" action="/berita/{{ $berita->id }}" enctype="multipart/form-data">
      @method('put')
        @csrf
        <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">JUDUL BERITA</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="judul" required value="{{ $berita->judul }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">FOTO</label>
            <div class="col-sm-8">
              <input type="file" class="form-control border " name="foto">

              <img src="{{asset('storage/image/'.$berita->foto)}}" alt="" srcset="" style=" width:200px">
            </div>

          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">PENULIS</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="penulis" required value="{{ $berita->penulis }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">ISI BERITA</label>
            <div class="col-sm-8">
              <input id="x" type="hidden" name="isi" value="{{ $berita->isi }}">
              <trix-editor input="x"></trix-editor>
            </div>
          </div>
          <div class=" row">
            <label for="" class="col-sm-4 col-form-label fw-bold">TANGAL</label>
            <div class="col-sm-8">
              <input type="date" class="form-control border " name="tanggal" required value="{{ $berita->tanggal }}">
            </div>
          </div>
          <button class="btn  text-light mt-3" type="submit"  style="background-color: #0A6EBD">Simpan</button>
          
    </form>
  </div>
</div>
   
</div>
@endsection