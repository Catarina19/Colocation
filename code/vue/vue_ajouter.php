<?php
/**
 * Created by PhpStorm.
 * User: Johan.VOLAND
 * Date: 13.03.2018
 * Time: 10:16
 */

ob_start();
$titre = 'Collocation - Ajouter une proposition';
?>

<!-- Contenu -->
<div class="span12" id="divMain">
    <h1>Ajouter un appartement</h1>
    <p>
    <form class="form" method="POST" action="index.php?action=ajout">
        <table class="table">
            <tr>
                <td>Titre :</td>
                <td><input type="text" name="titre" value="<?=@$_POST['titre'];?>" required></td>

                <td>Région : </td>
                <td><input type="text" name="region" value="<?= @$_POST['region']; ?>" required></td>

                <td>Adresse : </td>
                <td><input type="text" name="adresse" value="<?= @$_POST['adresse']; ?>" required></td>
            </tr>
            <tr>
                <td>NPA : </td>
                <td><input type="text" name="npa" value="<?= @$_POST['npa']; ?>" required></td>

                <td>Ville : </td>
                <td><input type="text" name="ville" value="<?= @$_POST['ville']; ?>" required></td>

                <td>Description : </td>
                <td><input type="text" name="description" value="<?= @$_POST['description']; ?>" required></td>
            </tr>
            <tr>
                <td>Date de disponibilité : </td>
                <td><input type="date" name="disponibilite" value="<?= @$_POST['disponibilite']; ?>" required></td>

                <td>Prix : </td>
                <td><input type="text" name="prix" value="<?= @$_POST['prix']; ?>" required></td>
            </tr>
            <tr>
                <td><input class="btn" type="submit" value="ajouter"/></td>
            </tr>
        </table>
    </form>
    </p>
</div>


<?php
$contenu=ob_get_clean();
require "gabarit.php";
?>
