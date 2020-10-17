<h2>Hapus Review</h2>
<?php
	$result = $db->query("SELECT * FROM review WHERE id_review='$_GET[id]'");
	$row = $result->fetch_assoc();


	$db->query("DELETE FROM review WHERE id_review='$_GET[id]'");

	echo "<script>alert('Data review terhapus');</script>";
	echo "<script>location='index.php?halaman=review';</script>";
?>