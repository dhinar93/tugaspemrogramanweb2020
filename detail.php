<?php
require 'functions.php';

//ambil data dari URL

$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id")
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <H3>Detail Mahasiswa</H3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>"></li>
    <li>NRP: <?= $m['nrp']; ?></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Email : <?= $m['email']; ?></li>
    <li>Jurusan : <?= $m['jurusan']; ?></li>
    <li><a href="">Ubah</a> <a href="">Hapus</a></li>
    <li><a href="latihan3.php"> Kembali ke Daftar Mahasiswa</a></li>
  </ul>
</body>

</html>