<?php

ob_start();
$titre = 'Appartager - Supprimer appartement';
?>

    <!-- Contenu -->
    <h1>Supprimer</h1>
    <p>Votre proposition a été supprimée.</p>

    <a href="index.php?action=vue_appartement">OK</a>

<?php
$contenu=ob_get_clean();
require "gabarit.php";
?>