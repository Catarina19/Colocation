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
$titre = 'Appartager - Appartements';

?>

<!-- Contenu -->
    <h1>Nos propositions</h1>

    <!-- Filtres -->
<form class="form" method="post" action="index.php?action=vue_appartement">
    Région :
    <select name="filtreRegion">
        <option value="#">Tout</option>
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
    <input class="btn" type="submit" value="Chercher">
</form>

<!-- Affiche le contenu du fichier json dans un tableau -->
<?php foreach ($resultat as $valeur) { ?>

<!-- Sélectionne les offres selon le filtre -->

<?php if ($valeur['region'] == @$_POST['filtreRegion'] ||  @$_POST['filtreRegion'] == "#"){ ?>
        <div class="span12" id="profil_appart" style="border: 1px solid black; border-radius: 5px; padding: 15px; border-collapse: separate; margin: 5px">
            <!-- <img src="../contenu/images/pic01.jpg">-->
            <?= $valeur['titre']; ?><br/>
            Description :
            <?= $valeur['description']; ?><br/>
            Ville :
            <?= $valeur['ville']; ?><br/>
            <a href="index.php?action=detail&id=<?=$valeur['id']?>">Détails</a>
        </div>

        <!-- Si on n'a appliqué aucun filtre affiche tout-->
    <?php }else if (@$_POST['filtreRegion'] == null){ ?>
        <div class="span12" id="profil_appart" style="border: 1px solid black; border-radius: 5px; padding: 15px; border-collapse: separate; margin: 5px">
           <!-- <img src="../contenu/images/pic01.jpg"> -->
            <?= $valeur['titre']; ?><br/>
            Description :
            <?= $valeur['description']; ?><br/>
            Ville :
            <?= $valeur['ville']; ?><br/>
            <a href="index.php?action=detail&id=<?=$valeur['id']?>">Détails</a>
        </div>
<?php }} ?>

<?php
  $contenu=ob_get_clean();
  require "gabarit.php";
  ?>