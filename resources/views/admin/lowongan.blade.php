@extends('partials.admin')
@section('content')


<div class="container-fluid px-4 ">
    <h2 class="fs-2 m-0 my-3 text-secondary ">Lowongan Kerja</h2>
        <hr>
    <div class="row  mb-3">
        <div class="col">
             <a href="/lowongan/create" class="btn text-light" style="background-color: #0A6EBD">Tambah Lowongan</a>
        </div>
    </div>
    <div class="col">

    </div>
    <div class="card">
    <div class="scroll my-2 ms-2 me-2">
        <table class="table table-borderless  " id="data" class="display"  style="width:100%; font-size:15px;">
           <thead class="sticky-top">
           <tr>
            <th>NAMA PENGIRIM</th>
            <th>NO HP</th>
            <th>EMAIL</th>
            <th>LOWONGAN PEKERJAAN</th>
            <th>AKSI</th>
            </tr>
           </thead>
           <tbody>
           @foreach ($lowongans as $item)
               <tr>
                <td>{{ $item->pengirim }}</td>
                <td>{{ $item->hp }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->file }}</td>
                <td class="d-flex justify-content-center">
                    <a href="/lowongan/{{ $item->id }}/prev" class="btn btn-info me-2"> <i class="bi bi-eye fa-lg" style="color:#F0F0F0"></i></a>
                    <a href="/lowongan/{{ $item->id }}/edit" class="btn btn-primary me-2"><i class="bi bi-pencil-square fa-lg"></i></a>
                    <form action="/lowongan/{{ $item->id }}" method="post">
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