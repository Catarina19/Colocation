<?php
/**
 * Created by PhpStorm.
 * User: Johan.VOLAND
 * Date: 16.04.2018
 * Time: 16:39
 */

ob_start();
$titre = 'Collocation - Supprimer appartement Confirmation';
?>

<h2>Confirmer suppression</h2>

<?php
$contenu=ob_get_clean();
require "gabarit.php";
?>