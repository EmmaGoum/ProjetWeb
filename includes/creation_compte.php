<?php session_start(); ?>

<html>
  <head>
    <?php require "head.php"; ?>
    <title> Responsum - Créer un compte </title>
  </head>

  <body>
    <?php require "header.php"; ?>

    <h1> Créez votre compte </h1>

    <form class=".form-horizontal" method="post" action="traite_creation_compte.php">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Adresse mail : </label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email"/>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="nom">Nom : </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nom" name="nom"/>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="prenom">Prénom : </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="prenom" name="prenom"/>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="mdp">Mot de passe : </label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="mdp" name="mdp"/>
          </div>
        </div>
        <input type="submit" class="btn btn-default" value="S'inscrire"/>
    </form>

    <?php require "footer.php"; ?>

  </body>

</html>
