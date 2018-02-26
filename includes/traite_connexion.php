<?php
 require("connect.php");
 require("escape.php");

 if (empty(escape($_POST['email'])) || empty(escape($_POST['mdp']))) {
   echo "test2";

 } else {
   $email = escape($_POST['email']);
   $mdp = escape($_POST['mdp']);

   if (true ){
       $reqCompte = $BDD -> prepare("SELECT idCompte FROM COMPTE WHERE mdp=$mdp AND mail=$email");
       $reqCompte -> execute(array($email));
       $reqCompte -> fetch();

       // Il faut mettre un lien vers la page d'accueil ici du coup ? Je comprends pas trop comment on fait pour signaler que c'est connecté
   } else {
       echo "ça va pas";
   }
 }
 ?>
