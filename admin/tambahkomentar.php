<h2>Tambah Komentar</h2>

<form method="post" enctype="multipart/form-data"> 
	<div class="form-group">
		<label>tanggal </label>
		<input type="text" class="form-control" name="tanggal">
	</div>
	<div class="form-group">
		<label>isi komentar</label>
		<input type="deskripsi" class="form-control" name="isi_komentar">
	</div>
	<div class="form-group">
		<label>pengirim</label>
		<input type="text" class="form-control" name="pengirim">
	</div>
	<button class="btn btn-primary" name="save">Simpan Komentar</button>
</form>
<?php
	if (isset($_POST['save'])) {
		$db->query("INSERT INTO komentar (tgl_posting, isi_komentar, pengirim) 
		VALUES('$_POST[tanggal]', '$_POST[isi_komentar]', '$_POST[pengirim]')");

		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=komentar'>";
	}
?>
