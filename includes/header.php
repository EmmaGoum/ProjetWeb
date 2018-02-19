<html>
  <head>
    <meta charset="UTF-8"/>
		<title> Responsum </title>
		<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

<?php

    <nav class="navbar navbar-default" role="navigation">
      <a class="navbar-brand" href="#">Responsum</a>
      <ul class="nav navbar-nav navbar-right">
        <?php

          if (empty($_SESSION['login'])) {
            ?>
            <li><a href="#">Se connecter</a></li>
            <?php
          } else {
            ?>
            <li><a href="#">Bonjour <?= $_SESSION['login'] ?></a></li>
            <?php
          }
        ?>
      </ul>
    </nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>

</html>
