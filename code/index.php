<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 08:54
 * Updated : Nicolas.Glassey
 * Date : 14.02.2018
 */

session_start();
require "controleur/controleur.php";

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
      case 'vue_Json' :
          Json();
          break;
      case 'vue_inscription' :
          inscription();
          break;
      case 'comfirmer' :
          comfirmer();
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