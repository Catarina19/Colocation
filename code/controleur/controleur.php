<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:10
 * Updated : Nicolas.Glassey
 * Date : 14.02.2018
 */


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

// ----------------- Fonctions en lien avec les snows ---------------------

function appartement()
{
  require 'vue/vue_appartement.php';
}

// ----------------- Fonctions en lien avec l'inscription -----------------

function inscription()
{
    require 'vue/vue_inscription.php';
}

function enregistrer()
{
    create_membre();
    require "vue/vue_accueil.php";
}

// ----------------- Fonctions en lien avec login -------------------------

function login()
{
    require 'vue/vue_login.php';
}

function Json()
{
    require 'vue_json.php';
}
