<?php
/**
 * Created by PhpStorm.
 * User: Johan.VOLAND
 * Date: 13.03.2018
 * Time: 10:12
 */

ob_start();
$titre = 'Collocation - Détails appartement';
?>

<!-- Contenu -->
<h1>Détails</h1>

<?php
$contenu=ob_get_clean();
require "gabarit.php";
?>
