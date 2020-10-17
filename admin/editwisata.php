<h2>Edit Data Wisata</h2>

<?php
	$result = $db->query("SELECT * FROM daftar_wisata WHERE id_wisata='$_GET[id]'");
	$row = $result->fetch_assoc();

	echo "<pre>";
	print_r($row);
	echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>nama wisata</label>
		<input type="text" name="nama_wisata" class="form-control" value="<?php echo $row['nama_wisata']; ?>">
	</div>

	<div class="form-group">
		<label>alamat wisata</label>
		<input type="text" name="alamat_wisata" class="form-control" value="<?php echo $row['alamat_wisata'];?>">
	</div>

	<div class="form-group">
		<label>jam buka dan tutup</label>
		<input type="text" name="jam_buka_dan_tutup" class="form-control" value="<?php echo $row['jam_buka_dan_tutup'];?>">
	</div>

	
	<div class="form-group">
		<label>harga tiket</label>
		<input type="text" name="harga_tiket" class="form-control" value="<?php echo $row['harga_tiket'];?>">
	</div>


	<div class="form-group">
		<label>alat transportasi</label>
		<input type="text" name="alat_transportasi" class="form-control" value="<?php echo $row['alat_transportasi'];?>">
	</div>


	<div class="form-group">
		<label>rute perjalanan</label>
		<input type="text" name="rute_perjalanan" class="form-control" value="<?php echo $row['rute_perjalanan'];?>">
	</div>	

	<div class="form-group">
		<img src=".../images/<?php echo $row['gambar'] ?>" width="200">
	</div>

	<div class="form-group">
		<label>Ganti Gambar</label>
		<input type="file" name="gambar" class="form-control">
	</div>

<button class="btn btn-primary" name="Edit">Edit</button>
</form>

<?php
 if (isset($_POST['Edit'])) {

	 $nama=$_FILES['gambar'] ['name'];
	 $lokasi = $_FILES['gambar']['tmp_name'];

	 if (!empty($lokasi)) {
		 move_uploaded_file($lokasi, ".../images/".$nama);

		 	$db->query("UPDATE daftar_wisata SET nama_wisata='$_POST[nama_wisata]', alamat_wisata='$_POST[alamat_wisata]', jam_buka_dan_tutup='$_POST[jam_buka_dan_tutup]', harga_tiket='$_POST[harga_tiket]', alat_transportasi='$_POST[alat_transportasi]', rute_perjalanan='$_POST[rute_perjalanan]', '$nama' WHERE id_wisata='$_GET[id]'");
		 }
		 else {
		 		$db->query("UPDATE daftar_wisata SET nama_wisata='$_POST[nama_wisata]', alamat_wisata='$_POST[alamat_wisata]', jam_buka_dan_tutup='$_POST[jam_buka_dan_tutup]', harga_tiket='$_POST[harga_tiket]', alat_transportasi='$_POST[alat_transportasi]', rute_perjalanan='$_POST[rute_perjalanan]' WHERE id_wisata='$_GET[id]'");
		 }


	echo "<script>alert('Data Wisata berhasil di edit');</script>";
	echo "<script>location='index.php?halaman=daftarwisata';</script>";
}


?>
