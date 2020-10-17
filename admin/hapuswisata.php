<?php
	$result = $db->query("SELECT * FROM daftar_wisata WHERE id_wisata='$_GET[id]'");
	$row = $result->fetch_assoc();


	$db->query("DELETE FROM daftar_wisata WHERE id_wisata='$_GET[id]'");

	echo "<script>alert('Data wisata terhapus');</script>";
	echo "<script>location='index.php?halaman=daftarwisata';</script>";
?>