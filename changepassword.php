<?php

	include("connect.php");
	include("functions.php");

	$error = "";
	$success = "";

	if(isset($_POST['savepass'])){
		$password = $_POST['password'];
		$confirmPassword = $_POST['passwordConfirm'];
		if(strlen($password) < 8) {
			$error = "Das Passwort muss mindestens 8 Buchstaben enthalten";
		} else if($password !== $confirmPassword) {
			$error = "Das Passwort ist nicht in beiden Eingabefeldern identisch";
		} else {
			$password = md5($password);	// Secure Password 

			$email = $_SESSION['email'];
			if(mysqli_query($con, "UPDATE users SET password='$password' WHERE email='$email'")) {
				$success = "Passwort wurde erfolgreich geändert, <a href='profile.php'> hier klicken </a>um zurück zum Profil zu gelangen";
			}
		}
	}
	if(logged_in()) {
	?> 
	<!Doctype html>

	<html lang="de">

	<head>
		<meta charset="utf-8">
		<title>Passwortwechsel</title>
		<link href="css/login.css" rel="stylesheet">	
	</head>

	<body>
	<form method="POST" action="changepassword.php">

		<table id="passwordscreen">
		<tr>	
			<td><label>Neues Passwort:</label></td>
			<td><input type="password" name="password" size="25" /></td>
		</tr>
		<tr>
			<td><label>Re-Enter Passwort:</label></td>
			<td><input type="password" name="passwordConfirm" size="25" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="savepass" class="theButtons" value="Passwort speichern" /></td>
		</tr>
		<tr>
			<td colspan="2"><div id="error" style=" <?php if(($error !="") 							{ ?>
							display: block; <?php
						 } ?> ">
							<?php echo $error; ?></div>
			</td>
			<td colspan="2"><div id="success" style=" <?php if($success !="") 							{ ?>
							display: block; <?php
						 } ?> ">
							<?php echo $success; ?></div>
			</td>
		</tr>
		</table>
	
	</form>
	</body>
	</html>

	<?php
	} else {
		header("location: profile.php");	// we only want logged in users to change password
	}
