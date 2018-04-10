<?php

ob_start();
$titre = 'Collocation - Supprimer appartement';
?>

    <!-- Contenu -->
    <h1>Supprimer</h1>
    <p>Votre proposition a été supprimée.</p>

<?php
$contenu=ob_get_clean();
require "gabarit.php";
?>