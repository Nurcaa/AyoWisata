<h2>Detail Komentar</h2>
<?php  
$db = new mysqli("localhost", "root", "", "db_ayowisata");


$result = $db->query("SELECT * FROM komentar WHERE id_komentar='$_GET[id]' ");
$detailkomentar = $result->fetch_assoc();
?>

<pre><?php print_r($detailkomentar); ?></pre>