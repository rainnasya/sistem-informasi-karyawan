@extends('layout.main')
@section('container')

<br>
<br>
<div class="container text-center mt-3 p-4 bg-white">
	<div class="pt-3 pb-2 mb-3 border-bottom text-center">
    <h1 class="mb-3">DATA KARYAWAN</h1></div>
    
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
                </tr>

            @empty
                <td colspan="6" class="text-center">Tidak ada data...</td>
                @endforelse
        </tbody>
           
    </table>
</div>
@endsection
@extends('layout.footer')