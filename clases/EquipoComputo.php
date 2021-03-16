<?php
  class EquipoComputo{

    //  AGREGAR EQUIPO A LA BASE DE DATOS
    public function AgregarEquipo($id_equipo,$nom_equipo,$ram,$disco,$tipo_disco,$id_mm,$id_os,$id_cpu,$generacion,$id_tipo,$id_antivirus,$id_software,$estado,$mantenimiento,$id_user){
      include 'conexion.php';
      $sql = "INSERT INTO `equipo` (`id_equipo`, `nom_equipo`, `ram`, `disco`, `tipo_disco`, `id_mm`, `id_os`, `id_cpu`, `generacion`, `id_tipo`, `id_antivirus`, `id_software`, `estado`, `mantenimiento`, `id_user`) VALUES ('$id_equipo', '$nom_equipo', '$ram', '$disco', '$tipo_disco', '$id_mm', '$id_os', '$id_cpu', '$generacion', '$id_tipo', '$id_antivirus', '$id_software', '$estado', '$mantenimiento', '$id_user');";
      // $sql = "
      //   INSERT INTO `equipo` (`id_equipo`, `nom_equipo`, `ram`, `disco`, `tipo_disco`, `id_mm`, `id_os`, `id_cpu`, `generacion`, `id_tipo`, `id_antivirus`, `id_software`, `estado`, `mantenimiento`, `id_user`)
      //   VALUES ('$id_equipo', '$nom_equipo', '$ram', '$disco', '$tipo_disco', '$id_mm', '$id_os', '$id_cpu','$generacion', '$id_tipo', '$id_antivirus', '$id_software', '$estado', '$mantenimiento', '$id_user');
      // ";
      mysqli_query($link, $sql);
    }


    //  MOSTRAR EQUIPO DE LA BASE DE DATOS
    public function MostrarEquipo(){
      include 'conexion.php';
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


    //  EDITAR EQUIPO DE LA BASE DE DATOS
    public function EditarEquipo($id_equipo,$id_equipo_new,$nom_equipo,$ram,$disco,$tipo_disco,$id_mm,$id_os,$id_cpu,$generacion,$id_tipo,$id_antivirus,$id_software,$estado,$mantenimiento,$id_user){
      include 'conexion.php';
      $sql = "
        UPDATE `equipo`
        SET `id_equipo`='$id_equipo_new' , `nom_equipo`='$nom_equipo' , `ram`='$ram' , `disco`='$disco' , `tipo_disco`='$tipo_disco' , `id_mm`='$id_mm' , `id_os`='$id_os' , `id_cpu`='$id_cpu' , `generacion`='$generacion' , `id_tipo`='$id_tipo' , `id_antivirus`='$id_antivirus' , `id_software`='$id_software' , `estado`='$estado' , `mantenimiento`='$mantenimiento' , `id_user`='$id_user'
        WHERE `equipo`.`id_equipo`='$id_equipo'
      ";
      mysqli_query($link, $sql);
    }


    //  ELIMINAR EQUIPO DE LA BASE DE DATOS
    public function EliminarEquipo($id_equipo){
      include 'conexion.php';
      $sql = "DELETE FROM `equipo` WHERE `equipo`.`id_equipo` = $id_equipo";
      mysqli_query($link, $sql);
    }
  }
  $eq = new EquipoComputo();
  //$eq->MostrarEquipo();
  //$eq->EliminarEquipo();
  //$eq->EditarEquipo('GEJN3517','GEJN3517','TBGRGAFSI007','32','2000','HDD','2','3','3','2Gen','2','1','1','Activo','Aqui va mantenimiento del equipo claro si es que se a hecho','rbanagasta');
  $eq->AgregarEquipo('NM654GN', 'TBGRGRH', '6', '1000', 'HDD', '1', '10', '3', '4', '2', '1', '1', 'Activo', 'ninguno', 'nin');
?>
