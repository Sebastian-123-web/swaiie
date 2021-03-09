<?php
  $cadena = "Intel(R) Core(TM) i3-2130 CPU @ 3.40GHz";
  //$bmarca = strpos($cadena,'Intel');
  $bmarca = substr($cadena, 0, 5);
  if($bmarca == 'Intel'){
    $bmarca2 = substr($cadena, 9, 4);
    $bfamilia = substr($cadena, 18, 2);
    echo $procesador = $bmarca.' '.$bmarca2.' '.$bfamilia;
    $bgeneracion = substr($cadena, 21, 1);
    echo ' '.$bgeneracion.'° Generacion';
  }elseif(substr($cadena, 0, 3)=='AMD'){
    echo "Es AMD";
  }
?>
