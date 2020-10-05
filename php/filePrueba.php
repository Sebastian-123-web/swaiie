<?php
  session_start();
  echo $_SESSION["login"];
  session_unset();
  session_destroy();
 ?>
