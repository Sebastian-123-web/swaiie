<?php
// include 'conexion.php';
$bar = $_GET['bar'];

switch ($bar) {
  case 't':
    all_tkt();
  break;
  case 'u':
    all_user();
  break;
  case 'e':
    all_est();
  break;
  case 'q':
    all_equi();
  break;
}


function all_tkt(){
  include 'conexion.php';
  $sql = "SELECT MAX(`num-tk`) as maximo FROM `soli-tk`";
  $query = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($query);
  $mnt = $row[0];
  echo '
  <div class="d-flex card-columns" id="contenido" style="width: calc(100%);">
    <div class="card tkt respon-tkt" style="min-width: 400px;">
      <div class="card-header d-flex">
        <button type="button" name="button" class="btn btn-secondary" style="margin-right: 20px;">Eliminar</button>
        <select name="estado" class="form-control" id="state" style="margin-right: 20px;">
                  <option value="Todo">Todo</option>
                  <option value="Abierto">Abierto</option>
                  <option value="Pendiente">Pendiente</option>
                  <option value="Resuelto">Resuelto</option>
                  <option value="Cerrado">Cerrado</option>
        </select>
        <select name="prioridad" class="form-control" id="priority" style="margin-right: 20px;">
                  <option value="Todo">Todo</option>
                  <option value="Bajo">Bajo</option>
                  <option value="Medio">Medio</option>
                  <option value="Alto">Alto</option>
                  <option value="Urgente">Urgente</option>
        </select>
        <input type="text" name="" value="" class="form-control" placeholder="Buscar" id="buscar" style="margin-right: 20px;">
        <img src="img/busqueda.png" alt="" class="img-busqueda btn-light" onclick="search();">
      </div>
      <!-- -------------------------------------------- TICKET ---------------------------------------------- -->
      <div class="overflow-auto" id="tickets" style="min-width: 400px; height: calc(100% - 65px);"><form>';
  while ($mnt >= 1) {
    $sql = "SELECT * FROM `soli-tk` WHERE `num-tk`=".$mnt;
    $query = mysqli_query($link, $sql);
    $rowtkt = mysqli_fetch_array($query);
    if (empty($rowtkt[0])) {

    }else{
      echo '
        <div class="input-group" style="margin: 10px 0 10px 0; min-width: 400px;">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="checkbox" name="'.$rowtkt[0].'" id="chkbox" aria-label="Checkbox for following text input" value></form>
            </div>
          </div>
          <div class="form-control d-flex" style="height: 64px; cursor: pointer;" onclick="open_tkt('.$rowtkt[0].');">
            <div class="" style="margin: 8px 10px 8px 0;">
              <h3 style="margin: 0;">'.$rowtkt[0].'</h3>
            </div>
            <div class="d-flex" style="width: 80%; flex-direction: column; min-width: 300px;">
              <div class="" style="min-width: 300px; white-space:nowrap; overflow:hidden; text-overflow: ellipsis;">
                <p style="margin: 0; min-width: 300px;white-space:nowrap; overflow:hidden; text-overflow: ellipsis;"><b>'.$rowtkt[1].' '.$rowtkt[2].':</b>'.$rowtkt[3].'</p>
              </div>
              <div class="" style="min-width: 300px;white-space:nowrap; overflow:hidden; text-overflow: ellipsis;">
                '.$rowtkt[5].' - '.$rowtkt[7].'
              </div>
            </div>
            <div class="e-p-respo" style="flex-direction: column; margin: 0 10px; width: 110px;">
              <div class="">
                <p style="margin: 0 10px;">';$estado = $rowtkt[11]; if(empty($estado)){echo '...';}else{echo $estado;}; echo '</p>
              </div>
              <div class="d-flex">
                <p style="margin: 0 10px;">';$prioridad = $rowtkt[12]; if(empty($prioridad)){echo '...';}else{echo $prioridad;}; echo '</p>
              </div>
            </div>
            <div class="img-tkt">
              <img src="img/solicitudes/'; if(empty($rowtkt[8])){echo 'sin-img.png';}else{ echo $rowtkt[8];}; echo '" alt="" style="width:50px; height: 50px; margin: 0 10px;">
            </div>
          </div>
        </div>';
    }
    $mnt--;
  }
  echo '
      </div>
      <!-- ------------------------------------------ FIN TICKET ------------------------------------------ -->
    </div>
    <div class="card rank respon-rank" style="width: 500px; height: ; min-width: 400px;">
      <div class="card-header">
        Racking
      </div>
    </div>
  </div>
  ';
}

function all_user(){
  echo 'Usuarios';
}

function all_est(){
  echo 'Estadisticas';
}

function all_equi(){
  echo '
  <table class="table" style="font-size: 15px">
    <thead class="thead-light">
      <tr>
        <th>#</th><th>Nombre Equipo</th><th>Tipo</th><th>Modelo</th><th>Serie</th><th>OS</th><th>RAM</th><th>Procesador</th><th>Disco Duro</th>
        <th><input type="text" style="width: 120px;"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th><td id="dc">TBGRGAFRCP001</td><td>DESKTOP</td><td>HP COMPAQ 6300 PRO</td><td>MXL2360FBV</td><td>Windows 7 Pro</td><td>6GB</td><td>CORE i5</td><td>500GB</td>
        <th>
        <!-- ///////////////////////////////// -->
        <!-- FORMULARIO PARA AGREGAR UN EQUIPO -->
        <!-- ///////////////////////////////// -->
        <div id="addpc" style="display: none;">
          <div class="d-flex">
            <input type="text" name="" value="" class="form-control margin-5px" placeholder="Nombre de Equipo">
            <select class="form-control margin-5px" style="width : 154px; heigth : 1px" id="tipo">
              <option selected>Tipo</option>
              <option value="DESKTOP">DESKTOP</option>
              <option value="LAPTOP">LAPTOP</option>
            </select>
          </div>
          <div class="d-flex">
            <input type="text" name="" value="" class="form-control margin-5px" placeholder="Marca">
            <input type="text" name="" value="" class="form-control margin-5px" placeholder="Modelo">
          </div>
          <div class="d-flex">
            <input type="text" name="" value="" class="form-control margin-5px" placeholder="N° Serie">
            <select class="form-control margin-5px" id="tipo">
              <option selected>OS</option>
              <option value="Windows Server">Windows Server</option>
              <option value="Windows 7">Windows 7</option>
              <option value="Windows 8">Windows 8</option>
              <option value="Windows 8.1">Windows 8.1</option>
              <option value="Windows 10">Windows 10</option>
            </select>
          </div>
          <div class="d-flex">
            <input type="text" name="" value="" class="form-control margin-5px" placeholder="Procesador">
            <input type="text" name="" value="" class="form-control margin-5px" placeholder="RAM">
            <select class="form-control margin-5px" id="tipo">
              <option selected>Disco Duro</option>
              <option value="160">160GB</option>
              <option value="250">250GB</option>
              <option value="320">320GB</option>
              <option value="500">500GB</option>
              <option value="570">750GB</option>
              <option value="1">1T</option>
              <option value="1.5">1.5T</option>
              <option value="2">2T</option>
            </select>
          </div>
          <div class="d-flex">
            <input type="text" name="" value="" class="form-control margin-5px" placeholder="CT Bateria(opcional)">
            <input type="text" name="" value="" class="form-control margin-5px" style="width : 154px;" placeholder="HP Part N°">
            <input type="text" name="" value="" class="form-control margin-5px" style="width : 154px;" placeholder="HP Spare N°">
          </div>
          <div class="d-flex">
            <input type="text" name="" value="" class="form-control margin-5px" placeholder="CT Cargador(opcional)">
            <input type="text" name="" value="" class="form-control margin-5px" style="width : 154px;" placeholder="HP Part N°">
            <input type="text" name="" value="" class="form-control margin-5px" style="width : 154px;" placeholder="HP Spare N°">
          </div>
          <div class="d-flex">
            <select class="form-control margin-5px" id="tipo">
              <option selected>Posicion</option>
              <option value="Antes">Antes</option>
              <option value="Despues">Despues</option>
            </select>
            <select class="form-control margin-5px" id="tipo">
              <option selected>Usuario</option>
              <option value="user1">user1</option>
              <option value="user2">user2</option>
              <option value="user3">user3</option>
              <option value="user4">user4</option>
              <option value="user5">user5</option>
            </select>
            <select class="form-control margin-5px" id="tipo">
              <option selected>Tecnico</option>
              <option value="encargado1">encargado1</option>
              <option value="encargado2">encargado2</option>
              <option value="encargado3">encargado3</option>
            </select>
          </div>
        </div>
        <!-- ////////////////////////////////////// -->
        <!-- FIN DEL FORMULARIO PARA AGREGAR EQUIPO -->
        <!-- ////////////////////////////////////// -->
          <i class="fas fa-plus-square margin-iz-de-10px" id="agregar" style="cursor: pointer;" onclick="addqe();"></i>
          <i class="fas fa-edit margin-iz-de-10px" style="cursor: pointer;"></i>
          <i class="fas fa-file-alt margin-iz-de-10px" style="cursor: pointer;"></i>
          <i class="fas fa-trash margin-iz-de-10px" style="cursor: pointer;"></i>
        </th>
      </tr>
    </tbody>
  </table>
       ';
}
?>
