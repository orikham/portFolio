<?php
			try
			{	
				$bdd = new PDO ('mysql:host=localhost;dbname=zombie-anarchie','root','');

			
			}
			catch (Exception $e)
			{
				die('erreur : '. $e->getMessage());
			}
			$pass_hache = sha1($_POST["password"]);
			$pseudo = $_POST["pseudo"];
			$mail = $_POST["mail"];
			$req = $bdd->prepare('INSERT INTO `user`(pseudo,password,mail)VALUES("'.$pseudo.'","'.$pass_hache.'" ,"'.$mail.'" )');
			$req->execute();
			
			header('Location: conexion.php');
			
		?>




