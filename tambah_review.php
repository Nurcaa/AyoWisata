<?php
include 'koneksi.php';

$pengirim = $_POST["pengirim"];
$isi_review = $_POST["isi_review"];
$id_review= $_POST["id_review"];

$query = "INSERT INTO review (parent_id, isi_review, pengirim) VALUES (?, ?, ?)";
$dewan1 = $db1->prepare($query);
$dewan1->bind_param("sss", $id_review, $isi_review, $pengirim);
$dewan1->execute();
?>
