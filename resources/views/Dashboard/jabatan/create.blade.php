@extends('dashboard.layouts.main')
@section('container')

<div class="row">
  <div class="col col-lg-6">

    <h3 class="text-center">Form Data Jabatan</h3>
    <form action="/jabatandashboard" method="post" >
      @csrf
      <div class="mb-3">
        <label class="form-label">ID Jabatan</label>
        <input type="text" class="form-control" id="id_jab" name="id_jab" value="{{old('id_jab')}}">
      </div>
      @error('id_jab')
      {{ $message }}
      @enderror
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{old('jabatan')}}">
      </div>
      @error('jabatan')
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