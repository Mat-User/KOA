<?php

include("connect.php");
include("functions.php");

if(logged_in()) {

?>
<!Doctype html>

<html lang="de">

<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="5; URL=http://localhost/MyProjects/Git-Kingonair/main.php">
	<title>Zur Homepage...</title>
	<link href="css/login.css" rel="stylesheet">	
</head>

<body>
	<div id="wrapper">

		<table id="forwardscreen">
			<tr>
				<td><h3>Wenn du nicht in wenigen Sekunden weitergeleitet wirst klicke bitte hier<a href="main.php"> Klick </a><h3>
					
				</td>
			</tr>
		</table>	

	</div>	<!--Ende Wrapper-->
</body>
</html>	

<?php
} else {
	header("location: index.php");
	exit(); // can be removed if nothing below
}
?>


