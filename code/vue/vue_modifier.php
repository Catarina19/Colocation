<?php

ob_start();
$titre = 'Collocation - Modifier appartement';
?>

    <!-- Contenu -->
    <h1>Modifier</h1>

    <?php foreach ($resultat as $valeur) { ?>
    <?php if ($valeur['id'] == $_SESSION['appart']){ ?>
    <form class="form" method="post" action="index.php?action=vue_modif">
        <table class="table">
            <tr>
                <td>Titre :</td>
                <td><input type="text" name="titre" value="<?=@$valeur['titre'];?>" required></td>

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
                <td><input type="text" name="adresse" value="<?= @$valeur['adresse']; ?>" required></td>
            </tr>
            <tr>
                <td>NPA : </td>
                <td><input type="text" name="npa" value="<?= @$valeur['npa']; ?>" required></td>

                <td>Ville : </td>
                <td><input type="text" name="ville" value="<?= @$valeur['ville']; ?>" required></td>
            </tr>

            <tr>
                <td>Description : </td>
                <td><textarea name="description" required><?= @$valeur['description'];?></textarea></td>
            </tr>
            <tr>
                <td>Date de disponibilité : </td>
                <td><input type="date" name="disponibilite" value="<?= @$valeur['date_disponibilite']; ?>" required></td>

                <td>Prix : </td>
                <td><input type="text" name="prix" value="<?= @$valeur['prix']; ?>" required> CHF</td>
            </tr>
            <tr>
                <td><input class="btn" type="submit" value="ajouter"/></td>
            </tr>
        </table>
        <?php }}?>
    </form>

<?php
$contenu=ob_get_clean();
require "gabarit.php";
?>