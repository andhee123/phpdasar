<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan1</title>
</head>
<body>
  <?php
    $angka = [
      [1,2,3],
      [4,5,6],
      [7,8,9]
    ];
  ?>

  <?php foreach($angka as $a) : ?>
    <?php foreach( $a as $b ) : ?>
      <div> <?= $b; ?>  </div>
    <?php endforeach; ?>
  <?php endforeach; ?>
</body>
</html>