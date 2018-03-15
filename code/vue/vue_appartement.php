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

    <table class="table textcolor">
<!-- Affiche le contenu du fichier json dans un tableau -->
    <tr>
        <td>Région</td>
        <td>Ville</td>
        <td>Prix</td>
    </tr>
<?php foreach ($resultat as $valeur) { ?>
    <tr>
        <td><?=$valeur['region'];?></td>
        <td><?=$valeur['ville'];?></td>
        <td><?=$valeur['prix'];?></td>
        <td><a href="index.php">Détails</a></td>
    </tr>
    </table>

<?php
}
  $contenu=ob_get_clean();
  require "gabarit.php";
  ?>