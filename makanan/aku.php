<?php

  require_once "koneksi.php";

  $d=$_GET['d'];

  $con=mysqli_query($koneksi, "delete from makanan where id_makanan='$d'");

  if ($con) {
    echo "berhasil";
  }else {
    echo "gagal" ;
   
}
header("refresh:1 ; iki.php");
 ?>
