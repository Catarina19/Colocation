<?php

ob_start();
$titre = 'Collocation - Détails appartement';
?>

<!-- Contenu -->
<h1>Détails</h1>

<?php foreach ($resultat as $valeur) { ?>
<?php if ($valeur['id'] == $_SESSION['appart']){ ?>
<div class="span12" id="profil_appart" style="border: 1px solid black; border-radius: 5px; padding: 15px; border-collapse: separate; margin: 5px">
    <img src="../contenu/images/pic01.jpg">
    <?= $valeur['titre']; ?>
    <?= $valeur['description']; ?>
</div>
<?php }}?>

<p>Visiteur : <a href="#">Informations colocataire</a> <a href="#">Message</a></p><br>
<p>Membre : <a href="#">Informations colocataire</a> <a href="#">Contacter</a></p><br>
<p>
    Proprio :
    <a href="index.php?action=modifier"><i class="general foundicon-edit icon"></i></a> -
    <a href="index.php?action=supprimer"><i class="general foundicon-remove icon"></i></a>
</p>
<?php
$contenu=ob_get_clean();
require "gabarit.php";
?>
