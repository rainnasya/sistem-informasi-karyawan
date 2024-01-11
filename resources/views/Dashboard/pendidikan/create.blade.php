@extends('dashboard.layouts.main')
@section('container')

<div class="row">
  <div class="col col-lg-6">

    <h3 class="text-center">Form Data Pendidikan</h3>
    <form action="/pendidikandashboard" method="post" >
      @csrf
      <div class="mb-3">
        <label class="form-label">NIP</label>
        <input type="text" class="form-control" id="nip" name="nip" value="{{old('nip')}}">
      </div>
      @error('nip')
      {{ $message }}
      @enderror
      <div class="mb-3">
        <label class="form-label">Tingkat Pendidikan</label>
        <input type="text" class="form-control" id="tingkat_pdkn" name="tingkat_pdkn" value="{{old('tingkat_pdkn')}}">
      </div>
      @error('tingkat_pdkn')
      {{ $message }}
      @enderror
      <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{old('jurusan')}}">
      </div>
      @error('jurusan')
      {{ $message }}
      @enderror
      <div class="mb-3">
        <label class="form-label">Tahun</label>
        <input type="text" class="form-control" id="tahun" name="tahun" value="{{old('tahun')}}">
      </div>
      @error('tahun')
      {{ $message }}
      @enderror
      <div class="mb-3">
        <label class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{old('keterangan')}}">
      </div>
      @error('keterangan')
      {{ $message }}
      @enderror

      <div class="mb-3">
        <label class="form-label"></label>
        <button type="submit" class="btn btn-primary" >Create</button>
      </div>

    </form>
  </div>
</div>
@endsection