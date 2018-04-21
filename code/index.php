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
      case 'vue_inscription' :
          inscription();
          break;
      case 'vue_ajouter' :
          ajouter();
          break;
      case 'detail' :
          detail();
          break;
      case 'ajout' :
          ajout();
          break;
      case 'vue_supprimer' :
          supprimer();
          break;
      case 'vue_modif' :
          modifier();
          break;
      case 'vue_profil' :
          profil();
          break;
      case 'vue_login' :
          login();
          break;
      case 'vue_supprimer_confirmer' :
            confirmSuppr();
            break;
      case 'info_coloc' :
            info_coloc();
            break;
      case 'message' :
            message();
            break;
      case 'mail_message' :
            mail_message();
            break;
      case 'mail_contacter' :
            mail_contacter();
            break;
      case 'message_recu' :
            message_recu();
            break;
      case 'message_envoyer' :
            message_envoyer();
            break;
      case 'contacter' :
            contacter();
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