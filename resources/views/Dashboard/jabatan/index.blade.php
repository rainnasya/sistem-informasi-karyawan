@extends('dashboard.layouts.main')
@section('container')

<br>
<br>
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">JABATAN KARYAWAN</h1><br><br>
    <div class=""> 
    <a href="/jabatandashboard/create" class="btn btn-outline-danger">Insert</a></div>
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
                <th>ID Jabatan</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($jabatans as $jabatan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jabatan->id_jab }}</td>
                    <td>{{ $jabatan->jabatan }}</td>
                    <td>
                        <a href="/jabatandashboard/{{$jabatan->id}}/edit" class="btn btn-warning">Edit</a>
                        <form  class="d-inline" action="/jabatandashboard/{{ $jabatan->id }}" method="post">
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