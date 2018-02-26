<?php
  function escape($var) {
    return htmlspecialchars($var, ENT_QUOTES, 'UTF-8', false);
  }
?>
