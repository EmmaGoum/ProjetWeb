<?php
 require("connect.php");
 require("escape.php");

 if (empty(escape($_POST['email'])) || empty(escape($_POST['nom'])) || empty(escape($_POST['prenom'])) || empty(escape($_POST['mdp']))) {
   header("location:creation_compte.php");
 } else {
   $email = escape($_POST['email']);
   $nom = escape($_POST['nom']);
   $prenom = escape($_POST['prenom']);
   $mdp = escape($_POST['mdp']);

   $reqID = "SELECT MAX(idCompte) AS max FROM COMPTE";
   $reqID = $BDD -> query($reqID);
   $ligne = $reqID -> fetch();
   $id = $ligne['max'];
   $id++;

   $reqMail = $BDD -> prepare("SELECT COUNT(*) AS nbMail FROM COMPTE WHERE mail=?");
   $reqMail -> execute(array($email));
   $ligne = $reqMail -> fetch();
   $nbMail = $ligne['nbMail'];

   if ($nbMail == 0) {
     $reqAjout = $BDD -> prepare("INSERT INTO `compte` (`idCompte`, `mail`, `prenom`, `nom`, `mdp`) VALUES (?,?,?,?,?)");
     $reqAjout -> execute(array($id,$email,$prenom,$nom,$mdp));
     header("location:../index.php");
   } else {
     header("location:creation_compte.php");
   }
 }
