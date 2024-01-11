@extends('dashboard.layouts.main')
@section('container')

<div class="row">
	<div class="col col-lg-6 mt-3">
		<h3 class="text-center">Edit Data Pendidikan</h3>
		<form action="/pendidikandashboard/{{ $pendidikans->id }}" method="post">
			@method('put')
			@csrf
			<div class="mb-3">
				<label class="form-label">NIP</label>
				<input type="text" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip',$pendidikans->nip) }}" id="nip" name="nip">
			</div>
			@error('nip')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Tingkat Pendidikan</label>
				<input type="text" class="form-control @error('tingkat_pdkn') is-invalid @enderror" value="{{ old('tingkat_pdkn',$pendidikans->tingkat_pdkn) }}" id="tingkat_pdkn" name="tingkat_pdkn">
			</div>
			@error('tingkat_pdkn')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Jurusan</label>
				<input type="text" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan',$pendidikans->jurusan) }}" id="jurusan" name="jurusan">
			</div>
			@error('jurusan')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Tahun</label>
				<input type="text" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun',$pendidikans->tahun) }}" id="tahun" name="tahun">
			</div>
			@error('tahun')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Keterangan</label>
				<input type="text" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan',$pendidikans->keterangan) }}" id="keterangan" name="keterangan">
			</div>
			@error('keterangan')
			{{ $message }}
			@enderror
			
			<div class="mb-3">
				<label class="form-label"></label>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>

		</form>
	</div>
</div>
@endsection