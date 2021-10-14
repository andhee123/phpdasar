<?php 

  require 'functions.php';
  $music = query("SELECT * FROM music");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Lagu</title>
</head>
<body>
    <h2>Daftar Lagu Saya</h2>

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Song</th>
        <th>Artis</th>
        <th>Tahun</th>
        <th>Aksi</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach($music as $row) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $row["song"]; ?></td>
        <td><?= $row["artist"]; ?></td>
        <td><?= $row["release"]; ?></td>
        <td>
          <a href="">Edit</a>  | <a href="">Hapus</a> 
        </td>
      </tr>
      <?php endforeach; ?>
      <?php $i++ ?>
    </table>
</body>
</html>