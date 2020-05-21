<?php

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <H3>Daftar Mahasiswa</H3>
  <Table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $m) :

    ?>

      <tr>
        <th><?= $i++; ?></th>
        <th><img src=img <?= $m['gambar']; ?> width="60"></th>
        <th><?= $m['nrp']; ?></th>
        <th><?= $m['nama']; ?></th>
        <th><?= $m['email']; ?></th>
        <th><?= $m['jurusan']; ?></th>
        <th>
          <a href="">Ubah</a> | <a href=""></a>
        </th>
      </tr>
    <?php endforeach; ?>
  </Table>

</body>

</html>