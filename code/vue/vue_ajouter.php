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
                <td>Région : </td>
                <td><input type="text" name="region" value="<?= @$_GET['region']; ?>"></td>

                <td>Adresse : </td>
                <td><input type="text" name="adresse" value="<?= @$_GET['adresse']; ?>"></td>

                <td>NPA : </td>
                <td><input type="text" name="npa" value="<?= @$_GET['npa']; ?>"></td>
            </tr>
            <tr>
                <td>Ville : </td>
                <td><input type="text" name="ville" value="<?= @$_GET['ville']; ?>"></td>

                <td>Description : </td>
                <td><input type="text" name="description" value="<?= @$_GET['description']; ?>"></td>

                <td>Date de disponibilité : </td>
                <td><input type="date" name="diponibilite" value="<?= @$_GET['disponibilite']; ?>"></td>
            </tr>
            <tr>
                <td>Prix : </td>
                <td><input type="text" name="prix" value="<?= @$_GET['prix']; ?>"></td>
            </tr>
            <tr>
                <td><input class="btn" type="submit" value="Confirmer"/></td>
                <td></td><td></td><td></td>
            </tr>
        </table>
    </form>
    </p>
</div>

<?php
$contenu=ob_get_clean();
require "gabarit.php";
?>
