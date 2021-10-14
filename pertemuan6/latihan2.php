<?php
  // Array Associative
  // definisinya sama seperti array numerik, kecuali key nya adalah string yang kita buat sendiri
  // Daftar Mahasiswa
  $mahasiswa = [
    [
      "NIS" => 025322524,
      "Email" => "andi120903@gmail.com",
      "nama" => "Andi",
      "Jurusan" => "Rekayasa Perangkat Lunak"
    ],
    [
      "Email" => "alvin@gmail.com",
      "nama" => "Alvin",
      "NIS" => 987622524,
      "Jurusan" => "Teknik Mesin"
    ]
  ];

  // Daftar Aplikasi
  $aplikasi = [
    [
      "logo" => "telegram.png",
      "nama" => "Telegram",
      "developer" => "Telegram FZ-LLC",
      "ulasan" => "8 jt ulasan",
      "download" => "500jt",
      "rating" => "12+"
    ],
    [
      "logo" => "discord.png",
      "nama" => "Discord",
      "developer" => "Discord Inc.",
      "ulasan" => "3 jt ulasan",
      "download" => "100 jt",
      "rating" => "3+"
    ],
  ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <style>
    img {
      width: 50px;
    }
  </style>
</head>
<body>
  <h1>DAFTAR MAHASISWA</h1>
  <?php foreach($mahasiswa as $mhs ) : ?>
    <ul>
      <li>Nama : <?= $mhs["nama"] ?></li>
      <li>NIS : <?= $mhs["NIS"] ?></li>
      <li>Email : <?= $mhs["Email"] ?></li>
      <li>Jurusan : <?= $mhs["Jurusan"] ?></li>
      
    </ul>
  <?php endforeach; ?>
  
    <h1>Daftar Aplikasi</h1>
    <?php foreach($aplikasi as $apk ) : ?>
    <ul>
      <li>Logo : 
        <img src="./img/<?= $apk["logo"]?>">
      </li>
      <li>Nama : <?= $apk["nama"] ?></li>
      <li>Developer : <?= $apk["developer"] ?></li>
      <li>Ulasan : <?= $apk["ulasan"] ?></li>
      <li>Download : <?= $apk["download"] ?></li>
      <li>Rating : <?= $apk["rating"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>