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
<?php if ($valeur['region'] == @$_POST['filtreRegion'] || @$_POST['filtreRegion'] == "#"){ ?>
        <div class="thumbnail">
            <img src="../contenu/images/pic01.jpg" width="300" height="300" />
            <h5><?=$valeur['titre'];?></h5>
            <p><?=$valeur['description'];?></p>
            <a href="index.php">Détails</a>
        </div>
    <?php }} ?>

<?php
  $contenu=ob_get_clean();
  require "gabarit.php";
  ?>