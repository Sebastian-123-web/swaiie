<?php
  $selectcomponente = $_POST['selectcomponente'];
  $addcomponente = $_POST['addcomponente'];
  include '../clases/conexion.php';
  include '../clases/ComponentesComputo.php';
  switch ($selectcomponente) {
    case 'antivirus':
      $sql = "SELECT `id_antivirus` FROM `antivirus` WHERE `antivirus`='$addcomponente'";
      $query = mysqli_query($link, $sql);
      $array = mysqli_fetch_array($query);
      if (!isset($array[0])) {
        $cc = new ComponentesComputo();
        $cc->AgregarComponente($selectcomponente, $addcomponente);
        echo 'Se agrego con Exito: '.$addcomponente;
      }else{
        echo 'El Componente ya Existe';
      }
      break;
    case 'cpu':
      $sql = "SELECT `id_cpu` FROM `cpu` WHERE `cpu`='$addcomponente'";
      $query = mysqli_query($link, $sql);
      $array = mysqli_fetch_array($query);
      if (!isset($array[0])) {
        $cc = new ComponentesComputo();
        $cc->AgregarComponente($selectcomponente, $addcomponente);
        echo 'Se agrego con Exito: '.$addcomponente;
      }else{
        echo 'El Componente ya Existe';
      }
      break;
    case 'marca_modelo':
      $sql = "SELECT `id_mm` FROM `marca_modelo` WHERE `mm`='$addcomponente'";
      $query = mysqli_query($link, $sql);
      $array = mysqli_fetch_array($query);
      if (!isset($array[0])) {
        $cc = new ComponentesComputo();
        $cc->AgregarComponente($selectcomponente, $addcomponente);
        echo 'Se agrego con Exito: '.$addcomponente;
      }else{
        echo 'El Componente ya Existe';
      }
      break;
    case 'os':
      $sql = "SELECT `id_os` FROM `os` WHERE `os`='$addcomponente'";
      $query = mysqli_query($link, $sql);
      $array = mysqli_fetch_array($query);
      if (!isset($array[0])) {
        $cc = new ComponentesComputo();
        $cc->AgregarComponente($selectcomponente, $addcomponente);
        echo 'Se agrego con Exito: '.$addcomponente;
      }else{
        echo 'El Componente ya Existe';
      }
      break;
    case 'software':
      $sql = "SELECT `id_software` FROM `software` WHERE `software`='$addcomponente'";
      $query = mysqli_query($link, $sql);
      $array = mysqli_fetch_array($query);
      if (!isset($array[0])) {
        $cc = new ComponentesComputo();
        $cc->AgregarComponente($selectcomponente, $addcomponente);
        echo 'Se agrego con Exito: '.$addcomponente;
      }else{
        echo 'El Componente ya Existe';
      }
      break;
    case 'tipo':
      $addcomponente = strtoupper($addcomponente);
      $sql = "SELECT `id_tipo` FROM `tipo` WHERE `tipo`='$addcomponente'";
      $query = mysqli_query($link, $sql);
      $array = mysqli_fetch_array($query);
      if (!isset($array[0])) {
        $cc = new ComponentesComputo();
        $cc->AgregarComponente($selectcomponente, $addcomponente);
        echo 'Se agrego con Exito: '.$addcomponente;
      }else{
        echo 'El Componente ya Existe';
      }
      break;

    default:
      break;
  }

?>
