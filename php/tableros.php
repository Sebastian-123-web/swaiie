<?php
  include 'conexion.php';
  $sqlt = 'SELECT COUNT(*) FROM ticket';
  $sqlu = 'SELECT COUNT(*) FROM user';
  $sqle = 'SELECT COUNT(*) FROM equipo';

  $queryt = mysqli_query($link, $sqlt);
  $queryu = mysqli_query($link, $sqlu);
  $querye = mysqli_query($link, $sqle);

  $resultt = mysqli_fetch_array($queryt);
  $resultu = mysqli_fetch_array($queryu);
  $resulte = mysqli_fetch_array($querye);
  $result = array($resultt, $resultu, $resulte);

  $send = json_encode($result);
  echo $send;
?>
