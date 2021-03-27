<?php
  include '../clases/EquipoComputo.php';
  $n_serie = strtoupper($_POST['n_serie']);
  $n_equipo = strtoupper($_POST['n_equipo']);
  $ram = $_POST['ram'];
  $disco = $_POST['disco'];
  $t_disco = $_POST['t_disco'];
  $mm = $_POST['mm'];
  $os = $_POST['os'];
  $cpu = $_POST['cpu'];
  $generacion = $_POST['generacion'];
  $tipo = $_POST['tipo'];
  $antivirus = $_POST['antivirus'];
  $software = $_POST['software'];
  $estado = $_POST['estado'];
  $mantenimiento = $_POST['mantenimiento'];
  $usuario = $_POST['usuario'];
  if ($n_serie != '' && $n_equipo != '') {
    $eq = new EquipoComputo();
    $eq->AgregarEquipo($n_serie, $n_equipo, $ram, $disco, $t_disco, $mm, $os, $cpu, $generacion, $tipo, $antivirus, $software, $estado , $mantenimiento, $usuario);
    echo 'hecho';
  }else {
    echo 'error';
  }

?>
