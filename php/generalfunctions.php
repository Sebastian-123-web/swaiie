<?php
  include 'conexion.php';
  $state = $_GET['state']; $priority = $_GET['priority']; $buscar = $_GET['buscar'];

  if($buscar!=""){
    search_one();
  }elseif ($state=='Todo' && $priority=='Todo') {
    search_two($state, $priority);
  }elseif ($state=='Todo' && $priority!='Todo') {
    search_two($state, $priority);
  }elseif ($state!='Todo' && $priority=='Todo') {
    search_two($state, $priority);
  }else{
    search_two($state, $priority);
  }

  function search_one(){
    $buscar = $_GET['buscar']; $salida='';
    include 'conexion.php';
    //BUSCAR EN LA TABLA UNA PALABRA EN ESPECIFICO
    $sql = "SELECT * FROM `soli-tk` WHERE `nom` LIKE '%".$buscar."%' OR `ape` LIKE '%".$buscar."%' OR `mail` LIKE '%".$buscar."%' OR `de` LIKE '%".$buscar."%'";
    $query = $link->query($sql);
    if($query->num_rows>0){
      while ($rowtkt = $query->fetch_assoc()){
        echo $salida='
        <div class="input-group" style="margin: 10px 0 10px 0; min-width: 400px;">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="checkbox" name="'.$rowtkt['num-tk'].'" id="chkbox" aria-label="Checkbox for following text input" value></form>
            </div>
          </div>
          <div class="form-control d-flex" style="height: 64px; cursor: pointer;" onclick="open_tkt('.$rowtkt['num-tk'].');">
            <div class="" style="margin: 8px 10px 8px 0;">
              <h3 style="margin: 0;">'.$rowtkt['num-tk'].'</h3>
            </div>
            <div class="d-flex" style="width: 80%; flex-direction: column; min-width: 300px;">
              <div class="" style="min-width: 300px; white-space:nowrap; overflow:hidden; text-overflow: ellipsis;">
                <p style="margin: 0; min-width: 300px;white-space:nowrap; overflow:hidden; text-overflow: ellipsis;"><b>'.$rowtkt['nom'].' '.$rowtkt['ape'].':</b>'.$rowtkt['mail'].'</p>
              </div>
              <div class="" style="min-width: 300px;white-space:nowrap; overflow:hidden; text-overflow: ellipsis;">
                '.$rowtkt['de'].' - '.$rowtkt['descp'].'
              </div>
            </div>
            <div class="e-p-respo" style="flex-direction: column; margin: 0 10px; width: 110px;">
              <div class="">
                <p style="margin: 0 10px;">';$estado = $rowtkt['estado']; if(empty($estado)){echo '...';}else{echo $estado;}; echo '</p>
              </div>
              <div class="d-flex">
                <p style="margin: 0 10px;">';$prioridad = $rowtkt['prioridad']; if(empty($prioridad)){echo '...';}else{echo $prioridad;}; echo '</p>
              </div>
            </div>
            <div class="img-tkt">
              <img src="img/solicitudes/'; if(empty($rowtkt['img'])){echo 'sin-img.png';}else{ echo $rowtkt['img'];}; echo '" alt="" style="width:50px; height: 50px; margin: 0 10px;">
            </div>
          </div>
        </div>
        ';
      }
    }else{
      echo '<h4 style="text-aling: center;">No hay datos :(</h4>';
    }
  }

  function search_two($var1, $var2){
    include 'conexion.php';
    if($var1=='Todo' && $var2=='Todo'){
      $sql="SELECT * FROM `soli-tk`";
    }else{
      $sql = "SELECT * FROM `soli-tk` WHERE `estado`='".$var1."' OR `prioridad`='".$var2."'";
    }
    $query = $link -> query($sql);
    if($query->num_rows>0){
      while ($rowtkt = $query->fetch_assoc()){
        echo $salida='
        <div class="input-group" style="margin: 10px 0 10px 0; min-width: 400px;">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="checkbox" name="'.$rowtkt['num-tk'].'" id="chkbox" aria-label="Checkbox for following text input" value></form>
            </div>
          </div>
          <div class="form-control d-flex" style="height: 64px; cursor: pointer;" onclick="open_tkt('.$rowtkt['num-tk'].');">
            <div class="" style="margin: 8px 10px 8px 0;">
              <h3 style="margin: 0;">'.$rowtkt['num-tk'].'</h3>
            </div>
            <div class="d-flex" style="width: 80%; flex-direction: column; min-width: 300px;">
              <div class="" style="min-width: 300px; white-space:nowrap; overflow:hidden; text-overflow: ellipsis;">
                <p style="margin: 0; min-width: 300px;white-space:nowrap; overflow:hidden; text-overflow: ellipsis;"><b>'.$rowtkt['nom'].' '.$rowtkt['ape'].':</b>'.$rowtkt['mail'].'</p>
              </div>
              <div class="" style="min-width: 300px;white-space:nowrap; overflow:hidden; text-overflow: ellipsis;">
                '.$rowtkt['de'].' - '.$rowtkt['descp'].'
              </div>
            </div>
            <div class="e-p-respo" style="flex-direction: column; margin: 0 10px; width: 110px;">
              <div class="">
                <p style="margin: 0 10px;">';$estado = $rowtkt['estado']; if(empty($estado)){echo '...';}else{echo $estado;}; echo '</p>
              </div>
              <div class="d-flex">
                <p style="margin: 0 10px;">';$prioridad = $rowtkt['prioridad']; if(empty($prioridad)){echo '...';}else{echo $prioridad;}; echo '</p>
              </div>
            </div>
            <div class="img-tkt">
              <img src="img/solicitudes/'; if(empty($rowtkt['img'])){echo 'sin-img.png';}else{ echo $rowtkt['img'];}; echo '" alt="" style="width:50px; height: 50px; margin: 0 10px;">
            </div>
          </div>
        </div>
        ';
      }
    }else{
      echo '<h4 style="text-aling: center;">No hay datos :(</h4>';
    }
  }
?>
