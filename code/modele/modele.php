<?php

// ---------------------------------------------
// This function simply returns some hardcoded data
/*function getData()
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
}*/

function checkPass($email, $password){
    // ============== Load data ================

    $dataFileName = "Json/Membre.json";
    $identity = null;
    $password = null;
    $data = json_decode(file_get_contents("$dataFileName"));

    $user = $email;

    foreach ($data as $membre)
    {
        if($user == $membre->Email){
            $identity = $membre->Email;
        }
        if ($membre->Password == $identity){
            $password = $membre->Password;
        }
    }
}

// --- create a new membre
function create_membre()
{
    $dataDirectory = "Json";
    $dataFileName = "Membre.json";

    $nom = @$_POST['nom'];
    $prenom = @$_POST['prenom'];
    $email = @$_POST['email'];
    $password = @$_POST['password'];
    $tel = @$_POST['tel'];
    $naissance = @$_POST['naissance'];

    try {
        // On essayes de récupérer le contenu existant
        $data = file_get_contents("$dataDirectory/$dataFileName");

        if( !$data || strlen($data) == 0 ) {
            // On crée le tableau JSON
            $tableau_pour_json = array();
        } else {
            // On récupère le JSON dans un tableau PHP
            $tableau_pour_json = json_decode($data, true);
        }

        $newmembre = new stdClass();

        $newmembre -> Nom = $nom;
        $newmembre -> Prenom = $prenom;
        $newmembre -> Email = $email;
        $newmembre -> Password = $password;
        $newmembre -> Tel = $tel;
        $newmembre -> Naissance = $naissance;

        $tableau_pour_json [] = $newmembre;
        // On réencode en JSON
        $contenu_json = json_encode($tableau_pour_json);

        // On stocke tout le JSON
        file_put_contents("$dataDirectory/$dataFileName", $contenu_json);
    }catch( Exception $e ) {
        echo "Erreur : ".$e->getMessage();
    }
}
// ============== Save data ================
/*function save_data()
{
    $data = getData();

    $dataDirectory = "Json";
    $dataFileName = "Membre.json";

    file_put_contents("$dataDirectory/$dataFileName", json_encode($data));
}*/