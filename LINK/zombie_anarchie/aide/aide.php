<?php
session_start() ;
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet"  href="../squelette/header.css"/>
	<title>zombie anarchie : aide</title>
	</head>
		<body>
		<div id="bloc_page">
<?php include("../squelette/banniere.php");?>
<?php include("../squelette/menus.php");?>
<section>
<ol>
	<li><a href="jeu.php">Le jeu</a></li>
	<li><a href="lieux.php">Les lieux</a></li>
	<li><a href="objets.php">Les objets</a></li>
</ol>

</section>

<?php include("../squelette/infojoueur.php");?>
<?php include("../squelette/footer.php");?>
</div>
</body>
</html>