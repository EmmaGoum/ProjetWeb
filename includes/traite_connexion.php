<?php
 require("connect.php");
 require("escape.php");
 

 if (empty(escape($_POST['email'])) || empty(escape($_POST['mdp']))) {
   echo "TEST";

 } else {
   $email = escape($_POST['email']);
   $mdp = escape($_POST['mdp']);

   $reqCompte = $BDD -> prepare("SELECT mdp, idCompte FROM COMPTE WHERE mail=?");
   $reqCompte -> execute(array($email));
   $variable = $reqCompte -> fetch();
   $mdpUser = $variable['mdp'];
   $idUser = $variable['idCompte'];

   if ( $mdp == $mdpUser ) {
    session_start();

    $_SESSION['idCompte'] = $idUser;
    header("location:../index.php");

   } else {
       echo "Utilisateur non reconnu";
   }
}

 ?>