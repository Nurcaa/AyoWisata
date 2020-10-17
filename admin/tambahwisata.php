<h2>Tambah Daftar Wisata</h2>

<form method="post" enctype="multipart/form-data"> 
	<div class="form-group">
		<label>nama wisata</label>
		<input type="text" class="form-control" name="nama_wisata">
	</div>
	<div class="form-group">
		<label>alamat wisata</label>
		<input type="text" class="form-control" name="alamat_wisata">
	</div>
	<div class="form-group">
		<label>jam buka - jam tutup</label>
		<input type="text" class="form-control" name="jam_buka_dan_jam_tutup">
	</div>
	<div class="form-group">
		<label>harga tiket</label>
		<input type="number" class="form-control" name=harga_tiket>
	</div>
	<div class="form-group">
		<label>alat transportasi</label>
		<input type="text" class="form-control" name=alat_transportasi>
	</div>
	<div class="form-group">
		<label>rute perjalanan</label>
		<input type="text" class="form-control" name=rute_perjalanan>
	</div>
	<div class="form-group">
		<label>gambar</label>
		<input type="file" class="form-control" name=gambar>
	</div>
	<button class="btn btn-primary" name="save">Simpan Data Wisata</button>
</form>
<?php
	if (isset($_POST['save'])) {
		$nama = $_FILES['gambar']['name'];	
		$lokasi = $_FILES['gambar']['tmp_name'];
		move_uploaded_file($lokasi, "../images/".$nama);
		$db->query("INSERT INTO daftar_wisata (nama_wisata, alamat_wisata, jam_buka_dan_jam_tutup, harga_tiket, alat_transportasi, rute_perjalanan, gambar) 
		VALUES('$_POST[nama_wisata]', '$_POST[alamat_wisata]', '$_POST[jam_buka_dan_jam_tutup]', '$_POST[harga_tiket]', '$_POST[alat_transportasi]', '$_POST[rute_perjalanan]', '$nama')");
		// echo "string";


		echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=daftarwisata'>";
}
?>
