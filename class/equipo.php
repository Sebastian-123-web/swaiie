<?php
  class EquipoComputo{

    function __construct(){

    }

    public function mostrarEquipo(){
      include 'conexion.php';
      $sql = "
        SELECT `equipo`.`id_equipo`,`equipo`.`nom_equipo`,`equipo`.`ram`,`equipo`.`disco`, `marca_modelo`.`mm`, `os`.`os`, `cpu`.`cpu`, `tipo`.`tipo`, `antivirus`.`antivirus`, `software`.`software`, `equipo`.`mantenimiento`, `usuario`.`id_user`
        FROM `equipo`
        INNER JOIN `marca_modelo` ON `equipo`.`id_mm`=`marca_modelo`.`id_mm`
        INNER JOIN `os` ON `equipo`.`id_os`=`os`.`id_os`
        INNER JOIN `cpu` ON `equipo`.`id_cpu`=`cpu`.`id_cpu`
        INNER JOIN `tipo` ON `equipo`.`id_tipo`=`tipo`.`id_tipo`
        INNER JOIN `antivirus` ON `equipo`.`id_antivirus`=`antivirus`.`id_antivirus`
        INNER JOIN `software` ON `equipo`.`id_software`=`software`.`id_software`
        INNER JOIN `usuario` ON `equipo`.`id_user`=`usuario`.`id_user`
      ";
      $query = mysqli_query($link, $sql);
      $result = array();
      while ($row = mysqli_fetch_array($query)){
        $result[] = array(
          'id_equipo' => $row['id_equipo'],
          'nom_equipo' => $row['nom_equipo'],
          'ram' => $row['ram'],
          'disco' => $row['disco'],
          'mm' => $row['mm'],
          'os' => $row['os'],
          'cpu' => $row['cpu'],
          'tipo' => $row['tipo'],
          'antivirus' => $row['antivirus'],
          'software' => $row['software'],
          'mantenimiento' => $row['mantenimiento'],
          'id_user' => $row['id_user']
        );
      }
      $send = json_encode($result);
      echo $send;
    }
    public function EliminarEquipo($id_equipo){
      include 'conexion.php';
      $sql = "DELETE FROM `equipo` WHERE `equipo`.`id_equipo` = $id_equipo";
      $query = mysqli_query($link, $sql);
    }
    public function EditarEquipo($id_equipo,$nom_equipo,){
      include 'conexion.php';
      $sql = "UPDATE `equipo` SET `id_equipo`=`$id_equipo`,`nom_equipo`=`$nom_equipo`,`id_mm` = '2',`ram`=`$ram`,`disco`=`$disco`,`id_mm`=`$id_mm`,`id_os` = '$id_os', `id_cpu` = '$id_cpu',`id_tipo`=`$id_tipo`,`id_antivirus`=`$id_antivirus`,`id_software`=`$id_software`,`mantenimiento`=`$mantenimiento`,`id_user` = 'rbanagasta' WHERE `equipo`.`id_equipo` = 'GEJM351F'";
      $query = mysqli_query($link, $sql);
    }
  }
  //$eq = new EquipoComputo();
  //$eq->mostrarEquipo();
?>
