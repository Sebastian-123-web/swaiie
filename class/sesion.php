<?php
  class SesionUsuario{

    public function sesionAutentificacion($usuario,$contraseña){
      include 'conexion.php';
      $sql = 'SELECT * FROM `usuario` WHERE `id_user`="'.$usuario.'" AND `password`="'.$contraseña.'"';
      $query = mysqli_query($link, $sql);
      $row = mysqli_fetch_array($query);
      if(!isset($row[0])){
        echo 'Error al iniciar sesion';
      }else{
        session_start();
        $_SESSION["usuario"]["id_user"] = $row["id_user"];
        $_SESSION["usuario"]["password"] = $row["password"];
        $_SESSION["usuario"]["nombre"] = $row["nombre"];
        $_SESSION["usuario"]["apellido"] = $row["apellido"];
        $_SESSION["usuario"]["mail"] = $row["mail"];
        $_SESSION["usuario"]["tipo_usuario"] = $row["tipo_usuario"];
        $_SESSION["usuario"]["id_area"] = $row["id_area"];
        $_SESSION["usuario"]["id_local"] = $row["id_local"];
        return $_SESSION["usuario"];
        //echo 'sesion iniciada '.$_SESSION["usuario"]["id_user"];
      }
    }
    public function sesionEstado(){
      session_start();
      if(!isset($_SESSION["usuario"]["id_user"])){
        echo 1;
      }else{
        echo 2;
      }
    }
    public function sesionCerrada(){
      session_start();
      session_unset();
      session_destroy();
      echo "Sesion Cerrada";
    }
  }

  //$sesion = new SesionUsuario();
  //$sesion->sesionAutentificacion('rbanagasta', 'RB2020');
  //$sesion->sesionEstado();
  //$sesion->sesionCerrada();

  //var_dump($row);
  //var_dump($query);exit;
?>
