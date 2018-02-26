<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <a class="navbar-brand" href="../index.php">Responsum</a>
    <ul class="nav navbar-nav navbar-right">
      <?php
        if (empty($_SESSION['idCompte'])) {
          ?>
          <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanted="false">Se connecter<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="connexion.php">Se connecter</a></li>
                <li><a href="creation_compte.php">S'inscrire</a></li>
              </ul>
          </li>
          <?php
        } else {
          ?>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanted="false">Bonjour<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Mes campagnes</a></li>
                  <li><a href="#">Mes contributions</a></li>
                  <li class="divider"></li>
                  <li><a href="infos_compte.php">Mes infos</a></li>
                  <li class="divider"></li>
                  <li><a href="traite_deconnexion.php">Déconnexion</a></li>
                </ul>
            </li>
          <?php
        }
      ?>
    </ul>
  </div>
</nav>
