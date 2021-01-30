<?php
  $usuario = $_POST['user'];
  $contraseña = $_POST['pass'];
  if(isset($usuario) && isset($contraseña)){
    include '../clases/SesionUsuario.php';
    $sesion = new SesionUsuario();
    $sesion->SesionAutentificacion($usuario,$contraseña);
    echo 2;
  }else{
    echo 1;
  }
?>
