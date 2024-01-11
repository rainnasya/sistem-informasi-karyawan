@extends('dashboard.layouts.main')
@section('container')

<div class="row">
  <div class="col col-lg-6">

    <h3 class="text-center">Form Data Penggajian</h3>
    <form action="/penggajiandashboard" method="post" >
      @csrf
      <div class="mb-3">
        <label class="form-label">NIP</label>
        <input type="text" class="form-control" id="nip" name="nip" value="{{old('nip')}}">
      </div>
      @error('nip')
      {{ $message }}
      @enderror
      <div class="mb-3">
        <label class="form-label">Golongan</label>
        <select class="form-select" id="golongan" name="golongan">
          @foreach ($golongans as $golongan)
          <option value="{{ $golongan->id }}">{{ $golongan->golongan }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Gaji Pokok</label>
        <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" value="{{old('gaji_pokok')}}">
      </div>
      @error('gaji_pokok')
      {{ $message }}
      @enderror
      <div class="mb-3">
        <label class="form-label">Tunjangan</label>
        <input type="text" class="form-control" id="tunjangan" name="tunjangan" value="{{old('tunjangan')}}">
      </div>
      @error('tunjangan')
      {{ $message }}
      @enderror
      <div class="mb-3">
        <label class="form-label">Total Gaji</label>
        <input type="text" class="form-control" id="total_gaji" name="total_gaji" value="{{old('total_gaji')}}">
      </div>
      @error('total_gaji')
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