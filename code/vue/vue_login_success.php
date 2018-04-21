<?php

ob_start();
$titre = 'Appartager - Nos snows';

?>

    <article>
        <header>
            <h4>Vous avez réussi à vous connectez !</h4>
        </header>
    </article>
    <hr/>

<?php
$contenu=ob_get_clean();
require "gabarit.php";