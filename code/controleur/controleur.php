<?php

require "modele/modele.php";

// Affichage de la page de l'accueil
function accueil()
{
    // Récupérer l'ID des appartements
    IDAuto();

    require "vue/vue_accueil.php";
}

function erreur($e)
{
  $_SESSION['erreur']=$e;
  require "vue/vue_erreur.php";
}

//----------------- Fonctions en lien avec les appartements ------------------------------------------------------------

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
    add_appart();
    $resultat = afficher_appart();
    require "vue/vue_appartement.php";
}

//----------------- Fonctions en lien avec l'inscription ---------------------------------------------------------------

// Quand aucune donnée n'a été inscrite
function inscription()
{
    require 'vue/vue_inscription.php';
}

// Création du nouveau membre
function enregistrer()
{
    create_membre();
    require "vue/vue_login.php";
}

//----------------- Fonctions en lien avec login -----------------------------------------------------------------------

// Connexion
function login()
{
    $email = @$_POST['email'];
    $password = @$_POST['password'];

    // Pour afficher le nom et le prénom en haut de l'écran
    $nom = @$_POST['nom'];
    $prenom = @$_POST['prenom'];

    if(!($email == "") && !($password == "")) {
        $resultat = checkPass($email, $password, $nom, $prenom);
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

function Json()
{
    require 'vue_json.php';
}

//----------------- Fonctions en lien avec profil ----------------------------------------------------------------------

// Affichage du profil
function profil()
{
    $resultat = afficher_appart();
    require 'vue/vue_profil.php';
}


