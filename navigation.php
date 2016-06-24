<?php
$navigation = ["index.php" => "Home",
			   "artist.php" => "Artist",
			   "multimedia.php" => "Multimedia",
			   "produktion.php" => "Produktion",
			   "kontakt.php" => "Kontakt"];

echo "<ul class='navside'>\n";
foreach($navigation as $nav => $titel) {
	echo "<li><a href='$nav' class='$titel'>$titel</a></li>\n";
}
echo "</ul>\n";
?>