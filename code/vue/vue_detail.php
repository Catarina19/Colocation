<?php

ob_start();
$titre = 'Appartager - Détails appartement';
?>

<!-- Contenu -->
<?php foreach ($resultat as $valeur) { ?>
<?php if ($valeur['id'] == $_SESSION['appart']){ ?>

        <h1 style="text-align: center"><?= $valeur['titre']; ?></h1>

        <div class="camera_full_width">
            <div id="camera_wrap">
                <div data-src="contenu/slider-images/test_1.jpg" ><div class="camera_caption fadeFromBottom cap1">Les derniers modèles toujours à disposition.</div></div>
                <div data-src="contenu/slider-images/test_2.jpg" ><div class="camera_caption fadeFromBottom cap2">Découvrez des paysages fabuleux avec des sensations.</div></div>
            </div>
            <br style="clear:both"/><div style="margin-bottom:40px"></div>
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
        <a href="index.php?action=vue_modif&id=<?= $valeur['id'];?>"><i class="general foundicon-edit icon"></i></a>
        <a href="index.php?action=vue_supprimer_confirmer&id=<?= $valeur['id'];?>"><i class="general foundicon-remove icon"></i></a>
    </p>
</div>
<?php

$contenu=ob_get_clean();
require "gabarit.php";
?>
