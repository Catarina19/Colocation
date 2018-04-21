<?php

ob_start();
$titre = 'Appartager - Message reçus';
?>

    <div class="span12" id="divMain">
        <h1 style="text-align: center;">Message reçus</h1><br>

        <?php foreach ($resultat as $valeur) { ?>
            <?php if ($valeur['Destinataire'] == $_SESSION['email']){ ?>

                <div class="span12" id="message_recu" style="border: 1px solid black; border-radius: 5px; padding: 15px; border-collapse: separate; margin: 5px">
                    <div class="span12">
                        <div class="span6">Email de l'expéditeur : <?= $valeur['Expediteur']; ?></div>
                        <div class="span6">Appartement : <?= $valeur['IDAppart']; ?><br></div>
                    </div>

                    Message :<br>
                    <?= $valeur['Message']; ?>
                </div>
            <?php } ?>
        <?php } ?>

        <a href="index.php?action=vue_profil">Retour au profil</a>
    </div>

<?php
$contenu=ob_get_clean();
require "gabarit.php";