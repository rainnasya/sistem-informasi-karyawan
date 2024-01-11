@extends('dashboard.layouts.main')
@section('container')
@parent
<br>
<br>
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">GOLONGAN KARYAWAN</h1><br><br>
    <div class=""> 
    <a href="/golongandashboard/create" class="btn btn-outline-danger">Insert</a></div>
    @if(session()->has('pesan'))
    <div class="alert alert-success mt-2" role="alert">
        {{ session('pesan') }}
    </div>
    @endif
    <br>
        <table class="table table-striped table-bordered">
        <thead class="table-danger">
            <tr>
                <th>NO</th>
                <th>Golongan</th>
                <th>Ruang</th>
                <th>Besar Gaji</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($golongans as $golongan)
                <tr>    
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $golongan->golongan }}</td>
                    <td>{{ $golongan->ruang }}</td>
                    <td>{{ $golongan->besar_gaji }}</td>
                    <td><a href="/golongandashboard/{{$golongan->id}}/edit" class="btn btn-warning">Edit</a>
						<form  class="d-inline" action="/golongandashboard/{{ $golongan->id }}" method="post">
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