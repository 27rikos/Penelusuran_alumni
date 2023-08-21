@extends('partials.admin')
@section('content')


<div class="container-fluid px-4 ">
    <h2 class="fs-2 m-0 my-3 text-secondary ">Peminatan</h2>
        <hr>
    <div class="row  mb-3">
        <div class="col">
             <a href="/peminatan/create" class="btn text-light" style="background-color: #0A6EBD">Tambah Peminatan</a>
        </div>
    </div>
    <div class="col">
    </div>
    <div class="card">
    <div class="scroll overflow-x-auto my-2 ms-2 me-2">
        <table class="table table-stripped " id="example" class="display"  style="width:100%">
           <thead class="sticky-top">
           <tr>
            <th>KODE PEMINATAN</th>
            <th>PEMINATAN</th>
            <th>AKSI</th>
            </tr>
           </thead>
           <tbody>
            @foreach ($peminatans as $peminatan)
            <tr>
                <td>{{ $peminatan->kd_peminatan }}</td>
                <td>{{ $peminatan->peminatan }}</td>
                <td class="d-flex justify-content-center">
                    <a href="/peminatan/{{ $peminatan->id }}/edit" class="btn btn-primary me-2"><i class="bi bi-pencil-square fa-lg"></i></a>
                    <form action="/peminatan/{{ $peminatan->id }}" method="post">
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