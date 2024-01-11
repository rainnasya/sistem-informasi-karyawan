@extends('dashboard.layouts.main')
@section('container')

<br>
<div class="row">
  <div class="col col-lg-6">
    <div class="pt-3 pb-2 mb-3 border-bottom text-center">
    <h2>Form Data Karyawan</h2>
    </div>

<div class="col col-lg-6">
    <form action="/karyawandashboard" method="post" >
      @csrf
      <div class="mb-3">
        <label class="form-label">Nip</label>
        <input type="text" class="form-control" id="nim" name="nip" value="{{old('nip')}}">
      </div>
      @error('nip')
      {{ $message }}
      @enderror
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}">
      </div>
      @error('nama')
      {{ $message }}
      @enderror

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
      </div>
      @error('email')
      {{ $message }}
      @enderror

      <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>

        <div class="form-check form-check-inline mx-3">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" checked value="L">
          <label class="form-check-label" for="inlineRadio1">Laki Laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="P">
          <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Tempat Lahir</label>
        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{old('tempat_lahir')}}">
      </div>
      @error('tempat_lahir')
      {{ $message }}
      @enderror

      <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
      </div>
      @error('tanggal_lahir')
      {{ $message }}
      @enderror

      <div class="mb-3">
        <label class="form-label">Telpon</label>
        <input type="text" class="form-control" id="telp" name="telp" value="{{old('telp')}}">
      </div>
      @error('telp')
      {{ $message }}
      @enderror

      <div class="mb-3">
        <label class="form-label">Agama</label>
        <input type="text" class="form-control" id="agama" name="agama" value="{{old('agama')}}">
      </div>
      @error('agama')
      {{ $message }}
      @enderror

      <div class="mb-3">
        <label class="form-label">Status Nikah</label>

        <div class="form-check form-check-inline mx-3">
          <input class="form-check-input" type="radio" name="status_nikah" id="status_nikah" checked value="Kawin">
          <label class="form-check-label" for="inlineRadio1">Kawin</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="status_nikah" id="status_nikah" value="Belum">
          <label class="form-check-label" for="inlineRadio2">Belum</label>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea type="text" class="form-control" id="alamat" name="alamat" rows="3"></textarea>
      </div>
  
  <div class="mb-3">
        <label class="form-label">Golongan</label>
        <select class="form-select" id="golongan" name="golongan">
          @foreach ($golongans as $golongan)
          <option value="{{ $golongan->id }}">{{ $golongan->golongan }}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label"></label>
          <button type="submit" class="btn btn-info">Tambahkan Data</button>
        
      </div>

    </form>
  </div>
  </div>
</div>
@endsection