@extends('dashboard.layouts.main')
@section('container')

<br>
<br>
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">RIWAYAT PENDIDIKAN</h1><br><br>
    <div class=""> 
    <a href="/pendidikandashboard/create" class="btn btn-outline-danger">Insert</a></div>
    @if(session()->has('pesan'))
    <div class="alert alert-success mt-2" role="alert">
        {{ session('pesan') }}
    </div>
    @endif
    <br>
        <table class="table table-striped table-bordered">
        <thead class="table-danger">
            <tr>
                <th>NIP</th>
                <th>Tingkat Pendidikan</th>
                <th>Jurusan</th>
                <th>Tahun</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($pendidikans as $pendidikan)
                <tr>
                    <td>{{ $pendidikan->nip }}</td>
                    <td>{{ $pendidikan->tingkat_pdkn }}</td>
                    <td>{{ $pendidikan->jurusan }}</td>
                    <td>{{ $pendidikan->tahun }}</td>
                    <td>{{ $pendidikan->keterangan }}</td>
                    <td>
                        <a href="/pendidikandashboard/{{$pendidikan->id}}/edit" class="btn btn-warning">Edit</a>
						<form  class="d-inline" action="/pendidikandashboard/{{ $pendidikan->id }}" method="post">
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