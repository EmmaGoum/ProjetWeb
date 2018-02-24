<html>
  <head>
    <?php require "head.php"; ?>
    <title> Responsum - Se connecter </title>
  </head>

  <body>
    <?php require "header.php"; ?>

    <h1> Se connecter </h1>

    <form class=".form-horizontal" method="post" action="traite_connexion.php">
        <div class="form-group">
        <label class="control-label col-sm-2" for="email">Adresse mail : </label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email"/>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="mdp">Mot de passe : </label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="mdp" name="mdp"/>
          </div>
        </div>
        <input type="submit" class="btn btn-default" value="Se connecter"/>
    </form>

    <?php require "footer.php"; ?>

  </body>

</html>