<?php
  require_once('../mpdf/vendor/autoload.php');
  include_once('../php/conexion.php');
  $ticket=$_GET['nticket'];
  $modelo=$_GET['modelo'];
  $serie=$_GET['serie'];
  $tipo=$_GET['tipo'];
  $os=$_GET['os'];
  $ram=$_GET['ram'];
  $cpu=$_GET['cpu'];
  $responsable=$_GET['responsable'];
  $responsable = ucwords($responsable);//PONE LA PRIMERA LETRA EN MAYUSCULA DE CADA PALABRA EN UN STRING (PHP)
  $consulta = "SELECT * FROM `soli-tk` WHERE `num-tk`=".$ticket;
  $resultado = mysqli_query($link, $consulta);
  $array = mysqli_fetch_array($resultado);
  $dia = date("j");
  $mes = date("n");
  $año = date("Y");
  if($mes==1){$mes = 'Enero';}elseif($mes==2){$mes = 'Febrero';}elseif($mes==3){$mes = 'Marzo';}elseif($mes==4){$mes = 'Abril';}elseif($mes==5){$mes = 'Mayo';}elseif($mes==6){$mes = 'Junio';}elseif($mes==7){$mes = 'Julio';}elseif($mes==8){$mes = 'Agosto';}elseif($mes==9){$mes = 'Septiembre';}elseif($mes==10){$mes = 'Octubre';}elseif($mes==11){$mes = 'Noviembre';}else{$mes = 'Diciembre';}

  $mpdf = new \Mpdf\Mpdf();

  $mpdf->writeHtml('.tg  {border-collapse:collapse;border-spacing:0;}
  .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
  .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
  .tg .tg-cly1{text-align:left;vertical-align:middle}',\Mpdf\HTMLParserMode::HEADER_CSS);

  $mpdf->WriteHTML('<body>
  <table class="tg" style="undefined;table-layout: fixed; width: 636px; margin: auto;">
  <colgroup>
  <col style="width: 117px">
  <col style="width: 351px">
  <col style="width: 168px">
  </colgroup>
    <tr>
      <th class="tg-baqh" rowspan="2"><img src="../img/logo_transber.png" alt=""><br><br></th>
      <th class="tg-rg0h" rowspan="2"><br><br><span style="font-weight:bold;color:rgb(1, 0, 102)">FICHA DE MANTENIMIENTO PREVENTIVO / </span><br><span style="font-weight:bold;color:rgb(1, 0, 102)">CORRECTIVO</span></th>
      <th class="tg-baqh"><span style="font-weight:bold">Versión: </span>02</th>
    </tr>
    <tr>
      <td class="tg-baqh"><span style="font-weight:bold">Código: </span>TR-R-SI-01-02</td>
    </tr>
  </table>

  <br>
  <h4 align="center" style="font-weight:bold;color:rgb(1, 0, 102);font-family:Arial, sans-serif;font-size:17px;font-weight:normal;"><b>Nombre de Usuario:<u> '.$array[1].' '.$array[2].' </u> IP:<u>	DHCP </u></b></h4>
  <br>
  <h4 style="margin: 0 0 0 50px;font-weight:bold;color:rgb(1, 0, 102);font-family:Arial, sans-serif;font-size:14px;font-weight:normal;"><b>Información de la Maquina:</b></h4>
      <table class="tg" style="undefined;table-layout: fixed; width: 586px; margin: auto;">
      <colgroup>
      <col style="width: 86px">
      <col style="width: 168px">
      <col style="width: 189px">
      <col style="width: 143px">
      </colgroup>
        <tr>
          <th class="tg-cly1" colspan="2"><span style="font-weight:bold;text-decoration:underline">Nombre del Equipo:</span><br>'.$array[14].'</th>
          <th class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Marca / Modelo:</span><br>'.$modelo.'</th>
          <th class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Numero de Serie:</span><br>'.$serie.'</th>
        </tr>
        <tr>
          <td class="tg-cly1" colspan="2"><span style="font-weight:bold;text-decoration:underline">Tipo de Equipo: </span><br>'.$tipo.'</td>
          <td class="tg-cly1" colspan="2"><span style="font-weight:bold;text-decoration:underline">Sistema Operativo: </span><br>'.$os.'</td>
        </tr>
        <tr>
          <td class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Memoria:</span><br>'.$ram.'GB</td>
          <td class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">CPU: </span><br>'.$cpu.'</td>
          <td class="tg-cly1" colspan="2"><span style="font-weight:bold;text-decoration:underline">Tipo de Mantenimiento </span><br>☐ Preventivo ☐ Correctivo</td>
        </tr>
      </table>
      <br>
      <h4 style="margin: 0 0 0 50px;font-weight:bold;color:rgb(1, 0, 102);font-family:Arial, sans-serif;font-size:14px;font-weight:normal;"><b>Configuración de Almacenamiento:</b></h4>
          <table class="tg" style="undefined;table-layout: fixed; width: 586px; margin: auto;">
          <colgroup>
          <col style="width: 195px">
          <col style="width: 195px">
          <col style="width: 195px">
          </colgroup>
            <tr>
              <th class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Volumen 1:</span><br>-</th>
              <th class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Discos:</span><br>-</th>
              <th class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Raid:</span><br>-</th>
            </tr>
            <tr>
              <td class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Volumen 2: </span><br>-</td>
              <td class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Discos:</span><br>-</td>
              <td class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Raid:</span><br>-</td>
            </tr>
          </table>

          <br>
          <h4 style="margin: 0 0 0 50px;font-weight:bold;color:rgb(1, 0, 102);font-family:Arial, sans-serif;font-size:14px;font-weight:normal;"><b>Red de Datos:</b></h4>
              <table class="tg" style="undefined;table-layout: fixed; width: 586px; margin: auto;">
              <colgroup>
              <col style="width: 293px">
              <col style="width: 293px">
              </colgroup>
                <tr>
                  <th class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">IP 1: </span><br>-</th>
                  <th class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Mascara de red 1: </span><br>-</th>
                </tr>
                <tr>
                  <td class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Gateway 1: </span><br>-</td>
                  <td class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">DNS 1: </span><br>-</td>
                </tr>
              </table>
              <br><br>
              <h4 style="margin: 0 0 0 50px;font-weight:bold;color:rgb(1, 0, 102);font-family:Arial, sans-serif;font-size:14px;font-weight:normal;"><b>Detalles Adicionales:</b></h4>
                  <table class="tg" style="undefined;table-layout: fixed; width: 586px; margin: auto;">
                  <colgroup>
                  <col style="width: 585px">
                  </colgroup>
                    <tr>
                      <th class="tg-cly1" style="height: 180px;">'.$array[15].'</th>
                    </tr>
                  </table>


                  <br><br>
                      <table class="tg" style="undefined;table-layout: fixed; width: 586px; margin: auto;">
                      <colgroup>
                      <col style="width: 292px">
                      <col style="width: 292px">
                      </colgroup>
                        <tr>
                          <th class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Completado por: </span><br>'.$responsable.'</th>
                          <th class="tg-cly1"><span style="font-weight:bold;text-decoration:underline">Fecha: </span><br>'.$dia.' de '.$mes.' del '.$año.'</th>
                        </tr>
                      </table>
</body>',\Mpdf\HTMLParserMode::HTML_BODY);
  $mpdf->Output();
?>
