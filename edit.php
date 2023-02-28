<?php
include 'koneksi.php'; //memanggil file koneksi.php

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];

$sql = "UPDATE users SET nama='$nama', email='$email', telepon='$telepon' WHERE id=$id";

if (mysqli_query($koneksi, $sql)) {
  echo "Data berhasil diedit.";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>