<?php

ob_start();
$titre = 'Colocation - Information du colocataire';
?>
<?php foreach ($resultat as $valeur) { ?>
<?php if ($valeur['id'] == $_SESSION['appart']){ ?>
    <div class="span12" id="divMain">
        <h1 style="text-align: center;">Information du colocataire</h1><br>
        <div class="span3"></div>
        <div class="span6" id="divMain">
            <table class="table" style="align-content: center">
                    <tr>
                        <td>Nom :</td>
                        <td><?= $_SESSION['prenom']; ?> <?= $_SESSION['nom']; ?></td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><?= $_SESSION['email'] ?></td>
                    </tr>
                    <tr>
                        <td>N° de tel :</td>
                        <td><?= $_SESSION['tel']; ?></td>

                    </tr>
                    <tr>
                        <td>Date de naissance :</td>
                        <td><?= $_SESSION['naissance']; ?></td>
                    </tr>
                <?php/* endif; */?>
            <?php /*}} */?>
            </table>
        </div>
    </div>
    <a href="index.php?action=detail">Retour à la page précédente</a>
<?php }}?>
<?php
$contenu=ob_get_clean();
require "gabarit.php";