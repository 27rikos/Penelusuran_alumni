@extends('partials.admin')

@section('content')

<div class="container-fluid  col-lg-8 mt-5">

    <div class="card">
    <div class="mx-3 my-3">
      <h4 class="mb-3">Edit Program Studi</h4>
    <form  method="POST" action="/prodi/{{ $prodi->id }}">
        @method('put')
        @csrf
        <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">Kode Program Studi</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border "  name="kd_prodi" required value="{{ $prodi->kd_prodi }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">Program Studi</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="prodi" required value="{{ $prodi->prodi }}">
            </div>
          </div>
          
          <button class="btn text-light mt-3" type="submit" style="background-color: #0A6EBD">Simpan</button>

    </form>
   
    </div>
    </div>
</div>
@endsection