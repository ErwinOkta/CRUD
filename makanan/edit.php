<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<a href="iku.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php
    require_once 'koneksi.php';
    $d=$_GET['d'];
    $con=mysqli_query($koneksi, "SELECT*FROM makanan where id_makanan='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="update.php" method="post">
		<table>
			<tr>
				<td>makanan</td>
				<td>
					<input type="text" name="idm" value="<?php echo $data['id_makanan'] ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>makanan</td>
				<td>
					<input type="text" name="nama_makanan" value="<?php echo $data['nama_makanan'] ?>">
				</td>
			</tr>
			<tr>
				<td>harga</td>
				<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>
			</tr>
			<tr>
				<td>jenis</td>
				<td><input type="text" name="jenis" value="<?php echo $data['jenis'] ?>"></td>
			</tr>
      
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>

	<?php } ?>
</body>

</html>

