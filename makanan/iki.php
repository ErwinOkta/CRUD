<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Makanan</title>
  </head>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <body>
|| <a href="iku.php">tambah data</a>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
              <table class="table table-striped" border="1">
                <tr>
                  <td>Id Makanan</td>
                  <td>Nama Makanan</td>
                  <td>Harga</td>
                  <td>Jenis</td>
                  <td colspan="2">Aksi</td>
                </tr>
                <?php
                  require_once 'koneksi.php';
                  $con=mysqli_query($koneksi, "SELECT*FROM makanan");
                  while ($data =mysqli_fetch_array($con)) {
                  ?>
                  <tr>
                    <td><?php echo $data['id_makanan']?></td> <!--database-->
                    <td><?php echo $data['nama_makanan']?></td>
                    <td><?php echo $data['harga']?></td>
                    <td><?php echo $data['jenis']?></td>
                    <td><a href="aku.php?d=<?= $data['id_makanan'] ?>">Hapus</a>
                        || <a href="edit.php?d=<?= $data['id_makanan'] ?>">Edit</a>
                  </tr>
                <?php } ?>
              </table>
             </div>
        </div>
      </div>

    </div>

       

</body>
</html>
