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

// ----------------- Fonctions en lien avec les appartements ---------------------

function appartement()
{
    $resultat = afficher_appart();
    require 'vue/vue_appartement.php';
}

function detail()
{
    $_SESSION['appart'] = $_GET['id'];
    $resultat = afficher_appart();
    require "vue/vue_detail.php";
}

function supprimer()
{
    require "vue/vue_supprimer.php";
}

function modifier()
{
    $_SESSION['appart'] = $_GET['id'];
    $resultat = afficher_appart();
    require "vue/vue_modifier.php";
}

// ----------------- Fontions en lien avec l'ajout d'appartements-----------------

// Pas encore ajouté
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

// ----------------- Fonctions en lien avec l'inscription -----------------

function inscription()
{
    require 'vue/vue_inscription.php';
}

function enregistrer()
{
    create_membre();
    require "vue/vue_login.php";
}

// ----------------- Fonctions en lien avec login -------------------------

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

// ----------------- Fonctions en lien avec profil -------------------------

function profil()
{
    $resultat = afficher_appart();
    require 'vue/vue_profil.php';
}


