<?php
  $is_equipo = $_POST['id_equipo'];
  include '../clases/EquipoComputo.php';
  $eq = new EquipoComputo();
  $eq->MostrarUnEquipo($is_equipo);
?>
