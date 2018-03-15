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
                <td>ID :</td>
                <td><input type="text" name="id" value="<?=@$_POST['id'];?>"></td>

                <td>Région : </td>
                <td><input type="text" name="region" value="<?= @$_POST['region']; ?>"></td>

                <td>Adresse : </td>
                <td><input type="text" name="adresse" value="<?= @$_POST['adresse']; ?>"></td>

                <td>NPA : </td>
                <td><input type="text" name="npa" value="<?= @$_POST['npa']; ?>"></td>
            </tr>
            <tr>
                <td>Ville : </td>
                <td><input type="text" name="ville" value="<?= @$_POST['ville']; ?>"></td>

                <td>Description : </td>
                <td><input type="text" name="description" value="<?= @$_POST['description']; ?>"></td>

                <td>Date de disponibilité : </td>
                <td><input type="date" name="diponibilite" value="<?= @$_POST['disponibilite']; ?>"></td>
            </tr>
            <tr>
                <td>Prix : </td>
                <td><input type="text" name="prix" value="<?= @$_POST['prix']; ?>"></td>
            </tr>
            <tr>
                <td><input class="btn" type="submit" value="Confirmer"/></td>
            </tr>
        </table>
    </form>
    </p>
</div>

test

<?php
$contenu=ob_get_clean();
require "gabarit.php";
?>
