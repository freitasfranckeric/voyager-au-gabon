<?php
require_once('config.php');

// Inscription d'un nouvel utilisateur
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inscription"])) {
    // ...
}

// Connexion d'un utilisateur
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["connexion"])) {
    // ...
}

// Déconnexion de l'utilisateur
if (isset($_GET["deconnexion"])) {
    // ...
}
?>
