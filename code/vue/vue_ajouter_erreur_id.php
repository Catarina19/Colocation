<?php
/**
 * Created by PhpStorm.
 * User: Johan_2
 * Date: 21.04.2018
 * Time: 14:46
 */

// tampon de flux stocké en mémoire
ob_start();
$titre="Appartager  - Ajouter un appartement erreur d'ID";
?>

<header>
    <h2>Cette ID existe déjà</h2>
    <a href="index.php?action=vue_ajouter" class="btn btn-default">OK</a>
</header>

<?php
  $contenu = ob_get_clean();
  require "gabarit.php";