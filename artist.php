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
	<title>DJ-KINGONAIR - Artist</title>
	<link href="img/icons/favicon_1.ico" rel="shortcut icon">
	<link href="css/central.css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width" initial-scale="1.0">
 	
	<style>
		/*---------UeberMich & float & clear---------------*/

		div.uebermich {
			font-size: 20px;
		}
		div.lebenslauf {
			font-size: 18px;
			text-align: center;
		}
		.floatleft {
			float: left;
			margin-right: 10px;
			margin-bottom: 10px;
		}
		.floatright {
			float: right;
			margin-left: 10px;
			margin-bottom: 10px;
		}
		.imageborder {
			padding: 3px;
			border: 3px solid #ccc;
			border-radius: 5px;
		}
		.clearing {
			clear: both;
		}
		.headergroup {
			text-align: center;
			padding-bottom: 30px;
		}
	</style>
</head>
<body>
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

				<nav id="top_menu" role="navigation">

					<ul class="navmain level1">			
						<li><a href="register.html">Register</a></li>
						<li><a href="login.html">Login</a></li>
					</ul>

					<form class="suchformular" action="#">
						<input type="text" 
							   name="suchfeld" 
							   id="suchfeld" 
							   size="15" 
							   maxlength="60">
						<input type="image" 
							   alt="Suchen" 
							   class="lupe" 
							   src="img/icons/lupe.png">
	 				</form>

				</nav>			
			</header>

			<section id="foto_display">
				<!--Optional Photo-->
			</section>
			
			<div id="main_flex">
				<section id="left_side">				
					<nav id="side_menu" role="navigation">
						<ul class="navside">			
							<li><a href="index.php">Home</a></li>
							<li><a href="artist.php" class="current">Artist</a></li>
							<li><a href="multimedia.php">Multimedia</a></li>
							<li><a href="produktion.php">Produktion</a></li>
							<li><a href="kontakt.php">Kontakt</a></li>
						</ul>
					</nav>
				</section>

			<section id="main_section">
				<article>
						<hgroup class="headergroup">			
							<h2>The Artist - DJ-KINGONAIR</h2>
							<h3>Über mich</h3>
						</hgroup>
				<div class="uebermich">
				<p><img src="img/FotoDisplay/DJ-K.jpg" alt="DJ-Kingonair Foto" width="400" height="398" class="imageborder floatleft">	
				Ich bin Hobby-DJ und lege gerne und viel auf.
				Außerdem produziere ich mittlerweile auch Jingles, Musikzusammenschnitte und entwerfe Covers und Flyer.
				<strong>Wie es dazu kam...</strong>
				Da mein halbes Leben aus Musik besteht und ich gerne
				andere mit meiner Musik erfreue, kam bei mir der
				Gedanke auf mich als Hobby-Discjockey ( DJ ) zu versuchen.
				Also habe mich über das Thema Discjockey schlau
				gemacht und mir das entsprechende DJ-Equipment
				gekauft. Schon bald hatte ich meine erste
				Radiopremiere...</p>
	 			<strong>Und so ging es weiter...</strong>
				</div>
					<div class="lebenslauf clearing">
					<h3>2012</h3>
					<ul class="year2012">
						<li>Am 31.12.2012 war dann also meine erste Radiopremiere bei Radio-Street-Dancer.</li>
						<li>2012 wurde ich dann Redakteur bei Ravemagazin</li>
						<li>Erstellung meiner ersten Jingles</li>		
					</ul>			
					<h3>2013</h3>
					<ul class="<year2013">
						<li>DJ / Jinglesprecher / Grafikdesign bei Radio-Street-Dancer</li>
						<li>Mehrere Events in der Cocktailbar Heavens</li>
						<li>Wechsel zu 7-DreamRadio</li>
						<li>01.01.2013 Gründung des "JumpDeeProject" DJ-Teams mit DJ-Flash. Leider
						wurde DJ-Flash 1 Jahr später von dem DJ-Team entfernt...</li>
					</ul>			
					<h3>2014</h3>
					<ul class="year2014">
						<li>Zwischenzeitlich bei Radio-Miami-Dreams</li>
						<li>DJ / Jinglesprecher / Grafikdesigner / Techniker / Betreuung und mehr bei Radio-Power-Beat</li>
					</ul>			
					<h3>2015</h3>
					<ul class="year2015">
						<li>Zusammenarbeit mit Patrik H.</li>
						<li>Sunbeatzradio (BEENDET!)</li>
						<li>am 12/07/2015 Auftritt auf dem Haaner-Sommer</li>
					</ul>
					</div>
				</article>
			</section>
	
			<section id="right_side">

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
