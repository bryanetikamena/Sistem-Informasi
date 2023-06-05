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

<h1>Data Penilaian</h1>

<table id="TB">
  <tr>
    <th>No</th>
    <th scope="col">Id Penilaian</th>
    <th scope="col">Id Karyawan</th>
    <th scope="col">Id KTJ</th>
    <th scope="col">Id KD</th>
    <th scope="col">Id KL</th>
    <th scope="col">Id KK</th>
    <th scope="col">Id KKS</th>
    <th scope="col">Id KP</th>
  </tr>
  @php
    $no=1;
  @endphp
  @foreach ($data_penilaian as $post)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $post->id_penilaian }}</td>
    <td>{{ $post->id_karyawan }}</td>
    <td>{{ $post->id_kriteria_tanggung_jawab }}</td>
    <td>{{ $post->id_kriteria_disiplin }}</td>
    <td>{{ $post->id_kriteria_loyalitas }}</td>
    <td>{{ $post->id_kriteria_keahlian }}</td>
    <td>{{ $post->id_kriteria_kerja_sama }}</td>
    <td>{{ $post->id_kriteria_pengetahuan }}</td>
  </tr>
  @endforeach
</table>
<p> </p>
<table id="TB">
  <tr>
    <th>No</th>
    <th scope="col">Normalisasi Tanggung Jawab</th>
    <th scope="col">Normalisasi Disiplin</th>
    <th scope="col">Normalisasi Loyalitas</th>
    <th scope="col">Normalisasi Keahlian</th>
    <th scope="col">Normalisasi Kerja Sama</th>
    <th scope="col">Normalisasi Pengetahuan</th>
  </tr>
  @php
    $no=1;
  @endphp
  @foreach ($data_penilaian as $post)
  <tr>
    <td>{{ $no++ }}</td>

    <td>{{ $post->normalisasi_tanggung_jawab }}</td>
    <td>{{ $post->normalisasi_disiplin }}</td>
    <td>{{ $post->normalisasi_loyalitas }}</td>
    <td>{{ $post->normalisasi_keahlian }}</td>
    <td>{{ $post->normalisasi_kerja_sama }}</td>
    <td>{{ $post->normalisasi_pengetahuan }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


