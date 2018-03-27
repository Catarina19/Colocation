<?php

ob_start();
$titre = 'Collocation - Détails appartement';
?>

<!-- Contenu -->
<?php foreach ($resultat as $valeur) { ?>
<?php if ($valeur['id'] == $_SESSION['appart']){ ?>
    <div class="span12">
        <h1 style="text-align: center"><?= $valeur['titre']; ?></h1>
    </div>

    <div class="span12">
        <br><br>
        <p style="text-align: center">Carrousel images</p>
        <br><br>
    </div>

    <div class="span12">
        <div class="span2">
            Emplacement :<br><br><br><br>
            Date de disponibilité :<br><br>
            Prix :<br><br>
            Description :<br><br>
        </div>
        <div class="span8">
            <?= $valeur['adresse']; ?><br>
            <?= $valeur['npa']; ?> <?= $valeur['ville']; ?><br>
            Dans la région de <?= $valeur['region']; ?><br><br>

            <?= $valeur['date_disponibilite']; ?><br><br>
            <?= $valeur['prix']; ?> CHF<br><br>
            <?= $valeur['description']; ?><br><br>
        </div>
    </div>
<?php }}?>
<div class="span12">
    <p>Visiteur : <a href="#">Informations colocataire</a> <a href="#">Message</a></p><br>
    <p>Membre : <a href="#">Informations colocataire</a> <a href="#">Contacter</a></p><br>
    <p>
        Proprio :
        <a href="index.php?action=modifier"><i class="general foundicon-edit icon"></i></a> -
        <a href="index.php?action=supprimer"><i class="general foundicon-remove icon"></i></a>
    </p>
</div>
<?php
$contenu=ob_get_clean();
require "gabarit.php";
?>
