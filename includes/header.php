<html>
  <head>
    <?php require "head.php"; ?>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  </body>

</html>
