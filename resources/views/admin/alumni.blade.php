@extends('partials.admin')
@section('content')


<div class="container-fluid px-4 col-lg-12">
    <h2 class="fs-2 m-0 my-3 text-secondary">Alumni</h2>
        <hr>
    <div class="row  mb-3">
        <div class="col">
             <a href="alumni/create" class="btn text-light" style="background-color: #0A6EBD">Tambah Data Alumni</a>
        </div>
    </div>
    
    <div class="card">
    <div class="mx-2 my-2">
        <table class="table table-stripped " id="data" class="display "  style="width:100%" >
            <thead>
            <tr>
             <th>NPM</th>
             <th>NAMA</th>
             <th>STAMBUK</th>
             <th>STATUS</th>
             <th>AKSI</th>
             </tr>
            </thead>
            <tbody>
             @foreach ($Alumnis as $alumni)
             <tr>
                 <td>{{ $alumni->npm }}</td>
                 <td>{{ $alumni->nama }}</td>
                 <td>{{ $alumni->stambuk }}</td>
                 <td><label class=" {{($alumni->status==1)?'bg-success':'bg-danger'}}  p-1  fs-6 rounded text-light">{{($alumni->status==1)?'Approved':'Pending'}}</label></td>
                 <td class="d-flex justify-content-center">
                    <button type="button" class="btn btn-info me-2" data-bs-toggle="modal" data-bs-target="#detail{{ $alumni->id }}">
                      <i class="bi bi-eye fa-lg" style="color:#F0F0F0"></i>
                      </button>
                     <!-- Detail Data -->
                            <div class="modal fade" id="detail{{ $alumni->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data Alumni</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row-lg-12">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col mb-3 text-center me-2 mt-5">
                                                    <img src="{{ asset('storage/alumni_foto/'.$alumni->file) }}" alt=".." id="profile" style="width:250px;">
                                                </div>
                                                <div class="col ">
                                                <table class="table table-stripped">
                                                    <tr>
                                                        <th>NPM</th>
                                                        <td>:</td>
                                                        <td>{{ $alumni->npm }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>NAMA</th>
                                                          <td>:</td>
                                                        <td>{{ $alumni->nama }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>STAMBUK</th>
                                                          <td>:</td>
                                                        <td>{{ $alumni->stambuk }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>PEMINATAN</th>
                                                          <td>:</td>
                                                        <td>{{ $alumni->id_peminatan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>PROGRAM STUDI</th>
                                                          <td>:</td>
                                                        <td>{{ $alumni->id_prodi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>TAHUN LULUS</th>
                                                          <td>:</td>
                                                        <td>{{ $alumni->thn_lulus }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>TANGGAL SEMINAR PROPOSAL</th>
                                                          <td>:</td>
                                                        <td>{{ $alumni->sempro }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>TANGGAL SEMINAR HASIL</th>
                                                          <td>:</td>
                                                        <td>{{ $alumni->semhas }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>TANGGAL MEJA HIJAU</th>
                                                          <td>:</td>
                                                        <td>{{ $alumni->meja_hijau}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>TANGAL YUDISIUM</th>
                                                          <td>:</td>
                                                        <td>{{ $alumni->yudisium }}</td>
                                                    </tr> 
                                                    <tr>
                                                      <th>JUDUL SKRIPSI</th>
                                                        <td>:</td>
                                                      <td>{{ $alumni->judul_skripsi }}</td>
                                                  </tr>            
                                                    <tr>
                                                      <th>PEKERJAAN</th>
                                                        <td>:</td>
                                                      <td>{{ $alumni->pekerjaan }}</td>
                                                  </tr>            
                                                    <tr>
                                                      <th>TEMPAT BEKERJA</th>
                                                        <td>:</td>
                                                      <td>{{ $alumni->tempat_pekerjaan }}</td>
                                                  </tr>            
                                                </table>          
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                 <a href="/alumni/{{ $alumni->id }}/apv" class="btn btn-success me-2"><i class="bi bi-check-lg fa-lg"></i></a>
                 <a href="/alumni/{{ $alumni->id }}/edit" class="btn btn-primary me-2"><i class="bi bi-pencil-square fa-lg"></i></a>
                 <form action="/alumni/{{ $alumni->id }}" method="post">
                     @method('DELETE')
                     @csrf
                     <button type="submit" class="btn btn-danger"><i class="bi bi-trash3 fa-lg"></i></button>
                 </form>
                     
                 </td>
                </tr>
             @endforeach            
            </tbody>
         </table>
       
 
        </div>
    </div>
</div>



</script>

<script>

new DataTable('#data', {
    scrollX: true

    
});
 </script>
@endsection

