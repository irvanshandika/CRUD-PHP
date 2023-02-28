<?php
include 'koneksi.php'; //memanggil file koneksi.php

$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];

$sql = "INSERT INTO users (nama, email, telepon) VALUES ('$nama', '$email', '$telepon')";

if (mysqli_query($koneksi, $sql)) {
  echo "Data berhasil ditambahkan.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
