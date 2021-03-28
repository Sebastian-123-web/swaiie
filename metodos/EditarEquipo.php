<?php
  include '../clases/EquipoComputo.php';
  $id_equipo = $_POST['id_equipo'];
  $n_equipo = $_POST['n_equipo'];
  $os = $_POST['os'];
  $antivirus = $_POST['antivirus'];
  $software = $_POST['software'];
  $mantenimiento = $_POST['mantenimiento'];
  $usuario = $_POST['usuario'];
  $cpu = $_POST['cpu'];
  $generacion = $_POST['generacion'];
  $disco = $_POST['disco'];
  $t_disco = $_POST['t_disco'];
  $mm = $_POST['mm'];
  $ram = $_POST['ram'];
  $tipo = $_POST['tipo'];
  $estado = $_POST['estado'];
  $eq = new EquipoComputo();
  $eq->EditarEquipo($id_equipo,$n_equipo,$ram,$disco,$t_disco,$mm,$os,$cpu,$generacion,$tipo,$antivirus,$software,$estado,$mantenimiento,$usuario);
?>
