@extends('dashboard.layouts.main')
@section('container')

<div class="row">
	<div class="col col-lg-6 mt-3">
		<h3 class="text-center">Edit Data Penggajian</h3>
		<form action="/penggajiandashboard/{{$penggajians->id}}" method="post">
			@method('put')
			@csrf
			<div class="mb-3">
				<label class="form-label">NIP</label>
				<input type="text" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip',$penggajians->nip) }}" id="nip" name="nip">
			</div>
			@error('nip')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Golongan</label>
				<select class="form-select" id="golongan" name="golongan">
					@foreach ($golongans as $golongan)
					<option value=" {{ $golongan->id}} ">{{$golongan->golongan}}</option>
					@endforeach
				</select> 
			</div>
			<div class="mb-3">
				<label class="form-label">Gaji Pokok</label>
				<input type="text" class="form-control @error('gaji_pokok') is-invalid @enderror" value="{{ old('gaji_pokok',$penggajians->gaji_pokok) }}" id="gaji_pokok" name="gaji_pokok">
			</div>
			@error('gaji_pokok')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Tunjangan</label>
				<input type="text" class="form-control @error('tunjangan') is-invalid @enderror" value="{{ old('tunjangan',$penggajians->tunjangan) }}" id="tunjangan" name="tunjangan">
			</div>
			@error('tunjangan')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Total Gaji</label>
				<input type="text" class="form-control @error('total_gaji') is-invalid @enderror" value="{{ old('total_gaji',$penggajians->total_gaji) }}" id="total_gaji" name="total_gaji">
			</div>
			@error('total_gaji')
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