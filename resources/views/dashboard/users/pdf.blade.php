<!DOCTYPE html>
<html>
<head>
<style>
#TB {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#TB td, #TB th {
  border: 1px solid #ddd;
  padding: 8px;
}

#TB tr:nth-child(even){background-color: #f2f2f2;}

#TB tr:hover {background-color: #ddd;}

#TB th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #76c4f4;
  color: white;
}
</style>
</head>
<body>

<h1>Data User</h1>

<table id="TB">
  <tr>
    <th>No</th>
    <th>Username</th>
    <th>Id Admin</th>
    <th>Email</th>
  </tr>
  @php
    $no=1;
  @endphp
  @foreach ($data_user as $post)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $post['username'] }}</td>
    <td>{{ $post['id_admin'] }}</td>
    <td>{{ $post['email'] }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


