<?php
  class ComponentesComputo{

    public function AgregarComponente($componente, $valorcom){
      include 'conexion.php';
      switch ($componente) {
        case 'antivirus':
          $sql = "INSERT INTO `antivirus` (`id_antivirus`, `antivirus`) VALUES (NULL , '$valorcom')";
          mysqli_query($link, $sql);
          break;
        case 'cpu':
          $sql = "INSERT INTO `cpu` (`id_cpu`, `cpu`) VALUES (NULL , '$valorcom')";
          mysqli_query($link, $sql);
          break;
        case 'marca_modelo':
          $sql = "INSERT INTO `marca_modelo` (`id_mm`, `mm`) VALUES (NULL , '$valorcom')";
          mysqli_query($link, $sql);
          break;
        case 'os':
          $sql = "INSERT INTO `os` (`id_os`, `os`) VALUES (NULL , '$valorcom')";
          mysqli_query($link, $sql);
          break;
        case 'software':
          $sql = "INSERT INTO `software` (`id_software`, `software`) VALUES (NULL , '$valorcom')";
          mysqli_query($link, $sql);
          break;
        case 'tipo':
          $sql = "INSERT INTO `tipo` (`id_tipo`, `tipo`) VALUES (NULL , '$valorcom')";
          mysqli_query($link, $sql);
          break;

        default:
          break;
      }
    }

    public function MostrarComponente(){
      
    }
  }

  //$cc = new ComponentesComputo();
  //$cc->AgregarComponente('os', 'Windows server 2008');

?>
