<?php

session_start();
require "controleur/controleur.php";
if(@$_GET['logout']) {
    session_destroy();
    header("location:index.php");
}

try
{
  if (isset($_GET['action']))
  {
    $action = $_GET['action'];
    switch ($action)
    {
      case 'vue_accueil' :
          accueil();
          break;
      case 'vue_appartement' :
          appartement();
          break;
      case 'enregistrer' :
          enregistrer();
          break;
      case 'vue_Json' :
          Json();
          break;
      case 'vue_inscription' :
          inscription();
          break;
      case 'vue_ajouter' : // Pas encore ajouté
          ajouter();
          break;
        case 'ajout' : // Déjà ajouté
            ajout();
            break;
      case 'vue_profil' :
          profil();
          break;
      case 'vue_login' :
          login();
          break;
      default :
          throw new Exception("Action non valide");
          break;
    }
  }
  else
    accueil();
}

catch (Exception $e)
{
  erreur($e->getMessage());
}