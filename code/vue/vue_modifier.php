<?php

ob_start();
$titre = 'Collocation - Modifier appartement';
?>

    <!-- Contenu -->
    <h1>Modifier</h1>

<?php
$contenu=ob_get_clean();
require "gabarit.php";
?>