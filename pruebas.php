<?php
include 'clases/conexion.php';
$sql = "SELECT * FROM `cpu`";
$query = mysqli_query($link, $sql);
$result[] = array();
while($row = mysqli_fetch_array($query)){
  $result[] = array(
    'id_cpu' => $row['id_cpu'],
    'cpu' => $row['cpu']
  );
}
foreach ($result as $key ) {
  if (isset($key['id_cpu'])) {
    echo $key['id_cpu'];
  }
}
//var_dump($result);
?>
