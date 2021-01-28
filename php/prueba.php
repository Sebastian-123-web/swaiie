<?php
  include 'database.php';
  //include 'conexion.php';
  $conexi = new DataBase();
  $sql = "INSERT INTO `antivirus` (`id_antivirus`, `antivirus`) VALUES (NULL, 'Gdata')";
  $query = mysqli_query($conexi, $sql);
  //$array = mysqli_fetch_array($query);
  //echo $array[0];
?>
