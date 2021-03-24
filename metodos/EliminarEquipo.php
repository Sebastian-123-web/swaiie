<?php
  $equipos = $_POST['elementos'];
  include '../clases/EquipoComputo.php';
  $eq = new EquipoComputo();
  foreach ($equipos as $key => $value) {
    if ($value != 'n') {
      $eq->EliminarEquipo($value);
    }
  }
  echo 'Se elimino Correctamente';
?>
