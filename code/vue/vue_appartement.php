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
    <h1>Nos propositions</h1>
    <table class="table table-hover">
<!-- Affiche le contenu du fichier json dans un tableau -->
<?php foreach ($resultat as $valeur) { ?>
    <tr>
        <td>[image]</td>
        <td><?=$valeur['titre'];?></td>
        <td><?=$valeur['description'];?></td>
        <td><a href="index.php">Détails</a></td>
    </tr>

<?php
}
echo "</table>";
  $contenu=ob_get_clean();
  require "gabarit.php";
  ?>