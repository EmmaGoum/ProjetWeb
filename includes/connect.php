<?php
  try {
    $BDD = new PDO("mysql:host=localhost;dbname=Responsum;charset=utf8", "root","",array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
  } catch (Exception $e) {
   die('Erreur fatale : ' . $e->getMessage());
  }
?>
