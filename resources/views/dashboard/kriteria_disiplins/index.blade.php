@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kriteria Disiplin</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/exportkriteriadisiplin" class="btn btn-info btn-sm">Export PDF</a>
      </div>
    </div>
  </div>

  <h4>Tabel</h4>
  <div class="table-responsive">
    <a href="/dashboard/kriteria_disiplins/create" class="btn btn-primary mb-3">Create</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>NO</th>
          <th scope="col">Id Kriteria Disiplin</th>
          <th scope="col">Id Karyawan</th>
          <th scope="col">Id Bobot Kriteria</th>
          <th scope="col">Poin Penilaian</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @php $no=0; @endphp
        @foreach ($data_kriteria_disiplin as $post)
        @php $no++; @endphp
        <tr>
          <td>{{ $no }}</td>
          <td>{{ $post['id_kriteria_disiplin'] }}</td>
          <td>{{ $post['id_karyawan'] }}</td>
          <td>{{ $post['id_bobot_kriteria'] }}</td>
          <td>{{ $post['poin_penilaian'] }}</td>
          <td>
            <td>
              <a href="/showkriteriadisiplin/{{ $post->id }}" class="btn btn-warning btn-sm">Edit</a>
              <a href="/deletekriteriadisiplin/{{ $post->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Confirm To Delete')"">Delete</a>
            </td>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection