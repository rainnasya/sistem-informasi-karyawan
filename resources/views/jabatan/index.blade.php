@extends('layout.main')
@section('container')

<br>
<br>
<div class="container text-center mt-3 p-4 bg-white">
    <div class="pt-3 pb-2 mb-3 border-bottom text-center">
    <h1 class="mb-3">JABATAN KARYAWAN</h1></div>
    <br>
        <table class="table table-striped table-bordered">
        <thead class="table-danger">
            <tr>
                <th>NO</th>
                <th>ID Jabatan</th>
                <th>Nama</th>
            
            </tr>
        </thead>
        <tbody>

            @forelse ($jabatans as $jabatan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jabatan->id_jab }}</td>
                    <td>{{ $jabatan->jabatan }}</td>
                    
                </tr>

            @empty
                <td colspan="6" class="text-center">Tidak ada data...</td>
                @endforelse
        </tbody>
           
    </table>
</div>
@endsection
@extends('layout.footer')