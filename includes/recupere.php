<?php
  function recupere($col, $id) {
    require("connect.php");
    $req = "SELECT $col AS result FROM COMPTE WHERE idCompte=$id";
    $req = $BDD -> query($req);
    $resp = $req -> fetch();
    return $resp['result'];
  }
?>
