@extends('dashboard.layouts.main')
@section('container')

<div class="row">
	<div class="col col-lg-6 mt-3">
		<h3 class="text-center">Edit Data Jabatan</h3>
		<form action="/jabatandashboard/{{ $jabatans->id }}" method="post">
			@method('put')
			@csrf
			<div class="mb-3">
				<label class="form-label">ID Jabatan</label>
				<input type="text" class="form-control @error('id_jab') is-invalid @enderror" value="{{ old('id_jab',$jabatans->id) }}" id="id_jab" name="id_jab">
			</div>
			@error('id_jab')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Nama</label>
				<input type="text" class="form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan',$jabatans->jabatan) }}" id="jabatan" name="jabatan">
			</div>
			@error('jabatan')
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