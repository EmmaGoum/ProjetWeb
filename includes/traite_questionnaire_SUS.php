<?php
 require("connect.php");

 if (empty($_POST['q1']) || empty($_POST['q2']) || empty($_POST['q3']) || empty($_POST['q4']) || empty($_POST['q5']) || empty($_POST['q6']) || empty($_POST['q7']) || empty($_POST['q8']) || empty($_POST['q9']) || empty($_POST['q10'])) {
   header("location:questionnaire_SUS.php");
 } else {
   $q1 = $_POST['q1'];
   $q2 = $_POST['q2'];
   $q3 = $_POST['q3'];
   $q4 = $_POST['q4'];
   $q5 = $_POST['q5'];
   $q6 = $_POST['q6'];
   $q7 = $_POST['q7'];
   $q8 = $_POST['q8'];
   $q9 = $_POST['q9'];
   $q10 = $_POST['q10'];
   $score = (($q1 + $q3 + $q5 + $q7 + $q9) - 5 + 25 - ($q2 + $q4 + $q6 + $q8 + $q10)) * 2.5;

   $idCo = $_SESSION["idCompte"];

   $reqID = "SELECT MAX(idQuestionnaire) AS max FROM QUESTIONNAIRE_SUS";
   $reqID = $BDD -> query($reqID);
   $ligne = $reqID -> fetch();
   $idQ = $ligne['max'];
   $idQ++;

   $idCa;

   $reqAjout = $BDD -> prepare("INSERT INTO `QUESTIONNAIRE_SUS` (`idQuestionnaire`, `idCampagne`, `idCompte`, `score`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
   $reqAjout -> execute(array($idQ, $idCa, $idCo, $score, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10));
   header("location:../index.php");
 }
?>
