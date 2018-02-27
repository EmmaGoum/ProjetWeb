<?php session_start(); ?>

<html>
  <head>
    <?php require "head.php"; ?>
    <title>Responsum - Répondre</title>
  </head>

  <body>
    <?php
      require "header.php";
      require "fonction_quest.php"
    ?>

    <h1> Répondre au questionnaire </h1>

    <form class=".form-horizontal" method="post" action="traite_questionnaire_SUS.php">
      <div class="container">
        <?php
          SUS("1. Je pense que je vais utiliser ce service fréquemment.", "q1");
          SUS("2. Je trouve ce service inutilement complexe.", "q2");
          SUS("3. Je pense que ce service est facile à utiliser.", "q3");
          SUS("4.Je pense que j’aurai besoin de l’aide d’un technicien pour être capable d’utiliser ce service.", "q4");
          SUS("5.J’ai trouvé que les différentes fonctions de ce service ont été bien intégrées", "q5");
          SUS("6. Je pense qu’il y a trop d’incohérence dans ce service.", "q6");
          SUS("7. J’imagine que la plupart des gens serait capable d’apprendre à utiliser ce services très rapidement.", "q7");
          SUS("8 J’ai trouvé ce service très lourd à utiliser", "q8");
          SUS("9. Je me sentais très en confiance en utilisant ce service.", "q9");
          SUS("10. J’ai besoin d’apprendre beaucoup de choses avant de pouvoir utiliser ce service.", "q10");
        ?>
      </div>
      <input type="submit" class="btn btn-default" value="Envoyer"/>
    </form>

    <?php require "footer.php"; ?>

  </body>

</html>
