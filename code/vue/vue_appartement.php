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
        <option value="vaud">Vaud</option>
        <option value="fribourg">Fribourg</option>
        <option value="valais">Valais</option>
        <option value="grisons">Grisons</option>
    </select>
   <!-- Ville :
    <select name="filtreVille">
        <option value="#">Tout</option>
        <option value="lausanne">Lausanne</option>
        <option value="stecroix">Ste. Croix</option>
        <option value="fribourg">Fribourg</option>
        <option value="coire">Coire</option>
    </select>-->
    <input class="btn" type="submit" value="Chercher">
</form>

    <table class="table table-hover">

<!-- Affiche le contenu du fichier json dans un tableau -->
<?php foreach ($resultat as $valeur) { ?>
<?php if ($valeur['region'] == $_POST['filtreRegion']) ?>
    <tr>
        <td><img src="../contenu/images/pic01.jpg"></td>
        <td><?=$valeur['titre'];?></td>
        <td><?=$valeur['description'];?></td>
        <td><?=$valeur['ville'];?></td>
        <td><a href="index.php">Détails</a></td>
    </tr>

<?php
}
echo "</table>";
  $contenu=ob_get_clean();
  require "gabarit.php";
  ?>