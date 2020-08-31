<?php
  include 'conexion.php';
  $sqll = 'SELECT * FROM ticket ORDER BY id_ticket DESC LIMIT 1';
  $query = mysqli_query($link, $sqll);
  $result = mysqli_fetch_array($query);
  $last = $result[0];
  $sqlm = 'SELECT fech_mes_i, fech_año_i FROM ticket WHERE id_ticket='.$last;
  $resultm = mysqli_query($link, $sqlm);
  $arrayma = mysqli_fetch_array($resultm);
  echo $send = json_encode($arrayma);
?>
