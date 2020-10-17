<h2>Detail Review</h2>
<?php  
$db = new mysqli("localhost", "root", "", "db_ayowisata");


$result = $db->query("SELECT * FROM review WHERE id_review='$_GET[id]' ");
$detailreview = $result->fetch_assoc();
?>

<pre><?php print_r($detailreview); ?></pre>