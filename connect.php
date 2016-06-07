<?php
	
	$con = mysqli_connect("localhost","root","","registration");
	
	if(mysqli_connect_errno()) {
		echo "Error occured while connecting with the database".mysqli_connect_errno();
	}

	session_start(); // must be in all pages would be good to put it in connect.php (for all pages available)

?>
