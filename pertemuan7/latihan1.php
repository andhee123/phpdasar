<?php

  $mahasiswa = [
    [
      "NIS" => 025322524,
      "email" => "andi120903@gmail.com",
      "nama" => "Andi",
      "jurusan" => "Rekayasa Perangkat Lunak"
    ],
    [
      "email" => "alvin@gmail.com",
      "nama" => "Alvin",
      "NIS" => 987622524,
      "jurusan" => "Teknik Mesin"
    ]
  ];
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>
<body>
  <h1>Data Mahasiswa</h1>
  <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
      
      <li>
        <a href="latihan2.php?
          nama=<?= $mhs["nama"]; ?>
          &NIS=<?= $mhs["NIS"]; ?>
          &email=<?= $mhs["email"]; ?>
          &jurusan=<?= $mhs["jurusan"]; ?>">
          
        <?= $mhs["nama"]?></a>
      </li>

    <?php endforeach; ?>
  </ul>
</body>
</html>