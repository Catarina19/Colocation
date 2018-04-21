<?php

ob_start();
$titre = 'Appartager - Info colocataire';
?>
<?php foreach ($resultat as $valeur) { ?>
<?php if ($valeur['id'] == $_SESSION['appart']){ ?>
    <?php @$_SESSION['email_proprietaire'] = $valeur['email_proprietaire']; ?>
    <div class="span12" id="divMain">
        <h1 style="text-align: center;">Contacter</h1><br>
        <form class="form" method="POST" action="index.php?action=mail_contacter" >
            <div class="span12">
                <div class="span6"><label for="expediteur">Votre adresse email : </label><input type="text" name="expediteur" value="<?= $_SESSION['email']; ?>" disabled></div>
                <div class="span6"><label for="destinataire">Email de destination : </label><input type="text" name="destinataire" value="<?= $valeur['email_proprietaire']; ?>" disabled></div>
            </div>

            <div><br><br>Message : <br></div>
            <textarea class="form-control span12" rows="6" name="message" required></textarea>

            <input class="btn" type="submit" value="Envoi"/>
        </form>
        <a href="index.php?action=detail&id=<?= $valeur['id'];?>">Retour à la page précédente</a>
    </div>
<?php }}?>
<?php
$contenu=ob_get_clean();
require "gabarit.php";