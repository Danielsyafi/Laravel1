<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Data Karyawan</title>
</head>
<body>
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Alamat</th>
      <th scope="col">No_telp.</th>
    </tr>
  </thead>
  <tbody>
  
    
    <tr>
      <th scope="row">1</th>
      <td>{{ $Nama }}</td>
      <td>{{ $umur }}</td>
      <td>{{ $Alamat }}</td>
      <td>{{ $NO_Telp }}</td>
    </tr>
    
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>30 tahun</td>
      <td>jln,pasar baru 1</td>
      <td>0087632332323</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>dada</td>
      <td>30 tahun</td>
      <td>jln.pasar baru 3</td>
      <td>083222323232</td>
    </tr>
  </tbody>
  <td>
      <button type="button" class="btn btn-success">Tambah</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </td>
</table>
<div class="data1">
@yield('data2')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>