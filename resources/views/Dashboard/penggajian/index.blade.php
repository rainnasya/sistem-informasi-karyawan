@extends('dashboard.layouts.main')
@section('container')

@parent
<br>
<br>
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Data Gaji Karyawan</h1><br><br>
    <div class=""> 
    <a href="/penggajiandashboard/create" class="btn btn-outline-danger">Insert</a></div>
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
                <th>Golongan</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan</th>
                <th>Total Gaji</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($penggajians as $penggajian)
                <tr>
                    <td>{{ $penggajian->nip }}</td>
                    <td>{{ $penggajian->golongan }}</td>
                    <td>{{ $penggajian->gaji_pokok }}</td>
                    <td>{{ $penggajian->tunjangan }}</td>
                    <td>{{ $penggajian->total_gaji }}</td>
                    <td>
                        <a href="/penggajiandashboard/{{$penggajian->id}}/edit" class="btn btn-warning">Edit</a>
						<form  class="d-inline" action="/penggajiandashboard/{{ $penggajian->id }}" method="post">
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