<aside>
<img src="../avatar.png" class="avatar" alt="avatar du joueur"/> <!-- 4couleur pour evoquer les statut physique de haut en bas : excellent,bon,moyen et critique appliquer un principe si/sinon par palier avec changement de couleur suivant la tranche atteinte (100% vert 99 a 66% jaune 65 a 33% orange 32 a 0% rouge)-->
	
	<?php
	$points_actions = 30 ;
	
		echo 'points d actions ' . $points_actions .'' ; 
		
	?>
	<?php
	$points_deplacements = 100 ;
	echo 'mouvement ' . $points_deplacements . '' ;
	?>
	<?php
	try
			{	
				$bdd = new PDO ('mysql:host=localhost;dbname=test','root','');
			}
			catch (Exception $e)
			{
				die('erreur : '. $e->getMessage());
			}
	$nom = $bdd->query('SELECT pseudo FROM  inscription');
	echo '.$nom.' ;
	?>
	
	<ul>
		<li>Niveau</li></br>
		<li>vie</li></br>
		<li>fatigue</li></br>
		<li>notoriete</li></br>
		<li>reperage</li></br>
	</ul>
	
</aside>