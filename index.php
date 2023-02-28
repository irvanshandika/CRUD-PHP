<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
  <title>Program CRUD dengan PHP</title>
</head>
<body>
  <h1>Jadwal Pengganti</h1>
  <a href="form_tambah.php">Tambah Data</a>
  <br><br>
  <table border="1">
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Telepon</th>
      <th>Aksi</th>
    </tr>
    <?php
    include 'koneksi.php'; //memanggil file koneksi.php

    $sql = "SELECT * FROM users";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
      $no = 1;
      while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['telepon']; ?></td>
          <td>
            <a href="form_edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
            <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
          </td>
        </tr>
        <?php
      }
    } else {
      echo "Tidak ada data.";
    }

    mysqli_close($koneksi);
    ?>
  </table>
</body>
</html>
