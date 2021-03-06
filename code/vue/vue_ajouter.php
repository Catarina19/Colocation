<?php
/**
 * Created by PhpStorm.
 * User: Johan.VOLAND
 * Date: 13.03.2018
 * Time: 10:16
 */

ob_start();
$titre = 'Appartager - Ajouter une proposition';
?>

<!-- Contenu -->
<div class="span12" id="divMain">
    <h1>Ajouter un appartement</h1>
    <p>
    <form class="form" method="POST" action="index.php?action=ajout">
        <table class="table">
            <tr>
                <td>ID :</td>
                <td><input type="number" name="IDappart" value="<?=@$_POST['IDappart'];?>" required placeholder="Veuillez inscrire un ID"></td>

                <td>Titre :</td>
                <td><input type="text" name="titre" value="<?=@$_POST['titre'];?>" required placeholder="Inscrire un nom à l'appart."></td>

                <td>Région : </td>
                <td>
                    <select name="region">
                        <option value="zurich">Zurich</option>
                        <option value="berne">Berne</option>
                        <option value="lucerne">Lucerne</option>
                        <option value="uri">Uri</option>
                        <option value="schwytz">Schwytz</option>
                        <option value="obwald">Obwald</option>
                        <option value="nidwald">Nidwald</option>
                        <option value="glaris">Glaris</option>
                        <option value="zoug">Zoug</option>
                        <option value="fribourg">Fribourg</option>
                        <option value="soleure">Soleure</option>
                        <option value="bale-ville">Bâle-Ville</option>
                        <option value="bale-campagne">Bâle-Campagne</option>
                        <option value="schaffhouse">Schaffhouse</option>
                        <option value="appenzell_rhodes-ext">Appenzell Rhode-Exérieures</option>
                        <option value="appenzell_rhodes-int">Appenzell Rhode-Intérieures</option>
                        <option value="st-gall">Saint-Gall</option>
                        <option value="grisons">Grisons</option>
                        <option value="argovie">Argovie</option>
                        <option value="thurgovie">Thurgovie</option>
                        <option value="tessin">Tessin</option>
                        <option value="vaud">Vaud</option>
                        <option value="valais">Valais</option>
                        <option value="neuchatel">Neuchâtel</option>
                        <option value="geneve">Genêve</option>
                        <option value="jura">Jura</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Adresse : </td>
                <td><input type="text" name="adresse" value="<?= @$_POST['adresse']; ?>" required placeholder="Veuillez inscrire l'adresse"></td>

                <td>NPA : </td>
                <td><input type="number" name="npa" value="<?= @$_POST['npa']; ?>" required placeholder="Veuillez inscrire le NPA"></td>

                <td>Ville : </td>
                <td><input type="text" name="ville" value="<?= @$_POST['ville']; ?>" required placeholder="Veuillez inscrire la ville"></td>
            </tr>

            <tr>
                <td>Description : </td>
                <td><textarea name="description" required></textarea></td>
            </tr>

            <tr>
                <td>Date de disponibilité : </td>
                <td><input type="date" name="disponibilite" value="<?= @$_POST['disponibilite']; ?>" required></td>

                <td>Prix : </td>
                <td><input type="number" name="prix" value="<?= @$_POST['prix']; ?>" required> CHF</td>
            </tr>
            <tr>
                <td>Images de l'appartement : </td>
                <td>
                    <div class="box__input">
                        <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple required/>
                    </div>
                </td>
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
