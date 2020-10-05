<?php
  if (isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    include 'conexion.php';
    $sql = 'SELECT `tipo_usuario` FROM `usuario` WHERE `id_user`="'.$username.'" AND `password`="'.$password.'"';
    $query = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($query);
    session_start();
    if(isset($row[0])){
      if ($row[0] == 1) {
        $_SESSION["login"] = "admin";
        $_SESSION["username"] = $username;
        echo $_SESSION["login"];
      }elseif($row[0] == 0){
        $_SESSION["login"] = "user";
        $_SESSION["username"] = $username;
        echo $_SESSION["login"];
      }
    }else{
      echo "Usuario y/o Contraseña Incorrecta";
    }

  }else{
    session_start();
    if(isset($_SESSION["login"])) {
      echo 1;
    }else {
      echo 0;
    }
  }

?>
