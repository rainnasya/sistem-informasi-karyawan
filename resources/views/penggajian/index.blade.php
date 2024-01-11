@extends('layout.main')
@section('container')

@parent
<br>
<br>
<div class="container text-center mt-3 p-4 bg-white">
    <div class="pt-3 pb-2 mb-3 border-bottom text-center">
    <h1 class="mb-3">Data Gaji Karyawan</h1></div>
    
    <br>
        <table class="table table-striped table-bordered">
        <thead class="table-danger">
            <tr>
                <th>NIP</th>
                <th>Golongan</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan</th>
                <th>Total Gaji</th>
                
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
                    
                </tr>

            @empty
                <td colspan="6" class="text-center">Tidak ada data...</td>
                @endforelse
        </tbody>
           
    </table>
</div>
@endsection
@extends('layout.footer')