<?php
  if ( 
    !isset($_GET["NIS"]) || 
    !isset($_GET["nama"]) || 
    !isset($_GET["email"]) || 
    !isset($_GET["jurusan"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h1>Datadiri Siswa</h1>
  <ul>
    <li>NIS : <?= $_GET["NIS"]; ?></li>
    <li>Nama : <?= $_GET["nama"]; ?></li>
    <li>Email : <?= $_GET["email"]; ?></li>
    <li>Jurusan : <?= $_GET["jurusan"]; ?></li>
  </ul>

  <a href="latihan1.php"> Kembali Ke Halaman Data Siswa</a>
</body>
</html>