<?php 

$con = mysqli_connect('localhost','root','','db_ayowisata');

	if (mysqli_connect_errno()){
		die ("Could not connect to the database: <br />".
		mysqli_connect_error( ));
	}

?>