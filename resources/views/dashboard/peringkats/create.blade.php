@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom btn-toolbar mb-2 mb-md-0">
    <h1 class="h2">Create Peringkat</h1>
  </div>


  <div class="col-lg-5">
    <form method="post" action="/dashboard/peringkats">
        @csrf
        <div class="mb-3">
            <p> </p>
            <label for="id_peringkat" class="form-label">Id Peringkat</label>
            <input type="text" name="id_peringkat" class="form-control" id="id_peringkat" value="{{ old('id_peringkat') }}">
        </div>
        <div class="mb-3">
          <p> </p>
          <label for="id_karyawan" class="form-label">Id Karyawan</label>
          <input type="text" name="id_karyawan" class="form-control" id="id_karyawan" value="{{ old('id_karyawan') }}">
        </div>
        <div class="mb-3">
            <p> </p>
            <label for="id_penilaian" class="form-label">Id Penilaian</label>
            <input type="text" name="id_penilaian" class="form-control" id="id_penilaian" value="{{ old('id_penilaian') }}">
        </div>
        <div class="mb-3">
          <p> </p>
          <label for="nilai" class="form-label">Nilai</label>
          <input type="text" name="nilai" class="form-control" id="nilai" value="{{ old('nilai') }}">
       </div>
        <div class="mb-3">
            <label for="peringkat" class="form-label">Peringkat</label>
            <input type="text" name="peringkat" class="form-control" id="peringkat" value="{{ old('peringkat') }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>



@endsection