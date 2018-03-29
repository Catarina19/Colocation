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

                <td>Adresse : </td>
                <td><input type="text" name="adresse" value="<?= @$_POST['adresse']; ?>" required></td>
            </tr>
            <!-- Gestion de la ville/commune -->
            <tr>
                <td>NPA : </td>
                <td><input type="text" name="npa" value="<?= @$_POST['npa']; ?>" required></td>

                <td>
                    <input type="radio" name="commune/ville" value="buttonCommune" id="boutonCommune"> Village<br>
                    <input type="radio" name="commune/ville" id="boutonVille" value="buttonVille"> Ville
                </td>
                <td>
                    <input type="text" name="ville" id="commune" value="<?= @$_POST['ville']; ?>">
                    <select name="ville" id="ville">
                        <option value="aarau">Aarau</option>
                        <option value="adliswil">Adliswil</option>
                        <option value="Aesch">Aesch</option>
                        <option value="aigle">Aigle</option>
                        <option value="altdorf">Altdorf</option>
                        <option value="appenzell">Appenzell</option>
                        <option value="bale">Bâle</option>
                        <option value="berne">Berne</option>
                        <option value="bienne">Bienne</option>
                        <option value="bussigny">Bussigny</option>
                        <option value="carouge">Carouge</option>
                        <option value="ecublens">Ecublens</option>
                        <option value="fribourg">Fribourg</option>
                        <option value="geneve">Genève</option>
                        <option value="gland">Gland</option>
                        <option value="chauxdefonds">La Chaux-de-Fonds</option>
                        <option value="lausanne">Lausanne</option>
                        <option value="lucerne">Lucerne</option>
                        <option value="lugano">Lugano</option>
                        <option value="meyrin">Meyrin</option>
                        <option value="montreux">Montreux</option>
                        <option value="morat">Morat</option>
                        <option value="morges">Morges</option>
                        <option value="neuchatel">Neuchâtel</option>
                        <option value="nyon">Nyon</option>
                        <option value="payerne">Payerne</option>
                        <option value="prilly">Prilly</option>
                        <option value="renens">Renens</option>
                        <option value="sion">Sion</option>
                        <option value="vevey">Vevey</option>
                        <option value="yverdon">Yverdon-les-Bains</option>
                        <option value="zurich">Zurich</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Description : </td>
                <td><textarea name="description" required></textarea></td>
            </tr>
            <tr>
                <td>Date de disponibilité : </td>
                <td><input type="date" name="disponibilite" value="<?= @$_POST['disponibilite']; ?>" required></td>

                <td>Prix : </td>
                <td><input type="text" name="prix" value="<?= @$_POST['prix']; ?>" required> CHF</td>
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
