<?php

include("connect.php");
include("functions.php");

if(logged_in()) {
	echo "You are logged in";
?>
	<p>Du wirst jetzt zur Homepage weitergeleitet
	<?php header("location: main.php"); ?>

<?php
} else {
	header("location: index.php");
	exit(); // can be removed if nothing below
}
?>


