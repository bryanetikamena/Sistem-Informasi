@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Users</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/exportuser" class="btn btn-info btn-sm">Export PDF</a>
      </div>
    </div>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-secces" role="alert" col-lg-8></div>
      {{ session('succes') }}
    </div>
  @endif

  <h4>Tabel Users</h4>
  <div class="table-responsive">
    <a href="/dashboard/users/create" class="btn btn-primary mb-3">Create</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>NO</th>
          <th scope="col">Username</th>
          <th scope="col">Id Admin</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @php $no=0; @endphp
        @foreach ($data_user as $post)
        @php $no++; @endphp
        <tr>
          <td>{{ $no }}</td>
          <td>{{ $post['username'] }}</td>
          <td>{{ $post['id_admin'] }}</td>
          <td>{{ $post['email'] }}</td>
          <td>{{ $post['password'] }}</td>
          <td>
            <a href="/showuser/{{ $post->id }}" class="btn btn-warning btn-sm">Edit</a>
            <a href="/deleteuser/{{ $post->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Confirm To Delete')"">Delete</a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>

@endsection