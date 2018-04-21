<?php
/**
 * Created by PhpStorm.
 * User: Johan_2
 * Date: 21.04.2018
 * Time: 14:22
 */

// tampon de flux stocké en mémoire
ob_start();
$titre="Appartager - Insrciption erreur d'email";
?>

<h2>Cette adresse email existe déjà</h2>
<a href="index.php?action=vue_inscription" class="btn btn-default">OK</a>

<?php
$contenu = ob_get_clean();
require "gabarit.php";