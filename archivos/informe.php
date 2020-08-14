<?php
require_once('../mpdf/vendor/autoload.php');
$mpdf = new \Mpdf\Mpdf();
$mpdf->writeHtml('.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:3px 7px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:3px 7px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-vask{font-size:13px;text-align:left;vertical-align:top}
.tg .tg-cly1{text-align:left;vertical-align:middle}
.tg .tg-u6sy{background-color:#010066;color:#ffffff;border-color:#000000;text-align:left;vertical-align:middle}
.tg .tg-0lax{text-align:left;vertical-align:top}',\Mpdf\HTMLParserMode::HEADER_CSS);

$mpdf->SetHeader('<img src="../img/header.png" alt="" style="width: 100%;">');
$mpdf->WriteHTML('<body>
<br>
<br>
<h4 style="text-align: center">Informe Tecnico</h4>
<table class="tg" style="undefined;table-layout: fixed; width: 427px">
<colgroup>
<col style="width: 171px">
<col style="width: 256px">
</colgroup>
  <tr>
    <th class="tg-vask">Usuario</th>
    <th class="tg-vask">Rodrigo Sebastian Bañagasta Flores</th>
  </tr>
  <tr>
    <td class="tg-vask">Nombre Equipo</td>
    <td class="tg-vask">TBGRGAFSI002</td>
  </tr>
  <tr>
    <td class="tg-vask">Sede/Ubicación/área</td>
    <td class="tg-vask">Grimanesa / - / Sistemas</td>
  </tr>
  <tr>
    <td class="tg-vask">Fecha</td>
    <td class="tg-vask">25 / 10 / 2019</td>
  </tr>
</table>

<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<br>

<table class="tg" style="undefined;table-layout: fixed; width: 573px">
<colgroup>
<col style="width: 193px">
<col style="width: 380px">
</colgroup>
  <tr>
    <th class="tg-u6sy" colspan="2">Datos de equipo</th>
  </tr>
  <tr>
    <td class="tg-cly1">Marca</td>
    <td class="tg-cly1"></td>
  </tr>
  <tr>
    <td class="tg-cly1">Modelo</td>
    <td class="tg-cly1"></td>
  </tr>
  <tr>
    <td class="tg-cly1">Tipo</td>
    <td class="tg-cly1"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Procesador</td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Memoria</td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Disco Duro</td>
    <td class="tg-0lax"></td>
  </tr>
</table>

<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<br>

<table class="tg" style="undefined;table-layout: fixed; width: 573px">
<colgroup>
<col style="width: 573px">
</colgroup>
  <tr>
    <th class="tg-u6sy">Problema que presenta el Equipo</th>
  </tr>
  <tr>
    <td class="tg-0lax" style="height: 80px;">1.	No se conecta a la red corporativa, sin acceso a internet, el software de red no reconoce el adaptador de red integrado de la mainboard.</td>
  </tr>
</table>

<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<br>

<table class="tg" style="undefined;table-layout: fixed; width: 573px">
<colgroup>
<col style="width: 573px">
</colgroup>
  <tr>
    <th class="tg-u6sy">Revisión Técnica</th>
  </tr>
  <tr>
    <td class="tg-0lax" style="height: 80px;">1.	No se conecta a la red corporativa, sin acceso a internet, el software de red no reconoce el adaptador de red integrado de la mainboard.</td>
  </tr>
</table>

<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<br>

<table class="tg" style="undefined;table-layout: fixed; width: 573px">
<colgroup>
<col style="width: 573px">
</colgroup>
  <tr>
    <th class="tg-u6sy">Estado Final</th>
  </tr>
  <tr>
    <td class="tg-0lax" style="height: 80px;">1.	No se conecta a la red corporativa, sin acceso a internet, el software de red no reconoce el adaptador de red integrado de la mainboard.</td>
  </tr>
</table>

<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<br>

<table class="tg" style="undefined;table-layout: fixed; width: 573px">
<colgroup>
<col style="width: 573px">
</colgroup>
  <tr>
    <th class="tg-u6sy">Observaciones / Recomendaciones</th>
  </tr>
  <tr>
    <td class="tg-0lax" style="height: 80px;">1.	No se conecta a la red corporativa, sin acceso a internet, el software de red no reconoce el adaptador de red integrado de la mainboard.</td>
  </tr>
</table>

</body>',\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->WriteHTML('<center><img src="../img/footer.png" alt=""></center>');

$mpdf->Output();
?>