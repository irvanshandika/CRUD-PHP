<?php
include 'koneksi.php'; //memanggil file koneksi.php

$sql = "SELECT * FROM users";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
  //output data dari setiap baris
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - Nama: " . $row["nama"]. " - Email: " . $row["email"]. " - Telepon: " . $row["telepon"]. "<br>";
  }
} else {
  echo "Tidak ada data.";
}

mysqli_close($koneksi);
?>
