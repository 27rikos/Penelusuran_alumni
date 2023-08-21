@extends('partials.admin')
@section('content')


<div class="container-fluid px-4 ">
    <h2 class="fs-2 m-0 my-3 text-secondary ">Kelola User</h2>
        <hr>
    
    <div class="col">

    </div>
    <div class="card">
    <div class="scroll  my-2 ms-2 me-2">
        <table class="table table-stripped table-sm  " id="data" class="display "  style="width:100%; font-size:15px" >
           <thead class="sticky-top">
           <tr>
            <th>NPM</th>
            <th>EMAIL</th>
            <th>AKSI</th>
           
            </tr>
           </thead>
           <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{ $item->npm }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <form action="/main/{{ $item->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="bi bi-person-x fa-lg"></i></button>
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