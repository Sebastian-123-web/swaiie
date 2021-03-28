<?php
  $equipos = $_POST['id_equipo'];
  include '../clases/EquipoComputo.php';
  $eq = new EquipoComputo();
  $eq->EliminarEquipo($equipos);
  echo 'Se elimino correctamente';
?>
