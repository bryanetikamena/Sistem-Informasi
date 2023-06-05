@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom btn-toolbar mb-2 mb-md-0">
    <h1 class="h2">Update</h1>
  </div>


  <div class="col-lg-5">
    <form method="post" action="/updatebobotkriteria/{{ $data_bobot_kriteria->id }}">
        @csrf
        <div class="mb-3">
          <p> </p>
          <label for="id_bobot_kriteria" class="form-label">Id Bobot Kriteria</label>
          <input type="text" name="id_bobot_kriteria" class="form-control" id="id_bobot_kriteria" value="{{ $data_bobot_kriteria->id_bobot_kriteria, old('id_bobot_kriteria') }}">
        </div>
        <div class="mb-3">
            <p> </p>
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ $data_bobot_kriteria->nama, old('nama') }}">
        </div>
      <div class="mb-3">
          <label for="bobot" class="form-label">Bobot</label>
          <input type="text" name="bobot" class="form-control" id="bobot" value="{{ $data_bobot_kriteria->bobot, old('bobot') }}">
      </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>



@endsection