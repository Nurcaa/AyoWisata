<h2>Edit Review</h2>
<?php
	$result = $db->query("SELECT * FROM review WHERE id_review='$_GET[id]'");
	$row = $result->fetch_assoc();

	echo "<pre>";
	print_r($row);
	echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>tanggal review</label>
		<input type="text" name="tanggal" class="form-control" value="<?php echo $row['tanggal']; ?>">
	</div>

	<div class="form-group">
		<label>isi review</label>
		<input type="text" name="isi_review" class="form-control" value="<?php echo $row['isi_review'];?>">
	</div>

	<div class="form-group">
		<label>pengirim</label>
		<input type="text" name="pengirim" class="form-control" value="<?php echo $row['pengirim'];?>">
	</div>

<button class="btn btn-primary" name="Edit">Edit</button>
</form>

<?php
if (isset($_POST['Edit'])) {
	$db->query("UPDATE review SET tgl_review='$_POST[tanggal]', isi_review='$_POST[isi_review]', pengirim='$_POST[pengirim]' WHERE id_review='$_GET[id]'");


	echo "<script>alert('review berhasil di edit');</script>";
echo "<script>location='index.php?halaman=review';</script>";
}


?>