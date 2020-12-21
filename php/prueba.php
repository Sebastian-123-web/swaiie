<?php
  include '../class/database.php';
  //include 'conexion.php';
  $conexion = new DataBase();
  $conexion->ConexionDB();
  $sql = "INSERT INTO `antivirus` (`id_antivirus`, `antivirus`) VALUES (NULL, 'Gdata')";
  $query = mysqli_query($conexion, $sql);
  //$array = mysqli_fetch_array($query);
  //echo $array[0];
?>
