<?php

function checkPass($email, $password, $nom, $prenom, $tel, $naissance){
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
            $tel = $membre->Tel;
            $naissance = $membre->Naissance;
        }
    }

    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['tel'] = $tel;
    $_SESSION['naissance'] = $naissance;

    if (password_verify($password, $hash)) {
        return true;
    } else {
        return false;
    }

}

//----------------------------------------- Créer un nouveau membre ----------------------------------------------------

function create_membre()
{
    // Destination du fichier de stockage des membres
    $dataDirectory = "Json";
    $dataFileName = "Membre.json";

    // Récupération du formulaire d'inscription
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

        // Création du nouveau membre
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
    // Destination du fichier Json
    $dataDirectory = "Json";
    $dataFileName = "Appartement.json";

    // Charge le fichier
    $data = json_decode(file_get_contents("$dataDirectory/$dataFileName"), true);

    return $data;
}

//------------------------------------ Créer un nouvel appartement -----------------------------------------------------

function add_appart()
{
    // Destination du fichier Json
    $dataDirectory = "Json";
    $dataFileName = "Appartement.json";


    // Récupération des informations
    $id = @$_POST['IDappart'];
    $titre = @$_POST['titre'];
    $region = @$_POST['region'];
    $adresse = @$_POST['adresse'];
    $npa = @$_POST['npa'];
    $ville = @$_POST['ville'];
    $description = @$_POST['description'];
    $disponibilite = @$_POST['disponibilite'];
    $prix = @$_POST['prix'];
    $email = $_SESSION['email'];

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

        $tableau_pour_json = array_values($tableau_pour_json);

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
    // Sélection du stockage des appartements
    $dataDirectory = "Json";
    $dataFileName = "Appartement.json";
    $data = json_decode(file_get_contents("$dataDirectory/$dataFileName"));

    // Récupération des informations
    $id = @$_POST['id'];
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

    $data = array_values($data);

    // Sauvegarde dans le fichier Json
    file_put_contents("Json/Appartement.json", json_encode($data));

}

//----------------------------------- Suppression d'un appartement -----------------------------------------------------

function supprAppart()
{
    // Récupération du fichier JSON
    // Sélection du stockage des appartements
    $dataDirectory = "Json";
    $dataFileName = "Appartement.json";
    $data = json_decode(file_get_contents("$dataDirectory/$dataFileName"));

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
    $data = array_values($data);

    // Sauvegarde dans le fichier Json
    file_put_contents("Json/Appartement.json", json_encode($data));
}

//------------------------------------- Sélection des informations d'un utilisateur ------------------------------------

function selectUser()
{
    // Récupération du fichier Json
    $dataDirectory = "Json";
    $dataFileName = "Membre.json";
    $data = json_decode(file_get_contents("$dataDirectory/$dataFileName"), true);

    return $data;
}

//----------------------------------------- Message ----------------------------------------------------

function afficher_message()
{
    $dataDirectory = "Json";
    $dataFileName = "Message.json";

    // Charge le fichier
    $data = json_decode(file_get_contents("$dataDirectory/$dataFileName"), true);

    return $data;
}

function create_message()
{
    $dataFileName = "Json/Message.json";

    $destinataire = @$_SESSION['email_proprietaire'];
    $expediteur = @$_POST['expediteur'];
    $IDAppart = @$_SESSION['appart'];
    $message = @$_POST['message'];

    try {
        // On essayes de récupérer le contenu existant
        $data = file_get_contents("$dataFileName");

        if( !$data || strlen($data) == 0 ) {
            // On crée le tableau JSON
            $tableau_pour_json = array();
        } else {
            // On récupère le JSON dans un tableau PHP
            $tableau_pour_json = json_decode($data, true);
        }

        $newmessage = new stdClass();

        $newmessage -> Destinataire = $destinataire;
        $newmessage -> Expediteur = $expediteur;
        $newmessage -> IDAppart = $IDAppart;
        $newmessage -> Message = $message;

        $tableau_pour_json [] = $newmessage;
        // On réencode en JSON
        $contenu_json = json_encode($tableau_pour_json);

        // On stocke tout le JSON
        file_put_contents("$dataFileName", $contenu_json);
    }catch( Exception $e ) {
        echo "Erreur : ".$e->getMessage();
    }
}

function create_contacter()
{
    $dataFileName = "Json/Message.json";

    $destinataire = @$_SESSION['email_proprietaire'];
    $expediteur = @$_SESSION['email'];
    $IDAppart = @$_SESSION['appart'];
    $message = @$_POST['message'];

    try {
        // On essayes de récupérer le contenu existant
        $data = file_get_contents("$dataFileName");

        if( !$data || strlen($data) == 0 ) {
            // On crée le tableau JSON
            $tableau_pour_json = array();
        } else {
            // On récupère le JSON dans un tableau PHP
            $tableau_pour_json = json_decode($data, true);
        }

        $newmessage = new stdClass();

        $newmessage -> Destinataire = $destinataire;
        $newmessage -> Expediteur = $expediteur;
        $newmessage -> IDAppart = $IDAppart;
        $newmessage -> Message = $message;

        $tableau_pour_json [] = $newmessage;
        // On réencode en JSON
        $contenu_json = json_encode($tableau_pour_json);

        // On stocke tout le JSON
        file_put_contents("$dataFileName", $contenu_json);
    }catch( Exception $e ) {
        echo "Erreur : ".$e->getMessage();
    }
}

//----------------------------------------- Uploader images ----------------------------------------------------

//source: https://openclassrooms.com/forum/sujet/upload-plusieurs-images-d-un-coup
function ajout_image()
{
    foreach ($_FILES["imgObservation"]["name"] as $i => $pImage) {
        $dossier = 'contenu/images/';
        $fichier = basename($_FILES['imgObservation']['name'][$i]);
        $extensions = array('.png', '.jpg', '.jpeg', '.JPG', '.JPEG', '.PNG');
        $extension = strrchr($_FILES['imgObservation']['name'][$i], '.');
        //Début des vérifications de sécurité...
        if (!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
        {
            $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
        }
        if (!isset($erreur)) //S'il n'y a pas d'erreur, on upload
        {
            //On formate le nom du fichier ici...
            $fichier = strtr($fichier,
                'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
                'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
            $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
            if (move_uploaded_file($_FILES['imgObservation']['tmp_name'][$i], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            {
                $return = 1;
            } else //Sinon (la fonction renvoie FALSE).
            {
                $return = 0;
            }
        } else {
            return false;
        }
    }
}
