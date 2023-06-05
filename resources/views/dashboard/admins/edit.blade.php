@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom btn-toolbar mb-2 mb-md-0">
    <h1 class="h2">Update</h1>
  </div>


  <div class="col-lg-5">
    <form method="post" action="/updateadmin/{{ $data_admin->id }}">
        @csrf
        <div class="mb-3">
          <p> </p>
          <label for="id_admin" class="form-label">Id Admin</label>
          <input type="text" name="id_admin" class="form-control" id="id_admin" value="{{ $data_admin->id_admin, old('id_admin') }}">
        </div>
        <div class="mb-3">
            <p> </p>
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ $data_admin->nama, old('nama') }}">
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $data_admin->jenis_kelamin, old('jenis_kelamin') }}">
      </div>
      <div class="mb-3">
          <label for="kontak" class="form-label">Kontak</label>
          <input type="text" name="kontak" class="form-control" id="kontak" value="{{ $data_admin->kontak, old('kontak') }}">
      </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>



@endsection