<?php
  /*include '../clases/conexion.php';
  $sql = "SELECT * FROM `cpu`";
  $query = mysqli_query($link, $sql);
  $result = array();
  while($row = mysqli_fetch_array($query)){
    $result[] = array(
      'id_cpu' => $row['id_cpu'],
      'cpu' => $row['cpu']
    );
  }
  $sendcpu = json_encode($result);
  echo $sendcpu;*/
  $componente = $_POST['com'];
  switch ($componente) {
    case 'cpu':
      include '../clases/conexion.php';
      $sql = "SELECT * FROM `cpu` ORDER BY `cpu`.`cpu` ASC";
      $query = mysqli_query($link, $sql);
      $result = array();
      while($row = mysqli_fetch_array($query)){
        $result[] = array(
          'id_cpu' => $row['id_cpu'],
          'cpu' => $row['cpu']
        );
      }
      $sendcpu = json_encode($result);
      echo $sendcpu;
      break;

    case 'mm':
      include '../clases/conexion.php';
      $sql = "SELECT * FROM `marca_modelo` ORDER BY `marca_modelo`.`mm` ASC";
      $query = mysqli_query($link, $sql);
      $result = array();
      while($row = mysqli_fetch_array($query)){
        $result[] = array(
          'id_mm' => $row['id_mm'],
          'mm' => $row['mm']
        );
      }
      $sendmm = json_encode($result);
      echo $sendmm;
      break;

    case 'tipo':
      include '../clases/conexion.php';
      $sql = "SELECT * FROM `tipo` ORDER BY `tipo`.`tipo` ASC";
      $query = mysqli_query($link, $sql);
      $result = array();
      while($row = mysqli_fetch_array($query)){
        $result[] = array(
          'id_tipo' => $row['id_tipo'],
          'tipo' => $row['tipo']
        );
      }
      $sendtipo = json_encode($result);
      echo $sendtipo;
      break;

    case 'os':
      include '../clases/conexion.php';
      $sql = "SELECT * FROM `os` ORDER BY `os`.`os` ASC";
      $query = mysqli_query($link, $sql);
      $result = array();
      while($row = mysqli_fetch_array($query)){
        $result[] = array(
          'id_os' => $row['id_os'],
          'os' => $row['os']
        );
      }
      $sendos = json_encode($result);
      echo $sendos;
      break;

    case 'antivirus':
      include '../clases/conexion.php';
      $sql = "SELECT * FROM `antivirus` ORDER BY `antivirus`.`antivirus` ASC";
      $query = mysqli_query($link, $sql);
      $result = array();
      while($row = mysqli_fetch_array($query)){
        $result[] = array(
          'id_antivirus' => $row['id_antivirus'],
          'antivirus' => $row['antivirus']
        );
      }
      $sendantivirus = json_encode($result);
      echo $sendantivirus;
      break;

    case 'software':
      include '../clases/conexion.php';
      $sql = "SELECT * FROM `software` ORDER BY `software`.`software` ASC";
      $query = mysqli_query($link, $sql);
      $result = array();
      while($row = mysqli_fetch_array($query)){
        $result[] = array(
          'id_software' => $row['id_software'],
          'software' => $row['software']
        );
      }
      $sendsoftware = json_encode($result);
      echo $sendsoftware;
      break;

    case 'usuario':
      include '../clases/conexion.php';
      $sql = "SELECT `id_user` FROM `usuario` ORDER BY `usuario`.`id_user` ASC";
      $query = mysqli_query($link, $sql);
      $result = array();
      while($row = mysqli_fetch_array($query)){
        $result[] = array(
          'id_user' => $row['id_user']
        );
      }
      $sendusuario = json_encode($result);
      echo $sendusuario;
      break;

    default:
      // code...
      break;
  }
?>
