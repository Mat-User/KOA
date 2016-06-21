<?php
	session_start();	// to let page know session is started

	session_destroy();
	setcookie("email","", time() - 3600);

	header("location: exit.php");

?>
