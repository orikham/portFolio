<?php
session_start() ;
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="../squelette/header.css"/>
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

<aside>
<form method="post" action="jouer.php">
<input type="submit" value="attaque" name="$attaque" />
</form>
<a href="-1.php"><img src="gauche.png" alt="fleche_gauche"/></a><a href=""><img src="droite.png" alt="acueill"/></a>
</aside>
	<h3>-2</h3>

 
</section>
<?php include("../squelette/infojoueur.php");?>
<?php include("../squelette/footer.php");?>
</div>
</body>
</html>