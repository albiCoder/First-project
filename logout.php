<?php
	include('lidhjaDB.php');
	$_SESSION = array();
	session_destroy();
	mysqli_query($con, "DELETE FROM cart");
	header('Location: http://localhost/Projekti/Chocoo.php');
?>