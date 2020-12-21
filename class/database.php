<?php
  class DataBase
  {
    public $host   ="localhost";
    public $usuario="root";
    public $clave  ="411admi70@tsc";
    public $db     ="swaiie";
    public $conexion;

    public function __construct(){
      $this->conexion=@new mysqli("localhost", "root", "411admi70@tsc", "swaiie");
      if($this->conexion->connect_errno){
        echo "conectado";
      }else{
        echo "error";
      }
    }
  }
  $con=new DataBase();
?>
