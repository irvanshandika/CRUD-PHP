<?php
include 'koneksi.php'; //memanggil file koneksi.php

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

if (mysqli_query($koneksi, $sql)) {
  echo "Data berhasil dihapus.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>