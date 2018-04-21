<?php

ob_start();
$titre = 'Appartager - Profil';
?>
    <div class="span12" id="divMain">
        <h1 style="text-align: center;">Votre Profil</h1>

        <div class="span3" id="profil_info" style="border: 1px solid black; border-radius: 5px; padding: 20px; text-align: center;">
            <h4><u>Vos informations</u></h4>
            <?= $_SESSION['prenom']; ?> <?= $_SESSION['nom']; ?> <br>
            <?= $_SESSION['email']; ?> <br>
            <?//= $_SESSION['tel']; ?> tel <br>
            <?//= $_SESSION['naissance']; ?> naissance
            <br><br><br>
            <a href="#">Messages reçus</a><br>
            <a href="#">Messages envoyés</a><br>
        </div>

        <?php foreach ($resultat as $valeur) { ?>
            <?php if ($valeur['email_proprietaire'] == $_SESSION['email']){ ?>
            <div class="span8" id="profil_appart" style="border: 1px solid black; border-radius: 5px; padding: 15px; border-collapse: separate; margin: 5px">
                <img src="../contenu/images/pic01.jpg">
                <?= $valeur['titre']; ?>
                <?= $valeur['description']; ?>
                <a href="index.php">Détails</a>
            </div>
            <?php } ?>
        <?php } ?>
    </div>

<?php

/*<br>
    <FORM ACTION="trait-new_fiche.php" method="POST" ENCTYPE="multipart/form-data">
        <input type="hidden" name=\"max_file_size" value="50000">
        <label for="title" class="float">Image : </label>  <input TYPE="file" NAME="image"><br>
    </FORM>*/

$contenu=ob_get_clean();
require "gabarit.php";
