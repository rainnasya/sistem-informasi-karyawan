@extends('dashboard.layouts.main')
@section('container')

<div class="row">
	<div class="col col-lg-6 mt-3">
		<h3 class="text-center">Edit Data Golongan</h3>
		<form action="/golongandashboard/{{ $golongans->id }}" method="post">
			@method('put')
			@csrf
			<div class="mb-3">
				<label class="form-label">Golongan</label>
				<input type="text" class="form-control @error('golongan') is-invalid @enderror" value="{{ old('golongan',$golongans->golongan) }}" id="golongan" name="golongan">
			</div>
			@error('golongan')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Ruang</label>
				<input type="text" class="form-control @error('ruang') is-invalid @enderror" value="{{ old('ruang',$golongans->ruang) }}" id="ruang" name="ruang">
			</div>
			@error('ruang')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Besar Gaji</label>
				<input type="text" class="form-control" id="besar_gaji" name="besar_gaji" value="{{ old('besar_gaji',$golongans->besar_gaji) }}">
			</div>
			@error('besar_gaji')
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