<?php session_start(); ?>

<html>
  <head>
    <?php require "head.php"; ?>
    <title> Responsum - Informations </title>
  </head>

  <body>
    <?php
      require "header.php";
      require("connect.php");
      require "recupere.php";
    ?>

    <h1> Vos informations personnelles </h1>

    <?php
      $id = $_SESSION['idCompte'];
      $mail = recupere('mail',$id);
      $prenom = recupere('prenom', $id);
      $nom = recupere('nom', $id);
      echo "Votre identifiant : $id";
      echo "Votre adresse mail : $mail";
      echo "Votre prénom : $prenom";
      echo "Votre nom : $nom";
    ?>

    <?php require "footer.php"; ?>

  </body>

</html>
