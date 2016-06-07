<?php

	include("connect.php");
	include("functions.php");

	if(logged_in()) {
		header("location: profile.php");
		exit(); // don't read the below script
	}

	$error = "";
	$image = "";
// Gather Data if submit clicked

if(isset($_POST['submit'])) {

		$firstName = mysql_real_escape_string($_POST['fname']);	// Protection against SQL_Injections
		$lastName = mysql_real_escape_string($_POST['lname']);
		$email = mysql_real_escape_string($_POST['email']);
		$password = $_POST['password'];
		$passwordConfirm = $_POST['passwordConfirm'];
	
		$date = date("d.m.Y");
  
		$image = $_FILES['image']['name'];
		$tmp_image = $_FILES['image']['tmp_name'];
		$imageSize = $_FILES['image']['size'];	
		$conditions = isset($_POST['conditions']);

		/*echo $firstName.".<br>.".$lastName."<br>".$email."<br>".
		$password."<br>".$passwordConfirm."<br>".$image."<br>".$imageSize;*/
	
// Validate Values
	if(strlen($firstName) < 3) {
			$error = "Vorname ist zu kurz";	
	} else if(strlen($lastName) < 3) {
		 	$error = "Nachname ist zu kurz";
	} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error = "Bitte eine korrekte Email Adresse eingeben"; 
	} else if(email_exists($email, $con)) {
		$error = "Jemand ist schon mit dieser Emailadresse registriert";
	} else if(strlen($password) < 8) {
		$error = "Das Passwort muss mindestens 8 Buchstaben enthalten";
	} else if($password !== $passwordConfirm) {
		$error = "Das Passwort ist nicht in beiden Eingabefeldern identisch";
	} else if($image == "") {
		$error = "Bitte ein Profilbild angeben";
	} else if($imageSize > 1048576) {// not greater than 1 MB
		$error = "Das Bild darf nicht groesser als 1 MB sein";
	} else if(!$conditions) {
	 // == "on" will work but not "off" so ! is the only way 
		$error = "Bitte Checkbox für die Nutzungsbedingungen bestätigen";

	} else {
		$password = md5($password);	// Secure Password md5 Encryption
 			
		// Explode the image extension $imageExt will become an Array
			$imageExt = explode(".", $image);
			if(!empty($imageExt[1])) {			// Self Creation	
			$imageExtension = $imageExt[1];		// ! Unified Offset
			}
			if($imageExtension == 'PNG' || $imageExtension == 'png' ||
				$imageExtension == 'SVG' || $imageExtension == 'svg' ||				
				$imageExtension == 'JPG' || $imageExtension == 'jpg' ||
				$imageExtension == 'JPEG' || $imageExtension == 'jpeg') {

			// Make image unique in Database (name and extension)					 
			$image = rand(0, 100000).rand(0, 100000).rand(0, 100000).time().".".	$imageExtension;

			// imageExtension extruded - name randomized - extension included "."
$insertQuery = "INSERT INTO users(firstName, lastName, email, password, image, date) VALUES('$firstName','$lastName','$email','$password','$image', '$date')";
				// Save image in Folder while uploading file
				if(mysqli_query($con, $insertQuery)) {
					if(move_uploaded_file($tmp_image,"img/userpics/$image")) {
						$error = "Du wurdest soeben erfolgreich angemeldet<br><a href='login.php'><input type='button' class='b_regtologin' name='regtologin' value='Weiter zum Login'/></a>";			
					}else {
						$error = "Profilbild wurde nicht geladen";				
					}		
				}
			} else {
					$error ="Die Datei sollte ein Bild sein (jpg, jpeg, png, svg)";		
			}
		}
	}
?>

<!Doctype html>

<html lang="de">

<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link href="css/login.css" rel="stylesheet">	
</head>

<body>
	

	<div id="wrapper">

			<form method="post" action="register.php" enctype="multipart/form-data">
				<table id="registerscreen">
					<tr>
						<th colspan="2"><h2>Benutzer Anmeldung:</h2></th>	
					</tr>			
					<tr>
						<td><label>Vorname:</label></td>
						<td><input type="text" name="fname" class="inputFields" required /></td>
					</tr>
					<tr>				
						<td><label>Nachname:</label></td>
						<td><input type="text" name="lname" class="inputFields" required/></td>
					</tr>
					<tr>				
						<td><label>Email:</label></td>
						<td><input type="text" name="email" class="inputFields" required/></td>
					</tr>			
					<tr>	
						<td><label>Passwort:</label></td>
						<td><input type="password" name="password" class="inputFields" required/></td>
					</tr>
					<tr>
						<td><label>Passwort:</label></td>
						<td><input type="password" name="passwordConfirm" class="inputFields" required/></td>
					</tr>
					<tr>
						<td><label>Profilbild:</label></td>
						<td><input type="file" name="image" id="imageupload"/></td>
					</tr>
					<tr>
						<td colspan="2">
						<input type="checkbox" name="conditions" />
						<label>Hiermit erkläre ich mich mit den Nutzungsbedingungen, der Datenschutzerklärung und den allgemeinen Regeln einverstanden.</label></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" class="theButtons" value="Absenden" /></td>
					</tr>
					<tr>
						<td colspan="2"><div id="error" style=" <?php if($error !="") { ?>
	display: block; <?php } ?> "><?php echo $error; ?></div></td>
					</tr>
					
				</table>					
			</form>

	</div>	<!--Ende Wrapper-->

</body>
</html>