@extends('dashboard.layouts.main')
@section('container')

<div class="row">
	<div class="col col-lg-6 mt-3">
		<h3 class="text-center">Edit Data Pensiun</h3>
		<form action="/pensiundashboard/{{ $pensiuns->id }}" method="post">
			@method('put')
			@csrf
			<div class="mb-3">
				<label class="form-label">NIP</label>
				<input type="text" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip',$pensiuns->nip) }}" id="nip" name="nip">
			</div>
			@error('nip')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Tahun Masuk</label>
				<input type="text" class="form-control @error('tahun_masuk') is-invalid @enderror" value="{{ old('tahun_masuk',$pensiuns->tahun_masuk) }}" id="tahun_masuk" name="tahun_masuk">
			</div>
			@error('tahun_masuk')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Tahun Pensiun</label>
				<input type="text" class="form-control @error('tahun_pensiun') is-invalid @enderror" value="{{ old('tahun_pensiun',$pensiuns->tahun_pensiun) }}" id="tahun_pensiun" name="tahun_pensiun">
			</div>
			@error('tahun_pensiun')
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