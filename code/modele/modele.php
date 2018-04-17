<?php

function checkPass($email, $password, $nom, $prenom){
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
            $nom = $membre->Nom;
            $prenom = $membre->Prenom;
        }
    }

    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;

    if (password_verify($password, $hash)) {
        return true;
    } else {
        return false;
    }

}

//----------------------------------------- Créer un nouveau membre ----------------------------------------------------

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

//--------------------------------------------- Prendre les données des appartements -----------------------------------

function afficher_appart()
{
    $dataDirectory = "Json";
    $dataFileName = "Appartement.json";

    // Charge le fichier
    $data = json_decode(file_get_contents("$dataDirectory/$dataFileName"), true);

    return $data;
}

//------------------------------------ Créer un nouvel appartement -----------------------------------------------------

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
    $description = @$_POST['description'];
    $disponibilite = @$_POST['disponibilite'];
    $prix = @$_POST['prix'];

    $email = $_SESSION['email'];
    $_SESSION['idAuto'] ++;
    @$id = $_SESSION['idAuto'];

    try{
        // On essaye de récupérer le contenu existant
        $data = file_get_contents("$dataDirectory/$dataFileName");

        if( !$data || strlen($data) == 0 ) {
            // On crée un tableau JSON
            $tableau_pour_json = array();
        } else {
            // On récupère le JSON dans un tableau PHP
            $tableau_pour_json = json_decode($data, true);
        }

        // Inscription des données
        $newAppart = new stdClass();

        $newAppart -> id = $id;
        $newAppart -> titre = $titre;
        $newAppart -> region = $region;
        $newAppart -> adresse = $adresse;
        $newAppart -> npa = $npa;
        $newAppart -> ville = $ville;
        $newAppart -> description = $description;
        $newAppart -> date_disponibilite = $disponibilite;
        $newAppart -> prix = $prix;
        $newAppart -> email_proprietaire = $email;

        $tableau_pour_json [] = $newAppart;
        // Réencodage du json
        $contenu_json = json_encode($tableau_pour_json);

        // Stockage du json dans son fichier
        file_put_contents("$dataDirectory/$dataFileName", $contenu_json);
    }catch (Exception $e){
        echo "Erreur : ".$e -> getMessage();
    }
}

//------------------------------- Modifier un appartement --------------------------------------------------------------

function mofifierAppart()
{
    global $data;

    // Récupération des informations
    $id = intval(@$_POST['id']);
    $titre = @$_POST['titre'];
    $region = @$_POST['region'];
    $adresse = @$_POST['adresse'];
    $npa = @$_POST['npa'];
    $ville = @$_POST['ville'];
    $description = @$_POST['description'];
    $disponibilite = @$_POST['disponibilite'];
    $prix = @$_POST['prix'];


    // Sélection de l'appartement désiré (selon son ID)
    foreach ($data as $i => $appart)
    {
        if ($appart->id == $id)
        {
            $index = $i;
            break;
        }
    }
    
    // Réécriture des champs
    if (isset($titre))
    {
        $data[$index]->titre = $titre;
    }
    if (isset($region))
    {
        $data[$index]->region = $region;
    }
    if (isset($adresse))
    {
        $data[$index]->adresse = $adresse;
    }
    if (isset($npa))
    {
        $data[$index]->npa = $npa;
    }
    if (isset($ville))
    {
        $data[$index]->ville = $ville;
    }
    if (isset($description))
    {
        $data[$index]->description = $description;
    }
    if (isset($disponibilite))
    {
        $data[$index]->date_disponibilte = $disponibilite;
    }
    if (isset($prix))
    {
        $data[$index]->prix = $prix;
    }

    // Sauvegarde
    file_put_contents("Json/Appartement.json", json_encode($data));

}

//----------------------------------- Suppression d'un appartement -----------------------------------------------------

function supprAppart()
{
    // Récupération du fichier JSON
    global $data;

    // Récupération de l'ID de l'appartement à supprimer
    $id = intval($_GET['id']);

    // Sélection de l'appartement désiré (selon son ID)
    foreach ($data as $i => $appart)
    {
        if ($appart->id == $id)
        {
            $index = $i;
            break;
        }
    }

    // Suppression
    unset($data[$index]);

    // Sauvegarde
    file_put_contents("Json/Appartement.json", json_encode($data));
}