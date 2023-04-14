<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=zombie-anarchie', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$pseudo = $_POST['pseudo'];
$pass_hache = sha1(trim(strtolower($_POST['password'])));

$req = $bdd->prepare('SELECT * FROM user WHERE pseudo = :pseudo AND password = :password');
$req->execute(array(
    'pseudo' => $pseudo,
    'password' => $pass_hache
));

$utilisateur = $req->fetch();

if ($utilisateur) {
    
    header('Location: ../demarrage/accueil.php');
} else {
    
    echo 'Identifiants incorrects';

    var_dump($req->errorInfo());
}
?>