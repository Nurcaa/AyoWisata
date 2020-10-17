<h2>Edit Komentar</h2>
<?php
	$result = $db->query("SELECT * FROM komentar WHERE id_komentar='$_GET[id]'");
	$row = $result->fetch_assoc();

	echo "<pre>";
	print_r($row);
	echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>tanggal posting</label>
		<input type="text" name="tanggal" class="form-control" value="<?php echo $row['tanggal']; ?>">
	</div>

	<div class="form-group">
		<label>isi komentar</label>
		<input type="text" name="isi_komentar" class="form-control" value="<?php echo $row['isi_komentar'];?>">
	</div>

	<div class="form-group">
		<label>pengirim</label>
		<input type="text" name="pengirim" class="form-control" value="<?php echo $row['pengirim'];?>">
	</div>

<button class="btn btn-primary" name="Edit">Edit</button>
</form>

<?php
if (isset($_POST['Edit'])) {
	$db->query("UPDATE Komentar SET tgl_posting='$_POST[tanggal]', isi_komentar='$_POST[isi_komentar]', pengirim='$_POST[pengirim]' WHERE id_komentar='$_GET[id]'");


	echo "<script>alert('komentar berhasil di edit');</script>";
echo "<script>location='index.php?halaman=komentar';</script>";
}


?>