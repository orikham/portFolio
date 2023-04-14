<?php

session_start() ;
?>


<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet"  href="../squelette/header.css"/>
	</head>
		<body>
		<div id="bloc_page">
<?php include("../squelette/banniere.php");?>
<?php include("../squelette/menus.php");?>

<section>
<article> <p>news</p> </article>
<article> <p>classement kill</p> </article>
<article> <p>classement honneur</p> </article>
<article> <p>activités récentes</p> </article>
</section>

<?php include("../squelette/infojoueur.php");?>
<?php include("../squelette/footer.php");?>
</div>
</body>
</html>