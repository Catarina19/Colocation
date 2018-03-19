<?php

function checkPass($email, $password){
    // ============== Load data ================

    $dataFileName = "Json/Membre.json";
    $identity = null;
    $hash = null;
    $data = json_decode(file_get_contents("$dataFileName"));

    $user = $email;

    foreach ($data as $membre)
    {
        if($user == $membre->Email){
            $identity = $membre->Email;
        }
        if ($membre->Email == $identity){
            $hash = $membre->Password;
        }
    }

    if (password_verify($password, $hash)) {
        return true;
    } else {
        return false;
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
        $newmembre -> Password = password_hash($password, PASSWORD_DEFAULT);
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

// Prendre les données des appartements
function afficher_appart()
{
    $dataDirectory = "Json";
    $dataFileName = "Appartement.json";

    // Charge le fichier
    $data = json_decode(file_get_contents("$dataDirectory/$dataFileName"), true);

    return $data;
}

// Ajouter un appartement
function add_appart()
{
    $dataDirectory = "Json";
    $dataFileName = "Appartement.json";

    // Récupération des informations
    $titre = @$_POST['titre'];
    $region = @$_POST['region'];
    $adresse = @$_POST['adresse'];
    $npa = @$_POST['npa'];
    $ville = @$_POST['ville'];
    $description = @$_POST['descritpion'];
    $disponibilite = @$_POST['disponibilite'];
    $prix = @$_POST['prix'];
}