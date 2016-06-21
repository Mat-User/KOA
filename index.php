<!DOCTYPE html>
<html lang="de"">
<head>
	<meta charset="utf-8">
	<title>DJ-KINGONAIR - Home</title>
	<link href="img/icons/favicon_1.ico" rel="shortcut icon">
	<link href="css/central.css" rel="stylesheet" media="screen"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		#greetings {
					
		}
		.dj_wall {
			float: right;
		}
		#website_info {
			float: left;
			padding-left: 100px;
		}
		.tunesenergy {
			clear: both;
			float: left;
		}
	</style>
</head>
<body>
	<div id="big_wrapper">
			<header id="top_header" role="banner">					
				<h1><a href="index.php">
					<img srcset="img/logo/crown_verysmall.png 320w,
									 img/logo/crown_small.png 400w,
									 img/logo/crown_medium.png 800w"
						 sizes="50vw"
						 src="img/logo/crown_verysmall.png"
						 alt="Logo DJ-Kingonair"
						 class="logo">
					</a>		
				</h1>		
			</header>

			<section id="foto_display">
				<!--Optional Photo-->
			</section>
			
			<div id="main_flex">
				<section id="left_side">				
					<nav id="side_menu" role="navigation">
						<ul class="navside">			
							<li><a href="index.php" class="current">Home</a></li>
							<li><a href="artist.php">Artist</a></li>
							<li><a href="multimedia.php">Multimedia</a></li>
							<li><a href="produktion.php">Produktion</a></li>
							<li><a href="kontakt.php">Kontakt</a></li>
						</ul>
					</nav>

					<article class="showprofile">
						
						<h2>Dein Profil</h2>
						<table>
							<tr>
								<td><?php 
									/*
									if (logged_in()) {
									 print "<div id='loginstatus'>Status: Logged in</div>";
									} 
									*/
									?>
								</td>
							</tr>
						</table>
						
					</article>
				</section>

				<main id="main_section">
					<picture>
						<img srcset="img/FotoDisplay/wall_verysmall.png 320w,
									 img/FotoDisplay/wall_small.png 400w,
									 img/FotoDisplay/wall_medium.png 800w"
							 sizes="50vw"
							 src="img/FotoDisplay/wall_verysmall.png"
							 alt="DJ-Kingonair"
							 class="dj_wall">
					</picture>

					<article id="greetings">			
						<h2>Herzlich willkommen,</h2>
						<p>auf der <strong>offiziellen Homepage</strong> von mir für alle meine Fans.<br>
						Ich bin DJ-Kingonair und komme aus dem schönen Nordrhein-Westfalen.<br>
						Zur Zeit lege ich mit DJ-PartyArthy und DJ Hellsseller auf.<br> Zusammen sind wir das TunesEnergy DJ-Team.<br>
						Hands Up, Dance, House/Electro und Hardstyle sind meine Favouriten.<br>
						Ich erstelle Audio- sowie auch Videomixes.<br>
						Ausserdem machen wir Video-Streams wo ihr euch unsere Show live ansehen könnt.	
					</article>

					<picture>
						<img srcset="img/FotoDisplay/tunesenergy_verysmall.png 320w,
									 img/FotoDisplay/tunesenergy_small.png 400w,
									 img/FotoDisplay/tunesenergy_medium.png 800w"
							 sizes="50vw"
							 src="img/FotoDisplay/tunesenergy_verysmall.png"
							 alt="Tunes Energy Team"
							 class="dj_wall">
					</picture>

					<article id="website_info">
						<h2>Was ihr hier alles machen könnt:</h2>
							<ul>
								<li>meine neuesten Video-Mixes schauen</li>
								<li>meine neuesten Tracks hören</li>
								<li>meine Fotogallerie betrachten</li>
								<li>meine Live-Shows mitverfolgen</li>
								<li>mehr über mich erfahren</li>
								<li>euch in mein Gästebuch eintragen</li>
							</ul>		
					</article>
				</main>
				
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
						<iframe
							 src="https://www.youtube.com/embed/znjsmdvTd-E" 					 	         frameborder="0" allowfullscreen>
						</iframe>
					</div>
				</div>
			</section>

		</div>	<!-- Ende main-flex -->
		
		<footer id="the_footer">
			
			<address id="bottom_address" role="contentinfo">
			Dj-Kingonair &bull; Kingstreet 123 &bull; 01234 DJ-Town <br>
			&nbsp; &nbsp; &nbsp;Tel: 012345/67890 &bull; Fax: 01234 567891
			</address>

		</footer>
	</div> <!-- Ende big_wrapper-->

</body>

</html>
