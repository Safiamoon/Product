<?php
if (empty($_POST)) {
    // exit termine le script en cours en affichant un message à l'écran
    //exit("Merci de remplir le formulaire de contact");

    // Redirection : on envoie une en-tête HTTP de redirection au client
    // Il faut qu'aucun contenu HTML ou texte brut n'ait été envoyé avant
    header('Location: index.php');
    die();
}

// Traitement du formulaire
// var_dump($_POST);

echo "Merci pour votre demande, " . $_POST["nom"] . " " . $_POST["prenom"];