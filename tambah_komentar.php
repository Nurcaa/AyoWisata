<?php
include 'koneksi.php';

$pengirim = $_POST["pengirim"];
$isi_komentar = $_POST["isi_komentar"];
$id_komentar= $_POST["id_komentar"];

$query = "INSERT INTO komentar (parent_id, isi_komentar, pengirim) VALUES (?, ?, ?)";
$dewan1 = $db1->prepare($query);
$dewan1->bind_param("sss", $id_komentar, $isi_komentar, $pengirim);
$dewan1->execute();
?>
