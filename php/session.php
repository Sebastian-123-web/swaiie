<?php
  class SesionSwaiie
  {
    private $username;
    private $password;
    function __sesion($user, $pass){
      $this->usermane = $user;
      $this->passwords = $pass;
    }
    public function crearsesion(){
      include 'conexion.php';
      $sql = 'SELECT * FROM `usuario` WHERE `id_user`="'.$this->usermane.'" AND `password`="'.$this->passwords.'"';
      $query = mysqli_query($link, $sql);
      $row = mysqli_fetch_array($query);
      if(isset($row[5])){
        $_SESSION["username"] = $row[0];
        $_SESSION["nombre"] = $row[2];
        $_SESSION["apellido"] = $row[3];
        $_SESSION["mail"] = $row[4];
        $_SESSION["tipo_usuario"] = $row[5];
        $_SESSION["id_area"] = $row[6];
        $_SESSION["id_local"] = $row[7];
      }else{
        return "Usuario y/o contraseña Incorrecta";
      }
    }

    public function cerrarsesion(){
      session_start();
      session_unset();
      session_destroy();
    }

    public function estadosesion($estado){
      if(isset($estado)) {
        echo 1;
      }else{
        echo 0;
      }
    }
  }

?>
