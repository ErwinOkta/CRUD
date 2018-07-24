  <?php
require_once "koneksi.php";

$id = $_POST['idm'];
$nm = $_POST['nama_makanan'];
$hg = $_POST['harga'];
$jn = $_POST['jenis'];
	

  $u=mysqli_query($koneksi, "UPDATE makanan SET nama_makanan='$nm', harga=$hg, jenis='$jn' where id_makanan=$id");
  if ($u) {
    echo "<script>alert('terima kasih, data berhasil di edit')";
    header("location: iki.php");
  }else {
    echo "<script>alert('maaf, data gagal diedit')";
     header("location: iki.php");
mysqli_close($koneksi);
  }
 ?>
