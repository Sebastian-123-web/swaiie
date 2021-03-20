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
      echo $sendcpu;
      break;

    case 'mm':
      include '../clases/conexion.php';
      $sql = "SELECT * FROM `marca_modelo`";
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

    default:
      // code...
      break;
  }
?>
