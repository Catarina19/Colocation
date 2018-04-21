<?php

ob_start();
$titre = 'Appartager - Profil';
?>
    <div class="span12" id="divMain">
        <h1 style="text-align: center;">Votre Profil</h1>

        <div class="span3" id="profil_info" style="border: 1px solid black; border-radius: 5px; padding: 20px; text-align: center;">
            <h4><u>Vos informations</u></h4>
            <?php if(isset($_SESSION['email'])) :?>
            <?= $_SESSION['prenom']; ?> <?= $_SESSION['nom']; ?> <br>
            <?= $_SESSION['email']; ?> <br>
            <?= $_SESSION['email']; ?> <br>
            <?= $_SESSION['tel']; ?> <br>
            <?= $_SESSION['naissance']; ?>
            <?php endif; ?>
            <br><br><br>
            <a href="index.php?action=message_recu">Messages reçus</a><br>
            <a href="index.php?action=message_envoyer">Messages envoyés</a><br>
        </div>

        <?php foreach ($resultat as $valeur) { ?>
            <?php if ($valeur['email_proprietaire'] == $_SESSION['email']){ ?>
            <div class="span8" id="profil_appart" style="border: 1px solid black; border-radius: 5px; padding: 15px; border-collapse: separate; margin: 5px">
                <img src="../contenu/images/pic01.jpg">
                <?= $valeur['titre']; ?>
                <?= $valeur['description']; ?>
                <a href="index.php?action=detail&id=<?=$valeur['id']?>">Détails</a>
            </div>
            <?php } ?>
        <?php } ?>
    </div>

<?php

$contenu=ob_get_clean();
require "gabarit.php";
