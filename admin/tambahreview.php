<h2>Tambah Review</h2>

<form method="post" enctype="multipart/form-data"> 
	<div class="form-group">
		<label>tanggal review</label>
		<input type="text" class="form-control" name="tanggal">
	</div>
	<div class="form-group">
		<label>isi review</label>
		<input type="text" class="form-control" name="isi_review">
	</div>
	<div class="form-group">
		<label>pengirim</label>
		<input type="text" class="form-control" name="pengirim">
	</div>
	<button class="btn btn-primary" name="save">Simpan Review</button>
</form>
<?php
	if (isset($_POST['save'])) {
		$db->query("INSERT INTO review (tanggal, isi_review, pengirim) 
		VALUES('$_POST[tanggal]', '$_POST[isi_review]', '$_POST[pengirim]')");

		echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=review'>";
	}
?>
