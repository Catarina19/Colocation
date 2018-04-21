<?php

require "modele/modele.php";

// Affichage de la page de l'accueil
function accueil()
{
    require "vue/vue_accueil.php";
}

function erreur($e)
{
  $_SESSION['erreur']=$e;
  require "vue/vue_erreur.php";
}

//----------------- Fonctions en lien avec l'affichage de la liste de appartements -------------------------------------

// Afficher l'appartement
function appartement()
{
    $resultat = afficher_appart();
    require 'vue/vue_appartement.php';
}

// Afficher les détails d'un appartement
function detail()
{
        $_SESSION['appart'] = $_GET['id'];
        $resultat = afficher_appart();
        require "vue/vue_detail.php";
}

//----------------- Fonctions en lien avec les détails -------------------------------------

//informations sur les colocations pour les membres et les visiteurs
function info_coloc()
{
    $_SESSION['appart'] = $_GET['id'];
    $resultat = afficher_appart();
    require "vue/vue_info_colocataire.php";
}

//Message pour les visiteurs
function message()
{
    $resultat = afficher_appart();
    require "vue/vue_message.php";
}

//Message pour les membres
function contacter()
{
    $resultat = afficher_appart();
    require "vue/vue_contacter.php";
}

//Rentrer les données dans Message.json
function mail_message()
{
    create_message();
    require "vue/vue_accueil.php";
}

//Rentrer les données dans Message.json
function mail_contacter()
{
    create_contacter();
    require "vue/vue_accueil.php";
}

//----------------------------- Fonctions en lien avec la modification/suppression d'appartements ----------------------

// Confirmation de la suppression
function confirmSuppr()
{
    require "vue/vue_supprimer_confirmer.php";
}

// Suppression d'un appartement
function supprimer()
{
    if (isset($_GET['id']))
    {
        supprAppart();
        require "vue/vue_supprimer.php";
    }
}

// Modification d'un appartement
function modifier()
{
    if (isset($_GET['id']))
    {
        $resultat = afficher_appart();
        require "vue/vue_modifier.php";
        exit();
    }
    else
    {
        // Fonction de modification des données
        mofifierAppart();

        // Afficher le résultat
        $resultat = afficher_appart();
        require "vue/vue_detail.php";
    }
}

//----------------- Fontions en lien avec l'ajout d'appartements -------------------------------------------------------

// Quand aucune donnée n'a été ajoutée
function ajouter()
{
    require "vue/vue_ajouter.php";
}

// Après avoir inscrit des données
function ajout()
{
    // Sélection des informations relatives à la vérification de l'email
    $IDappart = @$_POST['IDappart'];
    $verifID = afficher_appart();

    // Test si l'ID existe déjà
    foreach ($verifID as $testID)
    {
        if ($testID['id'] == $IDappart)
        {
            $confirmID = true;
            break;
        }
        else
        {
            $confirmID = false;
        }
    }

    // Application du résultat du test de l'ID
    if ($confirmID == true)
    {
        // Message d'erreur
        require "vue/vue_ajouter_erreur_id.php";
    }
    else if ($confirmID == false)
    {
        // Création de l'appartment
        add_appart();

        // Redirection vers la liste des appartements
        appartement();
    }
}

//----------------- Fonctions en lien avec l'inscription ---------------------------------------------------------------

// Quand aucune donnée n'a été inscrite
function inscription()
{
    require 'vue/vue_inscription.php';
}

// Quand des données ont été inscrites
function enregistrer()
{
    // Sélection des différentes informations à analyser
    $email = $_POST['email'];
    $verifEmail = selectUser();

    // Test si l'email existe en double
    foreach ($verifEmail as $testEmail)
    {
        // Si l'email existe déjà
        if ($testEmail['Email'] == $email)
        {
            $confirmEmail = true;
            break;
        }
        // S'il n'existe pas
        else
        {
            $confirmEmail = false;
        }
    }

    // Application du résultat du test de l'email
    if (@$confirmEmail == true)
    {
        // Message d'erreur
        require "vue/vue_inscription_erreur_email.php";
    }
    else if (@$confirmEmail == false)
    {
        // Création du membre
        create_membre();
        require "vue/vue_login.php";
    }
}

//----------------- Fonctions en lien avec login -----------------------------------------------------------------------

function login()
{
    $email = @$_POST['email'];
    $password = @$_POST['password'];

    $nom = @$_POST['nom'];
    $prenom = @$_POST['prenom'];

    $tel = @$_POST['tel'];
    $naissance = @$_POST['naissance'];

    if(!($email == "") && !($password == "")) {
        $resultat = checkPass($email, $password, $nom, $prenom, $tel, $naissance);
        if ($resultat) {

            $_SESSION['email'] = $email;

            require "vue/vue_login_success.php";
        } else {
            $erreurmdp = 1;
            require 'vue/vue_login.php';
        }
    }
    else{
        $erreurmdp = 0;
        require 'vue/vue_login.php';
    }

}

//----------------- Fonctions en lien avec profil ----------------------------------------------------------------------

// Affichage du profil
function profil()
{
    $resultat = afficher_appart();
    require 'vue/vue_profil.php';
}

function message_recu()
{
    $resultat = afficher_message();
    require "vue/vue_message_recu.php";
}

function message_envoyer()
{
    $resultat = afficher_message();
    require "vue/vue_message_envoyer.php";
}

