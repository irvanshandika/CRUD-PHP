<!DOCTYPE html>
<html>
<head>
  <title>Form Edit Data</title>
</head>
<body>
  <?php
  include 'koneksi.php'; //memanggil file koneksi.php

  $id = $_GET['id'];

  $sql = "SELECT * FROM users WHERE id=$id";
  $result = mysqli_query($koneksi, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    echo "Tidak ada data.";
  }

  mysqli_close($koneksi);
  ?>

  <h1>Form Edit Data</h1>
  <form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>Nama:</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
    <label>Telepon:</label>
    <input type="text" name="telepon" value="<?php echo $row['telepon']; ?>"><br>
    <button type="submit">Simpan</button>
  </form>
</body>
</html>
