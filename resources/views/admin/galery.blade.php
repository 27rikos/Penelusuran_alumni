@extends('partials.admin')
@section('content')


<div class="container-fluid px-4 ">
    <h2 class="fs-2 m-0 my-3 text-secondary ">Gallery</h2>
        <hr>
    <div class="row  mb-3">
        <div class="col">
             <a href="/gallery/create" class="btn text-light" style="background-color: #0A6EBD">Tambah Foto</a>
        </div>
       
    </div>
    <div class="col">

    </div>
    <div class="card">
    <div class="scroll overflow-x-auto my-2 ms-2 me-2">
        <table class="table table-borderless text-center ">
           <thead class="sticky-top">
           <tr>
            <th>KETERANGAN</th>
            <th>FOTO</th>
            <th>AKSI</th>
            </tr>
           </thead>
           <tbody>
           @foreach ($fotos as $item)
               <tr>
                <td>{{ $item->keterangan }}</td>
                <td><img src="{{ asset('storage/gallery/'.$item->foto) }}" alt="" style="width:100px"></td>
                <td class="d-flex justify-content-center">
                    <a href="/gallery/{{ $item->id }}/edit" class="btn btn-primary me-2"><i class="bi bi-pencil-square fa-lg"></i></a>
                    <form action="/gallery/{{ $item->id }}" method="post">
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

@endsection