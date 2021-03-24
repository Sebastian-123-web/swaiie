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

    public function BuscarComponente($componente,$abuscar){
      include 'conexion.php';
      if(isset($abuscar) && $componente != 'id_user'){
        $sql = "
          SELECT `equipo`.`id_equipo`,`equipo`.`nom_equipo`,`equipo`.`ram`,`equipo`.`disco`,`equipo`.`tipo_disco`, `marca_modelo`.`mm`, `os`.`os`, `cpu`.`cpu`, `equipo`.`generacion`, `tipo`.`tipo`, `antivirus`.`antivirus`, `software`.`software`, `equipo`.`estado`, `equipo`.`mantenimiento`, `usuario`.`id_user`
          FROM `equipo`
          INNER JOIN `marca_modelo` ON `equipo`.`id_mm`=`marca_modelo`.`id_mm`
          INNER JOIN `os` ON `equipo`.`id_os`=`os`.`id_os`
          INNER JOIN `cpu` ON `equipo`.`id_cpu`=`cpu`.`id_cpu`
          INNER JOIN `tipo` ON `equipo`.`id_tipo`=`tipo`.`id_tipo`
          INNER JOIN `antivirus` ON `equipo`.`id_antivirus`=`antivirus`.`id_antivirus`
          INNER JOIN `software` ON `equipo`.`id_software`=`software`.`id_software`
          INNER JOIN `usuario` ON `equipo`.`id_user`=`usuario`.`id_user`
          WHERE `$componente` LIKE '%$abuscar%'
          ORDER BY `equipo`.`nom_equipo` ASC
        ";
        $query = mysqli_query($link, $sql);
        $result = array();
        while ($row = mysqli_fetch_array($query)){
          $result[] = array(
            'id_equipo' => $row['id_equipo'],
            'nom_equipo' => $row['nom_equipo'],
            'ram' => $row['ram'],
            'disco' => $row['disco'],
            'tipo_disco' => $row['tipo_disco'],
            'mm' => $row['mm'],
            'os' => $row['os'],
            'cpu' => $row['cpu'],
            'generacion' => $row['generacion'],
            'tipo' => $row['tipo'],
            'antivirus' => $row['antivirus'],
            'software' => $row['software'],
            'estado' => $row['estado'],
            'mantenimiento' => $row['mantenimiento'],
            'id_user' => $row['id_user']
          );
        }
        $send = json_encode($result);
        echo $send;
      }else {
        $sql = "
          SELECT `equipo`.`id_equipo`,`equipo`.`nom_equipo`,`equipo`.`ram`,`equipo`.`disco`,`equipo`.`tipo_disco`, `marca_modelo`.`mm`, `os`.`os`, `cpu`.`cpu`, `equipo`.`generacion`, `tipo`.`tipo`, `antivirus`.`antivirus`, `software`.`software`, `equipo`.`estado`, `equipo`.`mantenimiento`, `usuario`.`id_user`
          FROM `equipo`
          INNER JOIN `marca_modelo` ON `equipo`.`id_mm`=`marca_modelo`.`id_mm`
          INNER JOIN `os` ON `equipo`.`id_os`=`os`.`id_os`
          INNER JOIN `cpu` ON `equipo`.`id_cpu`=`cpu`.`id_cpu`
          INNER JOIN `tipo` ON `equipo`.`id_tipo`=`tipo`.`id_tipo`
          INNER JOIN `antivirus` ON `equipo`.`id_antivirus`=`antivirus`.`id_antivirus`
          INNER JOIN `software` ON `equipo`.`id_software`=`software`.`id_software`
          INNER JOIN `usuario` ON `equipo`.`id_user`=`usuario`.`id_user`
          WHERE `usuario`.`id_user` LIKE '%$abuscar%'
          ORDER BY `equipo`.`nom_equipo` ASC
        ";
        $query = mysqli_query($link, $sql);
        $result = array();
        while ($row = mysqli_fetch_array($query)){
          $result[] = array(
            'id_equipo' => $row['id_equipo'],
            'nom_equipo' => $row['nom_equipo'],
            'ram' => $row['ram'],
            'disco' => $row['disco'],
            'tipo_disco' => $row['tipo_disco'],
            'mm' => $row['mm'],
            'os' => $row['os'],
            'cpu' => $row['cpu'],
            'generacion' => $row['generacion'],
            'tipo' => $row['tipo'],
            'antivirus' => $row['antivirus'],
            'software' => $row['software'],
            'estado' => $row['estado'],
            'mantenimiento' => $row['mantenimiento'],
            'id_user' => $row['id_user']
          );
        }
        $send = json_encode($result);
        echo $send;
      }
    }
  }

  //$cc = new ComponentesComputo();
  //$cc->AgregarComponente('os', 'Windows server 2008');
  //$cc->BuscarComponente('antivirus','GDa');

?>
