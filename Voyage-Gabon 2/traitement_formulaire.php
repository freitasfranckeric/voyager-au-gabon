

<form action="traitement_formulaire.php" method="post">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Traitement des données, par exemple, envoyez un e-mail
    $destinataire = "votre@email.com";
    $sujet = "Nouveau message de réservation de votre site";
    $message_email = "Nom: $nom\nPrénom: $prenom\nEmail: $email\nMessage:\n$message";

    if (mail($destinataire, $sujet, $message_email)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'envoi du message.";
    }
}
?>