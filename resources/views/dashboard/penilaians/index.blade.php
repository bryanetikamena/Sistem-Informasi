@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Penilaian</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/exportpenilaian" class="btn btn-info btn-sm">Export PDF</a>
      </div>
    </div>
  </div>

  <h4>Tabel</h4>
  <div class="table-responsive">
    <a href="/dashboard/penilaians/create" class="btn btn-primary mb-3">Create</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>NO</th>
          <th scope="col">Id Penilaian</th>
          <th scope="col">Id Karyawan</th>
          <th scope="col">Id Kriteria Tanggung Jawab</th>
          <th scope="col">Id Kriteria Disiplin</th>
          <th scope="col">Id Kriteria Loyalitas</th>
          <th scope="col">Id Kriteria Keahlian</th>
          <th scope="col">Id Kriteria Kerja Sama</th>
          <th scope="col">Id Kriteria Pengetahuan</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>

        @php $no=0; @endphp
        @foreach ($data_penilaian as $post)
        @php $no++; @endphp
        <tr>
          <td>{{ $no }}</td>
          <td>{{ $post->id_penilaian }}</td>
          <td>{{ $post->id_karyawan }}</td>
          <td>{{ $post->id_kriteria_tanggung_jawab }}</td>
          <td>{{ $post->id_kriteria_disiplin }}</td>
          <td>{{ $post->id_kriteria_loyalitas }}</td>
          <td>{{ $post->id_kriteria_keahlian }}</td>
          <td>{{ $post->id_kriteria_kerja_sama }}</td>
          <td>{{ $post->id_kriteria_pengetahuan }}</td>
          <td>
            <td>
              <a href="/showpenilaian/{{ $post->id }}" class="btn btn-warning btn-sm">Edit</a>
              <a href="/deletepenilaian/{{ $post->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Confirm To Delete')"">Delete</a>
            </td>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


    <table class="table table-striped table-sm ">
      <thead>
        <tr>
          <th>NO</th>
          <th scope="col">Normalisasi Tanggung Jawab</th>
          <th scope="col">Normalisasi Disiplin</th>
          <th scope="col">Normalisasi Loyalitas</th>
          <th scope="col">Normalisasi Keahlian</th>
          <th scope="col">Normalisasi Kerja Sama</th>
          <th scope="col">Normalisasi Pengetahuan</th>
        </tr>
      </thead>
      <tbody>
        @php $no=0; @endphp
        @foreach ($data_penilaian as $post)
        @php $no++; @endphp
        <tr>
          <td>{{ $no }}</td>
          <td>{{ $post->normalisasi_tanggung_jawab }}</td>
          <td>{{ $post->normalisasi_disiplin }}</td>
          <td>{{ $post->normalisasi_loyalitas }}</td>
          <td>{{ $post->normalisasi_keahlian }}</td>
          <td>{{ $post->normalisasi_kerja_sama }}</td>
          <td>{{ $post->normalisasi_pengetahuan }}</td>
          </td>
        </tr>
        @endforeach
      </tbody>



    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>.</p>
  </div>

@endsection