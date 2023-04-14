<?php
session_start() ;


?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet"  href="../squelette/header.css"/>
	<title>zombie anarchie : jeu</title>
	</head>
		<body>
		<div id="bloc_page">
<?php include("../squelette/banniere.php");?>
<?php include("../squelette/menus.php");?>
<section>
<p>
<a href="uno.html">							<!-- ligne 24 a 27 lien de deplacement de case provisoire -->
</a>

</p>
<?php include("../squelette/interaction.php");?>

<a href="1.php"><img src="gauche.png" alt="fleche_gauche"/></a><a href="-1.php"><img src="droite.png" alt="acueill"/></a>
<?php
{
	?>
	<section class="map">
	<p><ul>
		<li><a href="hopital.php"> aller a l'hopital 5 PA</a></li>
		<li><a href="mairie.php"> aller a mairie 5 PA</a></li>
		<li><a href="place_de_la_mairie.php"> aller a place de la mairie 5 PA</a></li>
		<li><a href="dortoirs.php"> aller a dortoirs 5 PA</a></li>
	</ul></p>
	</section>
	
<?php
}
?>
</section>
<?php include("../squelette/infojoueur.php");?>
<?php include("../squelette/footer.php");?>
</div>
</body>
</html>