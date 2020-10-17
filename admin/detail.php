<h2>Detail Daftar Wisata</h2>
<?php  
$db = new mysqli("localhost", "root", "", "db_ayowisata");


$result = $db->query("SELECT * FROM daftar_wisata WHERE id_wisata='$_GET[id]' ");
$detail = $result->fetch_assoc();
?>

<pre><?php print_r($detail); ?></pre>
