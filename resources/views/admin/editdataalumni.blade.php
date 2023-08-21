@extends('partials.admin')

@section('content')

<div class="container-fluid  col-lg-12 mt-3">
<div class="card alumni">
  <div class="mx-3 my-3">
    <h4 class="mb-3">Edit Data Alumni</h4>
    <form  method="POST" action="/alumni/{{ $alumni->id }}" enctype="multipart/form-data">
      @method('put')
        @csrf
        <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">NPM</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="npm" required value="{{ $alumni->npm }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">NAMA</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="nama" required value="{{ $alumni->nama }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">STAMBUK</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="stambuk" required value="{{ $alumni->stambuk }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">PEMINATAN</label>
            <div class="col-sm-8">
              <select name="id_peminatan" class="form-control border " required>
                <option value="{{ $alumni->id_peminatan }}">{{ $alumni->id_peminatan }}</option>
                @foreach ($peminatans as $item)
                
                <option value="{{ $item->peminatan }}">{{ $item->peminatan }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">PROGRAM STUDI</label>
            <div class="col-sm-8">
              <select name="id_prodi" class="form-control border " required>
                <option value="{{ $alumni->id_prodi }}">{{ $alumni->id_prodi }}</option>
                @foreach ($prodis as $item)
                
                <option value="{{ $item->prodi }}">{{ $item->prodi }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">TAHUN LULUS</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="thn_lulus" required value="{{ $alumni->thn_lulus }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">TANGGAL SEMPRO</label>
            <div class="col-sm-8">
              <input type="date" class="form-control border " name="sempro" required value="{{ $alumni->sempro }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">TANGGAL SEMHAS</label>
            <div class="col-sm-8">
              <input type="date" class="form-control border " name="semhas" required value="{{ $alumni->semhas }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">TANGGAL MEJA HIJAU</label>
            <div class="col-sm-8">
              <input type="date" class="form-control border " name="meja_hijau" required value="{{ $alumni->meja_hijau }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">TANGGAL YUDISIUM</label>
            <div class="col-sm-8">
              <input type="date" class="form-control border " name="yudisium" required value="{{ $alumni->yudisium }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">JUDUL SKRIPSI</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="judul_skripsi" required value="{{ $alumni->judul_skripsi }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">PEKERJAAN</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="pekerjaan" required value="{{ $alumni->pekerjaan }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">TEMPAT KERJA</label>
            <div class="col-sm-8">
              <input type="text" class="form-control border " name="tempat_pekerjaan" required value="{{ $alumni->tempat_pekerjaan }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label fw-bold">FOTO</label>
            <div class="col-sm-8">
              <input type="file" class="form-control border " name="file" >

              <img src="{{ asset('storage/alumni_foto/'.$alumni->file) }}" class="my-3" style="width:100px">
            </div>
          </div>
          <button class="btn  text-light mt-3" type="submit"  style="background-color: #0A6EBD">Simpan</button>

    </form>
  </div>
</div>
   
</div>
@endsection