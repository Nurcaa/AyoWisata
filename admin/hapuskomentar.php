<h2>Hapus Komentar</h2>
<?php
	$result = $db->query("SELECT * FROM komentar WHERE id_komentar='$_GET[id]'");
	$row = $result->fetch_assoc();


	$db->query("DELETE FROM Komentar WHERE id_komentar='$_GET[id]'");

	echo "<script>alert('Data komentar terhapus');</script>";
	echo "<script>location='index.php?halaman=komentar';</script>";
?>