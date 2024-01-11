@extends('dashboard.layouts.main')
@section('container')

<br>
<br>
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">DATA PENSIUN</h1><br><br>
    <div class=""> 
    <a href="/pensiundashboard/create" class="btn btn-outline-danger">Insert</a></div>
    @if(session()->has('pesan'))
    <div class="alert alert-success mt-2" role="alert">
        {{ session('pesan') }}
    </div>
    @endif
    <br>
        <table class="table table-striped table-bordered">
        <thead class="table-danger">
            <tr>
            	<th>No</th>
                <th>NIP</th>
                <th>Tahun Masuk</th>
                <th>Tahun Pensiun</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($pensiuns as $pensiun)
                <tr>
                	<td>{{ $loop->iteration }}</td>
                    <td>{{ $pensiun->nip }}</td>
                    <td>{{ $pensiun->tahun_masuk }}</td>
                    <td>{{ $pensiun->tahun_pensiun }}</td>
                    <td>
                        <a href="/pensiundashboard/{{$pensiun->id}}/edit" class="btn btn-warning">Edit</a>
                        <form  class="d-inline" action="/pensiundashboard/{{ $pensiun->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">Delete</button>
                        </form>
                    </td>
                </tr>

            @empty
                <td colspan="6" class="text-center">Tidak ada data...</td>
                @endforelse
        </tbody>
           
    </table>
</div>
@endsection