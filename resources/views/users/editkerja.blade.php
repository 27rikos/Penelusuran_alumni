@extends('partials.dashboard')
@section('content')
<div class="card mb-5 mt-3  my-3 mx-3" >
    <div class="card my-3 mx-3"> 
       <div class="mx-3 my-3">
        <h4 class="mb-3">Edit Pekerjaan</h4>
        <form  method="POST" action="/edit/{{ $data->id }}">
            @method('put')
            @csrf
              <div class="mb-3 row">
                <label for="" class="col-sm-4 col-form-label fw-bold">PEKERJAAN</label >
                <div class="col-sm-8">
                  <input type="text" class="form-control border " name="pekerjaan" required value="{{ $data->pekerjaan }}">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="" class="col-sm-4 col-form-label fw-bold">TEMPAT KERJA</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control border " name="tempat_pekerjaan" required value="{{ $data->tempat_pekerjaan }}">
                </div>
              </div>
              <button class="btn  text-light mt-3" type="submit"  style="background-color: #0A6EBD">Simpan</button>
    
        </form>
       </div>
       </div>
    </div>

    
@endsection