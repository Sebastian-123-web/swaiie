<?php
  $id_equipo = $_POST['id_equipo'];
  $nuevo_id = $_POST['nuevo_id'];
  include '../clases/conexion.php';
  $sql = "UPDATE `equipo` SET `id_equipo` = '$nuevo_id' WHERE `equipo`.`id_equipo` = '$id_equipo'";
  if (mysqli_query($link, $sql)) {
    echo 'Se Edito Correctamente!';
  }else {
    echo 'Error al Editarlo!';
  }
?>
