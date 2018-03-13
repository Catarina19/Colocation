<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 12.05.2017
 * Time: 09:36
 * Updated : Nicolas.Glassey
 * Date : 14.02.2018
 */

ob_start();
$titre = 'Collocation - Appartements';

?>

<!-- Contenu -->
<h1>Les appartements</h1>

<?php
  $contenu=ob_get_clean();
  require "gabarit.php";
  ?>
