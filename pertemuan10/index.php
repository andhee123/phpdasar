<?php
  require "functions.php";
  $mahasiswa = query("SELECT * FROM mahasiswa")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="./bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  
  <div class="container justify-content-center mt-5">
    <div class="row">
      <div class="col">
        <h1 class="text-center">Data Mahasiswa</h1>
      </div>

      <div class="row">
        <div class="col pb-3 text-end">
          <a href="tambah.php" class="btn btn-primary">Add + </a>
        </div>
      </div>
    </div>
    <div class="row justtify-content-center text-center">
      <div class="col">
      <table class="table table-secondary table-striped table-bordered">
        <thead class="table-dark">
          <th>No.</th>
          <th>Gambar</th>
          <th>NRP</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Jurusan</th>
          <th>Aksi</th>
        </thead>
          <?php $i = 1; ?>
          <?php foreach($mahasiswa as $row) :?>
        <tr>
          <td><?= $i ?></td>
          <td>
            <img src="./img/<?= $row["gambar"]; ?>" width="50">
          </td>
          <td><?= $row["nrp"]; ?></td>
          <td><?= $row["nama"]; ?></td>
          <td><?= $row["email"]; ?></td>
          <td><?= $row["jurusan"]; ?></td>
          <td>
            <a href="" class="btn btn-warning text-light">Ubah</a>
            <a href="" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
      </table>
      </div>
    </div>
      
    
  </div>
</body>
</html>