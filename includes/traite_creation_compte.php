<?php
 require("connect.php");

 if (empty($_POST['login']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['mdp'])) {
   header("location:creation_compte.php");
 } else {
   $reqID = "SELECT COUNT * FROM COMPTE WHERE email=$_POST['login']";
   $respID = $BDD -> query($MaRequete);
   $respID -> fetch();
   if ($respID == 0) {
     $reqAjout = "INSERT INTO `compte` (`mail`, `prenom`, `nom`, `mdp`) VALUES ('$_POST['login']', '$_POST['prenom']', '$_POST['nom']', '$_POST['mdp']')";
     $respAjout = $BDD -> query($reqAjout);
   }
 }
