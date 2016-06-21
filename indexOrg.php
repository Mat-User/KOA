<?php

	include("connect.php");
	include("functions.php");

	if(logged_in()) {
		header("location: profile.php");
		exit(); // don't read the below script
	}

	$error = "";

// Gather Data if submit clicked

if(isset($_POST['submit'])) {

		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$checkbox = isset($_POST['keeplogin']);

	if(email_exists($email, $con)) {
		$result = mysqli_query($con, "SELECT password FROM users WHERE email='$email'");
		$retrievepassword = mysqli_fetch_assoc($result);	// assoc = associative - like $retrievepassword['password'] all fot all fields
	
		if(md5($password) !== $retrievepassword['password']) {
			$error = "Passwort stimmt nicht";
		}
		else {
			$_SESSION['email'] = $email;	// normally if more than one email exists done by id / when this line runs user logs in / The Login
			if($checkbox == "on") {
				setcookie("email", $email, time()
				+ 3600); // (3600 sec) key, value and more...
			}
			header("location: profile.php");
		}


	} else {
			$error = "Emailadresse existiert nicht"; 
	}
	
}
?>

<!Doctype html>

<html lang="de">

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="css/login.css" rel="stylesheet">	
</head>

<body>
	
	<div id="wrapper">

			<form method="post" action="index.php">	
				<table id="loginscreen">
					<tr>
						<th colspan="2"><h2>Login</h2></th>
					</tr>
					<tr>
						<td></td>
						<td><input type="checkbox" name="keeplogin"/><label for="keeplogin"> Eingeloggt bleiben</label><td>	
					</tr>					
					<tr>
						<td><label for="email">Email:</label></td>
						<td><input type="text" id="email" name="email" class="inputFields" required/></td>
					</tr>	
					<tr>
						<td><label for="password">Passwort:</label></td>
						<td><input type="password" name="password" class="inputFields" required/><td>
					</tr>
							
					<tr>
						<td><a href="register.php"><input type="button" class="theButtons" name="register" value="Neu Anmelden"/></a></td>	

						<td><input type="submit" name="submit" class="theButtons" value="Login"/></td>
					</tr>		
					<tr>
						<td colspan="2">
							<div id="error" style=" <?php if($error !="") { ?>display: block; <?php } ?> "><?php echo $error ?></td>

					</tr>
				</table>		
			</form>
	
	</div>	<!--Ende Wrapper-->

</body>
</html>
