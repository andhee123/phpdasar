<?php

  $koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

  if (isset($_POST["submit"])) {
    
    $nama = $_POST['nama'];
    $nrp = $_POST['nrp'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $gambar = $_POST['gambar'];

    $query  = "INSERT INTO mahasiswa VALUES ('','$nama','$nrp','$email','$jurusan','$gambar')";

    mysqli_query($koneksi, $query);

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
  <link rel="stylesheet" href="./bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  

  <div class="container justify-content-center mt-5">
    <div class="row">
      <div class="col">
        <h1>Tambah Data Mahasiswa</h1>
        <p>
          <a href="index.php">Kembali Ke Data Mahasiswa</a>
        </p>
      </div>
    </div>
    
   <form action="" method="post">
      <div class="row">
        <div class="col mt-4">
          <label class="form-label" for="nrp">NRP  :  </label>
          <input class="form-control w-50 " type="text" name="nrp" id="nrp">
        </div>
      </div>
    
      <div class="row">
        <div class="col mt-4">
          <label class="form-label" for="nama">Nama  :  </label>
          <input class="form-control w-50" type="text" name="nama" id="nama">
        </div>
      </div>
      
      <div class="row">
        <div class="col mt-4">
          <label class="form-label" for="email">Email  :  </label>
          <input class="form-control w-50" type="text" name="email" id="email">
        </div>
      </div>
      
      <div class="row">
        <div class="col mt-4">
          <label class="form-label" for="jurusan">Jurusan  :  </label>
          <input class="form-control w-50" type="text" name="jurusan" id="jurusan">
        </div>
      </div>
      
      <div class="row">
        <div class="col mt-4">
          <label class="form-label" for="gambar">Gambar  :  </label>
          <input class="form-control w-50" type="text" name="gambar" id="gambar">
        </div>
      </div>

      <div class="row mt-3">
        <div class="col">
          <button type="submit" name="submit" class="btn btn-success">Kirim</button>
        </div>
      </div>      
    </form>
  </div>

</body>
</html>