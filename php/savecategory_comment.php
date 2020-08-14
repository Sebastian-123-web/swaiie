<?php
    $valor1 = $_GET['valor1'];
    switch($valor1){
      case 'estado':
        category();
      break;

      case 'prioridad':
        category();
      break;

      case 'comen':
        comment();
      break;
    }


    function category(){
      $valor1 = $_GET['valor1'];$nt = $_GET['nt'];$valor2 = $_GET['valor'];
      include 'conexion.php';
      $sql = "UPDATE `soli-tk` SET `$valor1`='$valor2' WHERE `num-tk`= $nt";
      $query = $link->query($sql);
    }
    function comment(){
      $valor1 = $_GET['valor1'];$valor = $_GET['valor'];$nt = $_GET['nt'];
      include 'conexion.php';
      $sql = "UPDATE `soli-tk` SET `$valor1`='$valor' WHERE `num-tk`= $nt";
      $query = $link->query($sql);
    }
?>
