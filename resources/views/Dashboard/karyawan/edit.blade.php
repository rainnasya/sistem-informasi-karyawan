@extends('dashboard.layouts.main')
@section('container')

<div class="row">
	<div class="col col-lg-6 mt-3">
		<h3 class="text-center">Edit Data Karyawan</h3>
		<form action="/karyawandashboard/{{ $karyawans->id }}" method="post">
			@method('put')
			@csrf
			<div class="mb-3">
				<label class="form-label">NIP</label>
				<input type="text" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip',$karyawans->nip) }}" id="nip" name="nip">
			</div>
			@error('nip')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Nama</label>
				<input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama',$karyawans->nama) }}" id="nama" name="nama">
			</div>
			@error('nama')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Email</label>
				<input type="text" class="form-control" id="email" name="email" value="{{ old('email',$karyawans->email) }}">
			</div>
			@error('email')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Jenis Kelamin</label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" checked="" value="L">
					<label class="form-check-label" for="inlineRadio1">Laki-laki</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="P">
					<label class="form-check-label" for="inlineRadio1">Perempuan</label>
				</div>
			</div>
			<div class="mb-3">
				<label class="form-label">Tempat Lahir</label>
				<input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir',$karyawans->tempat_lahir) }}" id="tempat_lahir" name="tempat_lahir">
			</div>
			@error('tempat_lahir')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Tanggal Lahir</label>
				<input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir',$karyawans->tanggal_lahir) }}" id="tanggal_lahir" name="tanggal_lahir">
			</div>
			@error('tanggal_lahir')
			{{ $message }}
			@enderror

			<div class="mb-3">
				<label class="form-label">Telpon</label>
				<input type="text" class="form-control @error('telp') is-invalid @enderror" value="{{ old('telp',$karyawans->telp) }}" id="telp" name="telp">
			</div>
			@error('telp')
			{{ message }}
			@enderror

			<div class="mb-3">
				<label class="form-label">Agama</label>
				<input type="text" class="form-control @error('agama') is-invalid @enderror" value="{{ old('agama',$karyawans->agama) }}" id="agama" name="agama">
			</div>
			@error('agama')
			{{ $message }}
			@enderror
			<div class="mb-3">
				<label class="form-label">Status Nikah</label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="status_nikah" id="status_nikah" checked="" value="Kawin">
					<label class="form-check-label" for="inlineRadio1">Kawin</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="status_nikah" id="status_nikah" value="Belum">
					<label class="form-check-label" for="inlineRadio1">Belum</label>
				</div>
			</div>

			<div class="mb-3">
				<label class="form-label">Tempat Lahir</label>
				<input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir',$karyawans->tempat_lahir) }}" id="tempat_lahir" name="tempat_lahir">
			</div>

			<div class="mb-3">
				<label class="form-label">Alamat</label>
				<textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat"> {{ old('alamat',$karyawans->alamat) }}</textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">Golongan</label>
				<select class="form-select" id="golongan" name="golongan">
					@foreach ($golongans as $golongan)
					<option value=" {{ $golongan->id}} ">{{$golongan->golongan}}</option>
					@endforeach
				</select> 
			</div>
			
			<center>
        		<button type="submit" class="btn btn-info">Update Data</button>
      		</center>

		</form>
	</div>
</div>
@endsection