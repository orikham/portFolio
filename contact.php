<?php include './squelette/header.php'; ?>

<section id="contact">
    <div id="titreFormulaire">
                <h1>Contacter moi via le formulaire ou viendez sur mes reseaux sociaux</h>
    </div>

    <article id="formulaire" >
        <div id="boite">
            <div id="infosContact">
                <h2>Formulaire de contact</h2>
                <p>Remplissez le formulaire ci-dessous
                        pour me contacter</p>
            </div>

            <form method="post" action="#">
                <div id="identity">
                    <div class="champ">
                        <label for="Nom">Nom : </label><br>
                        <input type="text" id="Nom" placeholder="nom">
                    </div>
                    <div class="champ">
                        <label for="Prénom">Prénom : </label><br>
                        <input type="text" id="Prénom" placeholder="Prénom">
                    </div>
                </div>
                    <div class="champ">
                        <label for="">mail : </label><br>
                        <input type="email" id="mail" style="width:400px;" placeholder="Monadresse@mail.com">
                    </div><br>
                    <div class="champ">
                        <label for="Message"> Message : </label><br>
                        <input type="text" id="Message" style="width:400px;" placeholder="Votre message/demande d'information">
                    </div>
                    <summit class="formu">Envoyer</button>
            </form>
        </div>
        <img src="./IMG/reseauxSociaux.png" alt="social picture" width="500px">
    </article>
</section>
