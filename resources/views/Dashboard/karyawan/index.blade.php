@extends('dashboard.layouts.main')
@section('container')

<br>
<div class="container text-center mt-3 p-4 bg-white">
	<div class="pt-3 pb-2 mb-3 border-bottom text-center">
    <h1 class="mb-3">DATA KARYAWAN</h1></div>
    <div class=" ">
    <a href="/karyawandashboard/create" class="btn btn-outline-danger">Insert</a></div>
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
                <th>Nama</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Telpon</th>
                <th>Agama</th>
                <th>Status Nikah</th>
                <th>Alamat</th>
                <th>Golongan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->nip }}</td>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->email }}</td>
                    <td>{{ $karyawan->jenis_kelamin }}</td>
                    <td>{{ $karyawan->tempat_lahir }}</td>
                    <td>{{ $karyawan->tanggal_lahir }}</td>
                    <td>{{ $karyawan->telp }}</td>
                    <td>{{ $karyawan->agama }}</td>
                    <td>{{ $karyawan->status_nikah }}</td>
                    <td>{{ $karyawan->alamat }}</td>
                    <td>{{ $karyawan->golongan }}</td>
                    <td>
                        <a href="/karyawandashboard/{{$karyawan->id}}/edit" class="btn btn-warning">Edit</a>
						<form  class="d-inline" action="/karyawandashboard/{{ $karyawan->id }}" method="post">
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