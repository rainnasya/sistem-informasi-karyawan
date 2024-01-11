@extends('layout.main')
@section('container')
@parent
<br>
<br>
<div class="container text-center mt-3 p-4 bg-white">
    <div class="pt-3 pb-2 mb-3 border-bottom text-center">
    <h1 class="mb-3">GOLONGAN KARYAWAN</h1></div>

    <br>
        <table class="table table-striped table-bordered">
        <thead class="table-danger">
            <tr>
                <th>NO</th>
                <th>Golongan</th>
                <th>Ruang</th>
                <th>Besar Gaji</th>

            </tr>
        </thead>
        <tbody>

            @forelse ($golongans as $golongan)
                <tr>
                    <td>{{ $golongan->id }}</td>
                    <td>{{ $golongan->golongan }}</td>
                    <td>{{ $golongan->ruang }}</td>
                    <td>{{ $golongan->besar_gaji }}</td>
                    
                </tr>

            @empty
                <td colspan="6" class="text-center">Tidak ada data...</td>
                @endforelse
        </tbody>
           
    </table>
</div>
@endsection

@extends('layout.footer')