<?php

// tampon de flux stocké en mémoire
/*ob_start();
$titre="RentASnow - json";*/

?>

<?php
$dataDirectory = "Json";
$dataFileName = "Membre.json";


if (file_exists("../$dataDirectory/$dataFileName")) // the file already exists -> load it
{
    $data = json_decode(file_get_contents("../$dataDirectory/$dataFileName"));
}
else
{
    echo "fichier données non trouvées";
}
echo "<table>";
echo "<tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Password</th><th>Tel</th><th>Naissance</th></tr>";


foreach ($data as $membre)
{
    echo "<tr>";
    echo "<td>" . $membre->Nom . "</td>";
    echo "<td>" . $membre->Prenom. "</td>";
    echo "<td>" . $membre->Email . "</td>";
    echo "<td>" . $membre->Password . "</td>";
    echo "<td>" . $membre->Tel . "</td>";
    echo "<td>" . $membre->Naissance . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

<?php
/*
$contenu = ob_get_clean();
require "gabarit.php";*/
