<?php
if(isset($_POST['submit'])){         //on recuperes les infos du formulaire sous forme d'array
    $destinataire = "dimitridevweb@hotmail.fr";
    $sujet = $_POST['subject'];
    $message = $_POST['Message'];
    $nom = $_POST['Nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['mail'];
    $origine = "en provenance de portfolio";
    
    if(empty($nom) || empty($prenom) || empty($email) || empty($sujet) || empty($message)){             //on verifie que les champs sont tous remplis 
        echo "Veuillez remplir tous les champs.";
    } else {

        $contenu .= "origine: $origine\n\n";
        $contenu = "Nom: $nom\n";                      //si touys les champs sont remplis correctement on recupere a nouveaux les données pour les mettre en forme pour presenter le mail 
        $contenu .= "Prénom: $prenom\n";
        $contenu .= "E-mail: $email\n\n";
        $contenu .= "Message:\n$message\n";
        
        $headers = "From: $nom <$email>\r\n";           //indique le nom et l'adresse electronique de l'éxpéditeur
        $headers .= "Reply-To: $email\r\n";             //indique l'adresse mail qui recevra la reponse du destinataire 
        $headers .= "MIME-Version: 1.0\r\n";            //utilisation de MIME standars de messagerie qui permet d'inclure des éléments multimédias dans les messages électroniques.
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        
        mail($destinataire, $sujet,  $contenu, $headers);           // on envois le mail 
        
        
        header('Location: ./index.php ');                   //redirection vers l'accueil une fois le mail bien envoyer 
        exit;
    }
}
?>