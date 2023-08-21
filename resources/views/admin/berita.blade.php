@extends('partials.admin')
@section('content')
<div class="container-fluid px-4 col-lg-12 ">
    <h2 class="fs-2 m-0 my-3 text-secondary ">Berita</h2>
        <hr>
    <div class="row  mb-3">
        <div class="col">
             <a href="/berita/create" class="btn text-light"  style="background-color: #0A6EBD">Tambah Berita</a>
        </div>
       
    </div>
    <div class="col">

    </div>
    <div class="card">
    <div class="scroll my-2 ms-2 me-2 ">
        <table class="table table-borderless  " id="data" class="display"  style="width:100%; font-size:15px;">
           <thead class="sticky-top">
           <tr>
            <th>JUDUL BERITA</th>
            <th>FOTO</th>
            <th>ISI</th>
            <th>PENULIS</th>
            <tH>TANGGAL</tH>
            <th>AKSI</th>
            </tr>
           </thead>
           <tbody>
            @foreach ($beritas as $item)
            <tr>
                <td>{{ $item->judul }}</td>
                <td><img src="{{asset('storage/image/'.$item->foto)}}" alt="" style="width:50px"></td>
                <td style="text-align: justify">{{ $item->isi }}</td>
                <td>{{ $item->penulis }}</td>
                <td>{{ $item->tanggal }}</td>
                <td class="d-flex justify-content-center">
                    <a href="/berita/{{ $item->id }}/edit" class="btn btn-primary me-2"><i class="bi bi-pencil-square fa-lg"></i></a>
                    <form action="/berita/{{ $item->id }}" method="post">
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
<script>
    new DataTable('#data', {
        scrollX: true,
   
 
 });
 </script>
@endsection