@extends('layout.main')
@section('container')

<br>
<br>
<div class="container text-center mt-3 p-4 bg-white">
    <div class="pt-3 pb-2 mb-3 border-bottom text-center">
    <h1 class="mb-3">DATA PENSIUN</h1></div>
    <br>
        <table class="table table-striped table-bordered">
        <thead class="table-danger">
            <tr>
                <th>NO</th>
                <th>NIP</th>
                <th>Tahun Masuk</th>
                <th>Tahun Pensiun</th>
                
            </tr>
        </thead>
        <tbody>

            @forelse ($pensiuns as $pensiun)
                <tr>
                    <td>{{ $pensiun->id }}</td>
                    <td>{{ $pensiun->nip }}</td>
                    <td>{{ $pensiun->tahun_masuk }}</td>
                    <td>{{ $pensiun->tahun_pensiun }}</td>
                    
                </tr>

            @empty
                <td colspan="6" class="text-center">Tidak ada data...</td>
                @endforelse
        </tbody>
           
    </table>
</div>
@endsection

@extends('layout.footer')