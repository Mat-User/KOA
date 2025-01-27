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
	<title>DJ-KINGONAIR - Foto Gallerie</title>
	<link href="img/icons/favicon_1.ico" rel="shortcut icon">
	<link href="css/central.css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		#photogallery {
			display: flex;
		}
		#photogallery .photofile {
			flex: 1;
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
					<h2 class="maintitle">Foto Gallerie</h2>
				<div class="photogallery headerbild flexslider"> 
      <ul class="slides">
         <li>
         <img srcset="img/FotoGallery/1_small.jpg 400w, 
                      img/FotoGallery/1_medium.jpg 800w,
					  img/FotoGallery/1_large.jpg 1600w"
               sizes="50vw"
                      
                 alt="The Studio"> 
         </li>
         <li>
         <img srcset="img/FotoGallery/equip_1.jpg 400w, 
                      img/FotoGallery/2_medium.jpg 800w"
               sizes="50vw"
                      
                 alt="Equipment"> 
         </li>
         <li>
         <img srcset="img/FotoGallery/wall.jpg 400w, 
                   	  img/FotoGallery/3_medium.jpg 800w"
               sizes="50vw"
                      
                 alt="DJ-Kingonair"> 
         </li>
        </ul> <!-- Ende .slides --> 
    	    </div>
			</section>	






<!--<div id="photogallery">					
						<figure class="photofile">
							<img src="img/FotoGallery/studio.jpg" width="345" height="345" alt="Black Light" />
							<figcaption>Schwarzlicht im Studio</figcaption>
						</figure>
						<figure class="photofile">
							<img src="img/FotoGallery/equip_1.jpg" width="345" height="345" alt="Equipment" />
							<figcaption>Mein Equipment</figcaption>
						</figure>
							<figure class="photofile">
							<img src="img/FotoGallery/wall.jpg" width="345" height="345" alt="Black Light" />
							<figcaption>Ich und die Wand</figcaption>
						</figure>	
						<figure class="photofile">
							<img src="img/FotoGallery/room.jpg" width="1100" height="400" alt="The Room" />
							<figcaption>Mein Zuhause</figcaption>
					</figure> 
									
					</div>-->
				
				
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

<!----------Einbindung von JQuery---------------->
	<script src="js/jquery-2.2.3.min.js"></script>
<!-- Einbindung des FlexSlider 2 --> 
<script src="js/jquery.flexslider-min.js"></script>

<!-- Aktivierung und Konfiguration von FlexSlider --> 
<script>
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide"
    });
  });
</script>

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

