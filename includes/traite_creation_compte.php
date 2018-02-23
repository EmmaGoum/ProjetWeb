<?php
 require("connect.php");
 require("escape.php");

 if (empty(escape($_POST['email'])) || empty(escape($_POST['nom'])) || empty(escape($_POST['prenom'])) || empty(escape($_POST['mdp']))) {
   echo "test2";
   //header("location:creation_compte.php");
 } else {
   $email = escape($_POST['email']);
   $nom = escape($_POST['nom']);
   $prenom = escape($_POST['prenom']);
   $mdp = escape($_POST['mdp']);

   $reqID = "SELECT MAX(idCompte) AS max FROM COMPTE";
   $respID = $BDD -> query($reqID);
   $id = mysql_result($respID,0);
   $id++;


   $reqMail = $BDD -> prepare("SELECT COUNT(*) AS nbMail FROM COMPTE WHERE mail=?");
   $reqMail -> execute(array($email));
   $reqMail -> fetch();

   if ($reqMail == 0) {
     $reqAjout = $BDD -> prepare("INSERT INTO `compte` (`idCompte`, `mail`, `prenom`, `nom`, `mdp`) VALUES (?,?,?,?,?)");
     $reqAjout -> execute(array($id,$email,$prenom,$nom,$mdp));
   } else {
     echo "test";
     //header("location:creation_compte.php");
   }
 }
