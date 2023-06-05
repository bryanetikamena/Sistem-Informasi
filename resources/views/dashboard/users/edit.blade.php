@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom btn-toolbar mb-2 mb-md-0">
    <h1 class="h2">Update</h1>
  </div>


  <div class="col-lg-5">
    <form method="post" action="/updateuser/{{ $data_user->id }}">
        @csrf
        <div class="mb-3">
            <p> </p>
            <label for="id_admin" class="form-label">Id Admin</label>
            <input type="text" name="id_admin" class="form-control" id="id_admin" required value="{{ $data_user->id_admin, old('id_admin') }}">
        </div>
        <div class="mb-3">
          <p> </p>
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" required value="{{ $data_user->email, old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required value="{{ $data_user->password}}">
        </div>
        <div class="mb-3">
          <p> </p>
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="username" required value="{{ $data_user->username, old('username') }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>



@endsection