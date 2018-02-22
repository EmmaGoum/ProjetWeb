<html>
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Responsum - Accueil </title>
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_accueil.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <a class="navbar-brand" href="#">Responsum</a>
        <ul class="nav navbar-nav navbar-right">
          <?php
            if (empty($_SESSION['login'])) {
              ?>
              <li><a href="#">Se connecter</a></li>
              <?php
            } else {
              ?>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanted="false">Bonjour <?= $_SESSION['login'] ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Mes campagnes</a></li>
                      <li><a href="#">Mes contributions</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Mes infos</a></li>
                    </ul>
                </li>
              <?php
            }
          ?>
        </ul>
      </div>
    </nav>

    <div class="titre">
      <h1> Partager vos questionnaires scientifiques </h1>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
  </body>

</html>