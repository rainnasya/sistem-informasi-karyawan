@extends('dashboard.layouts.main')
@section('container')

<div class="row">
  <div class="col col-lg-6">

    <h3 class="text-center">Form Data Golongan</h3>
    <form action="/golongandashboard" method="post" >
      @csrf
      <div class="mb-3">
        <label class="form-label">Golongan</label>
        <input type="text" class="form-control" id="golongan" name="golongan" value="{{old('golongan')}}">
      </div>
      @error('golongan')
      {{ $message }}
      @enderror
      <div class="mb-3">
        <label class="form-label">Ruang</label>
        <input type="text" class="form-control" id="ruang" name="ruang" value="{{old('ruang')}}">
      </div>
      @error('ruang')
      {{ $message }}
      @enderror

      <div class="mb-3">
        <label class="form-label">Besar Gaji</label>
        <input type="text" class="form-control" id="besar_gaji" name="besar_gaji" value="{{old('besar_gaji')}}">
      </div>
      @error('besar_gaji')
      {{ $message }}
      @enderror

      
      <div class="mb-3">
        <label class="form-label"></label>
          <button type="submit" class="btn btn-info">Tambahkan Data</button>
      </div>

    </form>
  </div>
</div>
@endsection