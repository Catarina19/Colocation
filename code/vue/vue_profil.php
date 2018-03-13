<?php

ob_start();
$titre = 'Colocation - Login';
?>
    <div class="span12" id="divMain">
        <h1>Profil</h1>
    </div>

<?php
$contenu=ob_get_clean();
require "gabarit.php";
