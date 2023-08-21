@extends('partials.admin')
@section('content')


<div class="container-fluid px-4 ">
    <h2 class="fs-2 m-0 my-3 text-secondary ">Program Studi</h2>
        <hr>
    <div class="row  mb-3">
        <div class="col">
             <a href="/prodi/create" class="btn text-light"  style="background-color: #0A6EBD">Tambah Program Studi</a>
        </div>
    </div>
    <div class="card">
    <div class="scroll overflow-x-auto my-2 ms-2 me-2">
        <table class="table table-striped text-center ">
           <thead class="sticky-top">
           <tr>
            <th>KODE PROGRAM STUDI</th>
            <th>PROGRAM STUDI</th>
            <th>AKSI</th>
            </tr>
           </thead>
           <tbody>
           @foreach ($prodis as $prodi)
           <tr>
            <td>{{ $prodi->kd_prodi }}</td>
            <td>{{ $prodi->prodi }}</td>
            <td class="d-flex justify-content-center">
                <a href="/prodi/{{ $prodi->id }}/edit" class="btn btn-primary me-2"><i class="bi bi-pencil-square fa-lg"></i></a>
                <form action="/prodi/{{ $prodi->id }}" method="post">
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