<?php
/*
include("connect.php");
include("functions.php");

if(logged_in()) {
*/	
?>
<!DOCTYPE html>
<html lang="de"">
<head>
	<meta charset="utf-8">
	<title>DJ-KINGONAIR - Kontakt</title>
	<link href="img/icons/favicon_1.ico" rel="shortcut icon">
	<link href="css/central.css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
			
	</style>
</head>
<body class="kontaktpage">
	<div id="big_wrapper">
			<header id="top_header" role="banner">					
				<h1><a href="index.php">
						<!<img --srcset="img/logo/king_crown_400x200.svg 400w,
								 img/logo/king_crown_800x200.svg 800w,
								 img/logo/king_crown_1600x200.svg 1600w"
						sizes="100vw"-->			
						<img src="img/logo/king_crown_800x200.svg"
						class="logo"
						alt="DJ-KINGONAIR"/></a>
				</h1>
			</header>

			<section id="foto_display">
				<!--Optional Photo-->
			</section>
			
			<div id="main_flex">
				<section id="left_side">				
					<nav id="side_menu" role="navigation">
						<?php 
							include("navigation.php");
						?>	
					</nav>
				</section>

				<section id="main_section">
					<article>
						<h2 class="maintitle">Kontakt</h2>
						<form class="kontaktformular" method="post" action="kontakt.php">			
						<!--<form class="kontaktformular" action="http://www.formular-chef.de/fc.cgi" method="post">
						<input type="hidden" name="empfaenger" value="...">-->
							<div>
								<label for="besuchername">Name:</label>
								<input type="text" id="besuchername" name="besuchername">
							</div>
							<div>
								<label for="besuchermail">E-Mail:</label>
								<input type="email" id="besuchermail" name="besuchermail">
							</div>
							<div>
								<label for="nachricht">Nachricht:</label>
								<textarea id="nachricht" name="nachricht"
										cols="20" rows="5"></textarea>
							</div>
							<div>
								<input type="submit" value="Abschicken">
							</div>
						</form>			
					</article>
				</section>
				
			<section id="right_side">

				<section id="searchandlogout">
					<table>
						<tr>					
							<td>
							<form class="suchformular" action="searchbar.php">
								<input type="text" 
								   name="suchfeld" 
								   class="suchfeld" 
								   maxlength="60">
								<input type="image" 
								   alt="Suchen" 
								   class="lupe" 
								   src="img/icons/lupe.png">
							</form>
							</td>

							<td id="logoutbutton" rowspan="2">
								<a href="logout.php">Logout</a>
							</td>
						</tr>
						
						<tr>
							<td id="changepassword">				
								<a href="changepassword.php">Passwort ändern</a>
							</td>
						</tr>	
		 			</table>		
				</section>

				<section id="social_icons">
					<p>Follow me on:</p>
					<img src="img/icons/Icon_facebook_gray.png"
							 class="facebook"
							 alt="Facebook"
							 width="45"
							 height="45">
					<img src="img/icons/Icon_twitter_gray.png"
							 class="twitter"
							 alt="Twitter"
							 width="45"
							 height="45">
					<img src="img/icons/Icon_skype_gray.png"
							 class="skype"
							 alt="skype"
							 width="45"
							 height="45">
					<img src="img/icons/Icon_youtube_gray.png"
							 class="youtube"
							 alt="youtube"
							 width="45"
							 height="45">
					<img src="img/icons/Icon_instagram_gray.png"
							 class="instagram"
							 alt="instagram"
							 width="45"
							 height="45">
					<img src="img/icons/Icon_google_gray.png"
							 class="google"
							 alt="google"
							 width="45"
							 height="45">
				</section>

				<div id="side_news">
					<h3>Der neuste Mix:</h3>
					<div class="mainvideo">
						<iframe width="320" height="180"
							 src="https://www.youtube.com/embed/znjsmdvTd-E" 					 	         frameborder="0" allowfullscreen>
						</iframe>
					</div>
				</div>
			</section>

		</div>	<!-- Ende main-flex -->
		
		<footer id="the_footer">
			
			<address id="bottom_address">
			Dj-Kingonair &bull; Kingstreet 123 &bull; 01234 DJ-Town <br>
			&nbsp; &nbsp; &nbsp;Tel: 012345/67890 &bull; Fax: 01234 567891
			</address>

		</footer>
	</div> <!-- Ende big_wrapper-->
</body>

</html>

<?php
/*
} else {
	echo "<div id='loginstatusred'>You are logged out</div>";
	header("location: index.php");
	exit(); // can be removed if nothing below
}
*/
?>
