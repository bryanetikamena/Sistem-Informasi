@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Karyawan</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/exportkaryawan" class="btn btn-info btn-sm">Export PDF</a>
      </div>
    </div>
  </div>

  <h4>Tabel</h4>
  <div class="table-responsive">
    <a href="/dashboard/karyawans/create" class="btn btn-primary mb-3">Create</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>NO</th>
          <th scope="col">Id Karyawan</th>
          <th scope="col">Nama</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Jenis Kelamain</th>
          <th scope="col">Alamat</th>
          <th scope="col">Kontak</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @php $no=0; @endphp
        @foreach ($data_karyawan as $post)
        @php $no++; @endphp
        <tr>
          <td>{{ $no }}</td>
          <td>{{ $post['id_karyawan'] }}</td>
          <td>{{ $post['nama'] }}</td>
          <td>{{ $post['tempat_lahir'] }}</td>
          <td>{{ $post['tanggal_lahir'] }}</td>
          <td>{{ $post['jenis_kelamin'] }}</td>
          <td>{{ $post['alamat'] }}</td>
          <td>{{ $post['kontak'] }}</td>
          <td>{{ $post['jabatan'] }}</td>
          <td><td>
            <a href="/showkaryawan/{{ $post->id }}" class="btn btn-warning btn-sm">Edit</a>
            <a href="/deletekaryawan/{{ $post->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Confirm To Delete')"">Delete</a>
          </td></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>

@endsection