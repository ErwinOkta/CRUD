<?php

  require_once "koneksi.php";
if (isset($_POST['submit'])) {
  
  $nama_makanan=$_POST['nama_makanan'];
  $harga=$_POST['harga'];
  $jenis=$_POST['jenis'];

    $con= mysqli_query($koneksi, "INSERT INTO makanan (nama_makanan, harga, jenis)
    values ('$nama_makanan', '$harga', '$jenis')");
    echo "berhasil";
    header("refresh:1 ; iki.php");
}mysqli_close($koneksi);
?>

