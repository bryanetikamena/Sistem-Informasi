@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom btn-toolbar mb-2 mb-md-0">
    <h1 class="h2">Update</h1>
  </div>


  <div class="col-lg-5">
    <form method="post" action="/updatepenilaian/{{ $data_penilaian->id }}">
        @csrf
        <div class="mb-3">
          <p> </p>
          <label for="id_penilaian" class="form-label">Id Kriteria Disiplin</label>
          <input type="text" name="id_penilaian" class="form-control" id="id_penilaian" value="{{ $data_penilaian->id_penilaian, old('id_penilaian') }}">
        </div>
        <div class="mb-3">
            <p> </p>
            <label for="id_karyawan" class="form-label">Id Karyawan</label>
            <input type="text" name="id_karyawan" class="form-control" id="id_karyawan" value="{{ $data_penilaian->id_karyawan, old('id_karyawan') }}">
        </div>
        <div class="mb-3">
            <label for="id_kriteria_tanggung_jawab" class="form-label">Id Kriteria Tanggung Jawab</label>
            <input type="text" name="id_kriteria_tanggung_jawab" class="form-control" id="id_kriteria_tanggung_jawab" value="{{ $data_penilaian->id_kriteria_tanggung_jawab, old('id_kriteria_tanggung_jawab') }}">
        </div>
        <div class="mb-3">
            <label for="id_kriteria_disiplin" class="form-label">Id Kriteria Disiplin</label>
            <input type="text" name="id_kriteria_disiplin" class="form-control" id="id_kriteria_disiplin" value="{{ $data_penilaian->id_kriteria_disiplin, old('id_kriteria_disiplin') }}">
        </div>
        <div class="mb-3">
            <label for="id_kriteria_loyalitas" class="form-label">Id Kriteria Loyalitas</label>
            <input type="text" name="id_kriteria_loyalitas" class="form-control" id="id_kriteria_loyalitas" value="{{ $data_penilaian->id_kriteria_loyalitas, old('id_kriteria_loyalitas') }}">
        </div>
        <div class="mb-3">
            <label for="id_kriteria_keahlian" class="form-label">Id Kriteria Keahlian</label>
            <input type="text" name="id_kriteria_keahlian" class="form-control" id="id_kriteria_keahlian" value="{{ $data_penilaian->id_kriteria_keahlian, old('id_kriteria_keahlian') }}">
        </div>
        <div class="mb-3">
            <label for="id_kriteria_kerja_sama" class="form-label">Id Kriteria Kerja_Sama</label>
            <input type="text" name="id_kriteria_kerja_sama" class="form-control" id="id_kriteria_kerja_sama" value="{{ $data_penilaian->id_kriteria_kerja_sama, old('id_kriteria_kerja_sama') }}">
        </div>
        <div class="mb-3">
            <label for="id_kriteria_pengetahuan" class="form-label">Id Kriteria Pengetahuan</label>
            <input type="text" name="id_kriteria_pengetahuan" class="form-control" id="id_kriteria_pengetahuan" value="{{ $data_penilaian->id_kriteria_pengetahuan, old('id_kriteria_pengetahuan') }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>



@endsection