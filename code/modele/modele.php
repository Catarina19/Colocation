<?php

// ---------------------------------------------
// This function simply returns some hardcoded data
function getData()
{
    return json_decode('[{"Nom":"A","Prenom":"A","Email":"A","Password":"A","Tel":"A","Naissance":"A"}]',true);
}

// ============== Load or create data ================
function getFile()
{
    $dataDirectory = "Json";
    $dataFileName = "Membre.json";

    if (file_exists("../$dataDirectory/$dataFileName")) // the file already exists -> load it
    {
        $data = json_decode(file_get_contents("../$dataDirectory/$dataFileName"), true);
    } else {
        echo "Fichier introuvable";
    }
    extract($_GET);
}

// --- create a new membre
function create_membre()
{
    if (isset($create)) // add one person at the end of the array.
    {
        $nom = @$_GET['nom'];
        $prenom = @$_GET['prenom'];
        $email = @$_GET['email'];
        $password = @$_GET['password'];
        $tel = @$_GET['tel'];
        $naissance = @$_GET['naissance'];

        $newmembre = array("Nom" => $nom, "Prenom" => $prenom, "Email" => $email, "Password" => $password, "Tel" => $tel, "Naissance" => $naissance);
        $data[] = $newmembre;
    }
    return $newmembre;
}

// ============== Save data ================
function save_data()
{
    $data = getData();

    $dataDirectory = "Json";
    $dataFileName = "Membre.json";

    file_put_contents("$dataDirectory/$dataFileName", json_encode($data));
}
/*
// ============== Display data ================
function display_data()
{
    $data = getData();

    echo "<h1>Membres</h1>";
    echo "<table>";
    echo "<tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Password</th><th>Tel</th><th>Naissance</th></tr>";


    foreach ($data as $membre) {
        echo "<tr>";
        echo "<td>" . $membre->Nom . "</td>";
        echo "<td>" . $membre->Prenom . "</td>";
        echo "<td>" . $membre->Email . "</td>";
        echo "<td>" . $membre->Password . "</td>";
        echo "<td>" . $membre->Tel . "</td>";
        echo "<td>" . $membre->Naissance . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    return $data;
}*/