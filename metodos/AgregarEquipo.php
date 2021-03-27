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

  // PREGUNTA SI EL NUMERO DE SERIE Y EL NOMBRE DE EQUIPO ESTAN VACIOS
  if ($n_serie != '' && $n_equipo != '') {
    include '../clases/conexion.php';
    $sql = "SELECT `id_equipo` FROM `equipo` WHERE `id_equipo`='$n_serie'";
    $query = mysqli_query($link, $sql);
    $arreglo = mysqli_fetch_array($query);
    // IF PARA SABER SI EL NUMERO DE SERIE EXISTE EN LA BASE DE DATOS
    if (!isset($arreglo[0])) {
      $eq = new EquipoComputo();
      $eq->AgregarEquipo($n_serie, $n_equipo, $ram, $disco, $t_disco, $mm, $os, $cpu, $generacion, $tipo, $antivirus, $software, $estado , $mantenimiento, $usuario);
      echo 'hecho';
    }else {
      echo 'existe';
    }

  }else {
    echo 'error';
  }

?>
