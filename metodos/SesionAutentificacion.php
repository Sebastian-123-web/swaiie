<?php

  if(isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    include '../clases/SesionUsuario.php';
    $sesion = new SesionUsuario();
    $sesion->SesionAutentificacion($username, $password);
  }

?>
