@extends('layout.main')
@section('container')

<br>
<br>
<div class="container text-center mt-3 p-4 bg-white">
    <div class="pt-3 pb-2 mb-3 border-bottom text-center">
    <h1 class="mb-3">RIWAYAT PENDIDIKAN</h1></div>
   
    <br>
        <table class="table table-striped table-bordered">
        <thead class="table-danger">
            <tr>
                <th>NIP</th>
                <th>Tingkat Pendidikan</th>
                <th>Jurusan</th>
                <th>Tahun</th>
                <th>Keterangan</th>
                
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
                    
                </tr>

            @empty
                <td colspan="6" class="text-center">Tidak ada data...</td>
                @endforelse
        </tbody>
           
    </table>
</div>
@endsection
@extends('layout.footer')