<?php

// tampon de flux stocké en mémoire
ob_start();
$titre="Colocation - Accueil";
?>

<div class="span12" id="divMain" style="text-align: center;">

    <br /><br /><br /><br />

    <h1>Trouvez votre colocation idéale</h1>

    <br /><br />

    <p>
        Des milliers de Chambres à louer en Suisse et nouvelles personnes personnes à rencontrer.
    </p>

    <br /><br /><br /><br />

</div>

<?php
  $contenu = ob_get_clean();
  require "gabarit.php";
