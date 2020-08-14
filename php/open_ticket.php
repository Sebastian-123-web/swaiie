<?php
function open(){
  $nt = $_GET['nt'];
  include 'conexion.php';
  $sql = "SELECT * FROM `soli-tk` WHERE `num-tk`=".$nt."";
  $query = $link->query($sql);
  $row = $query->fetch_assoc();
  echo '
  <div class="d-flex card-columns" id="contenido" style="width: 100%;">
    <div class="card" style="margin: 15px 8px 15px 15px; width: 600px;">
      <div class="card-header">
        <h5>Ticket N° '.$row['num-tk'].'</h5>
      </div>
      <div class="">
        <div class="" style="margin: 15px;">
          <div class="d-flex">
            <div class=""><p class="font-weight-light">Nombre y Apellido: </p></div><p>'.$row['nom'].' '.$row['ape'].'</p>
          </div>
          <div class="d-flex">
            <div class=""><p class="font-weight-light">Email:</p></div><p>'.$row['mail'].'</p>
          </div>
          <div class="d-flex">
            <div class=""><p class="font-weight-light">Area:</p></div><p>'.$row['area'].'</p>
          </div>
          <div class="">
            <div class="d-flex">
              <p class="font-weight-light">Fecha Generacion: </p><p>'.$row['date-inicio'].'</p>
            </div>
            <div class="d-flex">
              <p class="font-weight-light">Fecha terminado: </p><p> --/--/---- </p>
            </div>
          </div>
          <div class="d-flex">
            <select name="estado" class="form-control" id="state" style="margin-right: 20px;" onchange="state('.$row['num-tk'].');">';
            if(!empty($row['estado'])){
              if($row['estado']=='Abierto'){
                echo '
                          <option selected>Abierto</option>
                          <option value="Pendiente">Pendiente</option>
                          <option value="Resuelto">Resuelto</option>
                          <option value="Cerrado">Cerrado</option>
                      ';
              }elseif($row['estado']=='Pendiente') {
                echo '
                          <option value="Abierto">Abierto</option>
                          <option selected>Pendiente</option>
                          <option value="Resuelto">Resuelto</option>
                          <option value="Cerrado">Cerrado</option>
                      ';
              }elseif($row['estado']=='Resuelto'){
                echo '
                          <option value="Abierto">Abierto</option>
                          <option value="Pendiente">Pendiente</option>
                          <option selected>Resuelto</option>
                          <option value="Cerrado">Cerrado</option>
                      ';
              }elseif($row['estado']=='Cerrado'){
                echo '
                          <option value="Abierto">Abierto</option>
                          <option value="Pendiente">Pendiente</option>
                          <option value="Resuelto">Resuelto</option>
                          <option selected>Cerrado</option>
                      ';
              }elseif($row['estado']==''){
                echo '
                          <option selected>...</option>
                          <option value="Abierto">Abierto</option>
                          <option value="Pendiente">Pendiente</option>
                          <option value="Resuelto">Resuelto</option>
                          <option value="Cerrado">Cerrado</option>
                      ';
              }
            }else{
              echo '
                        <option selected>...</option>
                        <option value="Abierto">Abierto</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="Resuelto">Resuelto</option>
                        <option value="Cerrado">Cerrado</option>
                    ';
            }
            echo '
            </select>
            <select name="prioridad" class="form-control" id="priority" style="margin-right: 20px;" onchange="priority('.$row['num-tk'].');">';
            if(!empty($row['prioridad'])){
              if($row['prioridad']=='Bajo'){
                echo '
                          <option selected>Bajo</option>
                          <option value="Medio">Medio</option>
                          <option value="Alto">Alto</option>
                          <option value="Urgente">Urgente</option>
                ';
              }elseif($row['prioridad']=='Medio') {
                echo '
                          <option value="Bajo">Bajo</option>
                          <option selected>Medio</option>
                          <option value="Alto">Alto</option>
                          <option value="Urgente">Urgente</option>
                ';
              }elseif($row['prioridad']=='Alto'){
                echo '
                          <option value="Bajo">Bajo</option>
                          <option value="Medio">Medio</option>
                          <option selected>Alto</option>
                          <option value="Urgente">Urgente</option>
                ';
              }elseif($row['prioridad']=='Urgente'){
                echo '
                          <option value="Bajo">Bajo</option>
                          <option value="Medio">Medio</option>
                          <option value="Alto">Alto</option>
                          <option selected>Urgente</option>
                ';
              }elseif($row['prioridad']==' '){
                echo '
                          <option selected>...</option>
                          <option value="Bajo">Bajo</option>
                          <option value="Medio">Medio</option>
                          <option value="Alto">Alto</option>
                          <option value="Urgente">Urgente</option>
                ';
              }
            }else{
              echo '
                        <option selected>...</option>
                        <option value="Bajo">Bajo</option>
                        <option value="Medio">Medio</option>
                        <option value="Alto">Alto</option>
                        <option value="Urgente">Urgente</option>
              ';
            }
            echo '
            </select>
          </div>
        </div>
      </div>
      <div class="" style="width: calc(100% - 30px); height: calc(100% - 320px); margin: 15px;">
          <div class="d-flex justify-content-between"><h5 style="margin: 0;">Encargado:</h5><button class="btn btn-link" onclick="comment('.$row['num-tk'].');">Actualizar Comentario</button></div>
          <textarea name="comen" rows="6" class="form-control" id="comment" placeholder="Texto">'.$row['comen'].'</textarea>
          <div class="card" style="margin: 10px 10px 10px 0;">
            <a onclick="inf_mant('.$row['num-tk'].');" class="btn btn-danger" style="color: white; margin: 14px;">Mant. Pre/Corr</a>
            <a onclick="" class="btn btn-danger" style="color: white; margin: 14px;">Informe Equipo</a>
          </div>
      </div>
    </div>
    <div class="card" style="margin: 15px 15px 15px 8px;">
      <div class="card" style="width: calc(100% - 30px); margin: 15px;">
        <h5>User</h5><p>'.$row['de'].'-'.$row['tipo'].':'.$row['descp'].'</p>
      </div>
      <div class="d-flex">
          <div id="ventana" style="display: none;">
            <div style="display: flex; margin: 10px 5px;">
                <p style="margin: 8px 8px 8px 0;">Marca/ Modelo: </p>
                <select class="form-control" style="width : 380px; heigth : 1px" id="modelo">
                  <option selected>...</option>
                  <option value="HP 100-053LA">HP 100-053LA</option>
                  <option value="HP 1000">HP 1000</option>
                  <option value="HP 14-AC109LA">HP 14-AC109LA</option>
                        <option value="HP 14-D003LA">HP 14-D003LA</option>
                        <option value="HP 14-SB011LA">HP 14-SB011LA</option>
                        <option value="HP 14-AM013LA">HP 14-AM013LA</option>
                        <option value="HP 15-BS036LA">HP 15-BS036LA</option>
                        <option value="HP 15-SB018LA">HP 15-SB018LA</option>
                        <option value="HP 15-DB0007LA">HP 15-DB0007LA</option>
                        <option value="HP 240 G5">HP 240 G5</option>
                        <option value="HP 240 G6">HP 240 G6</option>
                        <option value="HP 245 G5">HP 245 G5</option>
                        <option value="HP 250 G4">HP 250 G4</option>
                        <option value="HP 250 G5">HP 250 G5</option>
                        <option value="HP 280 G1">HP 280 G1</option>
                        <option value="HP 340 G1">HP 340 G1</option>
                        <option value="HP 440 G2">HP 440 G2</option>
                        <option value="HP 450 G3">HP 450 G3</option>
                        <option value="HP 420">HP 420</option>
                        <option value="HP 530">HP 530</option>
                        <option value="HP COMPAQ 515">HP COMPAQ 515</option>
                        <option value="HP COMPAQ 4000 PRO">HP COMPAQ 4000 PRO</option>
                        <option value="HP COMPAQ 6200 PRO">HP COMPAQ 6200 PRO</option>
                        <option value="HP COMPAQ 6300 PRO">HP COMPAQ 6300 PRO</option>
                        <option value="HP COMPAQ 8200 ELITE">HP COMPAQ 8200 ELITE</option>
                        <option value="HP COMPAQ DC5800">HP COMPAQ DC5800</option>
                        <option value="HP ELITE DESK 800 G1">HP ELITE DESK 800 G1</option>
                        <option value="HP ELITEBOOK 2560P">HP ELITEBOOK 2560P</option>
                        <option value="HP PAVILION DV4">HP PAVILION DV4</option>
                        <option value="HP PAVILION G4 NOTEBOOK">HP PAVILION G4 NOTEBOOK</option>
                        <option value="HP PRO 3000 SMALL">HP PRO 3000 SMALL</option>
                        <option value="HP PRO 3400">HP PRO 3400</option>
                        <option value="HP PROBOOK 4320S">HP PROBOOK 4320S</option>
                        <option value="HP PROBOOK 4430S">HP PROBOOK 4430S</option>
                        <option value="HP PROBOOK 4440S">HP PROBOOK 4440S</option>
                        <option value="HP PROBOOK 5330">HP PROBOOK 5330</option>
                        <option value="HP PROBOOK 450">HP PROBOOK 450</option>
                        <option value="HP PRODESK 600 G1">HP PRODESK 600 G1</option>
                        <option value="HP PRODESK 600 G2">HP PRODESK 600 G2</option>
                        <option value="HP PRODESK 600 G3 SFF">HP PRODESK 600 G3 SFF</option>
                        <option value="HP PROLIANT MICROSERVER G7">HP PROLIANT MICROSERVER G7</option>
                        <option value="DELL INSPIRION 13 S-5000">DELL INSPIRION 13 S-5000</option>
                        <option value="COMPATIBLE">COMPATIBLE</option>
                        <option value="PRESARIO CQ43">PRESARIO CQ43</option>
                        <option value="LENOVO X1 Carbon">LENOVO X1 Carbon</option>
                  <option value="SATELITE C45A">SATELITE C45A</option>
                </select>
            </div>
            <div style="display: flex; margin: 10px 5px;">
                <p style="margin: 8px 8px 8px 0;">N° Serie: </p><input type="text" class="form-control" style="width : 220px; heigth : 1px" id="serie">
                <p style="margin: 8px 8px 8px 10px;">Tipo:</p>
                  <select class="form-control" style="width : 154px; heigth : 1px" id="tipo">
                    <option selected>...</option>
                    <option value="DESKTOP">DESKTOP</option>
                    <option value="LAPTOP">LAPTOP</option>
                  </select>
            </div>
            <div style="display: flex; margin: 10px 5px;">
              <p style="margin: 8px 8px 8px 0;">OS: </p>
                <select class="form-control" style="width : 401px; heigth : 1px" id="os">
                  <option selected>...</option>
                  <option value="Windows 7 Pro x32">Windows 7 Pro x32</option>
                  <option value="Windows 7 Pro x64">Windows 7 Pro x64</option>
                  <option value="Windows 8.1 Pro x32">Windows 8.1 x32</option>
                  <option value="Windows 8.1 Pro x64">Windows 8.1 x64</option>
                  <option value="Windows 10 Pro x32">Windows 10 Pro x32</option>
                  <option value="Windows 10 Pro x64">Windows 10 Pro x64</option>
                </select>
              </p>
              <p style="margin: 8px 8px 8px 10px;">CPU:</p>
                <select class="form-control" style="width : 401px; heigth : 1px" id="cpu">
                  <option selected>...</option>
                  <option value="Core i3">Core i3</option>
                  <option value="Core i5">Core i5</option>
                  <option value="Core i7">Core i7</option>
                </select>
              <p style="margin: 8px 8px 8px 10px;">RAM: </p><input type="text" class="form-control" style="width : 50px; heigth : 1px" id="ram">
            </div>
            <div style="display: flex; margin: 10px 5px;">
              <p style="margin: 8px 8px 8px 0;">Responsable: </p>
                <input type="text" class="form-control" style="width : 443px; heigth : 1px" id="responsable">
            </div>
          </div>
      </div>
      <div class="card" style="width: calc(100% - 30px); height: calc(100% - 281px);margin: 15px;">
          <img src="img/solicitudes/'; echo $row['img'].'"alt="" style="width: 470px;">
      </div>
    </div>
  </div>
  ';
  mysqli_close($link);
}

open();
?>
