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

<h1>Data Karyawan</h1>

<table id="TB">
  <tr>
    <th>No</th>
    <th scope="col">Id Karyawan</th>
    <th scope="col">Nama</th>
    <th scope="col">Tempat Lahir</th>
    <th scope="col">Tanggal Lahir</th>
    <th scope="col">Jenis Kelamain</th>
    <th scope="col">Alamat</th>
    <th scope="col">Kontak</th>
    <th scope="col">Jabatan</th>
  </tr>
  @php
    $no=1;
  @endphp
  @foreach ($data_karyawan as $post)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $post['id_karyawan'] }}</td>
    <td>{{ $post['nama'] }}</td>
    <td>{{ $post['tempat_lahir'] }}</td>
    <td>{{ $post['tanggal_lahir'] }}</td>
    <td>{{ $post['jenis_kelamin'] }}</td>
    <td>{{ $post['alamat'] }}</td>
    <td>{{ $post['kontak'] }}</td>
    <td>{{ $post['jabatan'] }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


