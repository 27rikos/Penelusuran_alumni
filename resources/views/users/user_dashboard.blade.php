@extends('partials.dashboard')
@section('content')

<div class="card shadow mb-5 mt-3  my-3 mx-3" >
    <div class="card mx-3 my-3"> 
       <div class="container">
        @forelse ($data as $item)
        <div class="row">
            <div class="col-lg-4 text-center mb-3 me-2 mt-5">
                <img src="{{ asset('storage/alumni_foto/'.$item->file) }}" alt="{{ asset('img/alt.png') }}" id="profile" style="width:250px;">
            </div>
            <div class="col">
            <table class="table table-stripped">
                <tr>
                    <th>NPM</th>
                    <td>:</td>
                    <td>{{ $item->npm }}</td>
                </tr>
                <tr>
                    <th>NAMA</th>
                      <td>:</td>
                    <td>{{ $item->nama }}</td>
                </tr>
                <tr>
                    <th>STAMBUK</th>
                      <td>:</td>
                    <td>{{ $item->stambuk }}</td>
                </tr>
                <tr>
                    <th>PEMINATAN</th>
                      <td>:</td>
                    <td>{{ $item->id_peminatan }}</td>
                </tr>
                <tr>
                    <th>PROGRAM STUDI</th>
                      <td>:</td>
                    <td>{{ $item->id_prodi }}</td>
                </tr>
                <tr>
                    <th>TAHUN LULUS</th>
                      <td>:</td>
                    <td>{{ $item->thn_lulus }}</td>
                </tr>
                <tr>
                    <th>TANGGAL SEMINAR PROPOSAL</th>
                      <td>:</td>
                    <td>{{ $item->sempro }}</td>
                </tr>
                <tr>
                    <th>TANGGAL SEMINAR HASIL</th>
                      <td>:</td>
                    <td>{{ $item->semhas }}</td>
                </tr>
                <tr>
                    <th>TANGGAL MEJA HIJAU</th>
                      <td>:</td>
                    <td>{{ $item->meja_hijau}}</td>
                </tr>
                <tr>
                    <th>TANGAL YUDISIUM</th>
                      <td>:</td>
                    <td>{{ $item->yudisium }}</td>
                </tr>
                <tr>
                  <th>JUDUL SKRIPSI</th>
                    <td>:</td>
                  <td>{{ $item->judul_skripsi }}</td>
              </tr>             
                <tr>
                  <th>PEKERJAAN</th>
                    <td>:</td>
                  <td>{{ $item->pekerjaan }}</td>
              </tr>             
                <tr>
                  <th>TEMPAT BEKERJA</th>
                    <td>:</td>
                  <td>{{ $item->tempat_pekerjaan }}</td>
              </tr>           
            </table>          
            </div>
        </div>
       <div class="d-flex justify-content-end">
        <a href="edit/{{ $item->id }}/data" class="btn btn-primary my-2 mx-1 ">Update Pekerjaan</a>
        </div> 
        @empty
        <div class="alert alert-info mt-3" role="alert">
            Data anda belum anda daftar/input/Approve oleh <strong>Admin UMI</strong>
          </div>
        @endforelse
       </div>
       
    </div> 
</div>
    
@endsection