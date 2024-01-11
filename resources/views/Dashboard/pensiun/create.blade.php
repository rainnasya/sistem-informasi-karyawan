@extends('dashboard.layouts.main')
@section('container')

<div class="row">
  <div class="col col-lg-6">

    <h3 class="text-center">Form Data Pensiun</h3>
    <form action="/pensiundashboard" method="post" >
      @csrf
      <div class="mb-3">
        <label class="form-label">NIP</label>
        <input type="text" class="form-control" id="nip" name="nip" value="{{old('nip')}}">
      </div>
      @error('nip')
      {{ $message }}
      @enderror
      <div class="mb-3">
        <label class="form-label">Tahun Masuk</label>
        <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" value="{{old('tahun_masuk')}}">
      </div>
      @error('tahun_masuk')
      {{ $message }}
      @enderror
      <div class="mb-3">
        <label class="form-label">Tahun Pensiun</label>
        <input type="text" class="form-control" id="tahun_pensiun" name="tahun_pensiun" value="{{old('tahun_pensiun')}}">
      </div>
      @error('tahun_pensiun')
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