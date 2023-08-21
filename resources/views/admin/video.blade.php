@extends('partials.admin')
@section('content')


<div class="container-fluid px-4 ">
    <h2 class="fs-2 m-0 my-3 text-secondary ">Video</h2>
        <hr>
    
    <div class="col mb-3">
        <a href="/video_control/create" class="btn text-light"  style="background-color: #0A6EBD">Tambah Video</a>
    </div>
    <div class="card">
    <div class="scroll  my-2 ms-2 me-2">
        <table class="table table-stripped table-sm  " id="data" class="display "  style="width:100%; font-size:15px" >
           <thead class="sticky-top">
           <tr>
            <th>JUDUL</th>
            <th>FOTO</th>
            <th>LINK</th>
            <th>AKSI</th>
           
           
            </tr>
           </thead>
           <tbody>
                   @foreach ($datas as $item)
                   <tr>
                    <td>{{ $item->judul }}</td>
                    <td><img src="{{ asset('storage/video_foto/'.$item->file ) }}" alt="foto" width="50"></td>
                    <td>{{ $item->link }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="/video_control/{{ $item->id }}/edit" class="btn btn-primary me-2"><i class="bi bi-pencil-square fa-lg"></i></a>
                        <form action="/video_control/{{ $item->id }}" method="post">
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
        scrollX: true

    
});
</script>
@endsection