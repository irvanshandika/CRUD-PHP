<?php
$host = "localhost"; //alamat server
$user = "root"; //username database
$pass = ""; //password database
$db = "db_crud"; //nama database

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
