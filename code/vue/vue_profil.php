<?php

ob_start();
$titre = 'Colocation - Login';
?>
    <div class="span12" id="divMain">
        <h1 style="text-align: center;">Votre Profil</h1>

        <div class="span5" id="profil_info">
            Prenom Nom
        </div>

        <div class="span6" id="profil_appart">
            à rajouter après
        </div>

    </div>

<?php
$contenu=ob_get_clean();
require "gabarit.php";
