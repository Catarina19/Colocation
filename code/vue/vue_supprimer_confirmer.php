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
<p>Voulez vous supprimer cet appartement</p>

<a href="index.php?action=vue_supprimer&id=<?=$_SESSION['appart']?>" class="btn btn-default">OUI</a>
<br/><br/>
<a href="index.php?action=detail&id=<?=$_SESSION['appart']?>" class="btn btn-default">NON</a>

<?php
$contenu=ob_get_clean();
require "gabarit.php";
?>