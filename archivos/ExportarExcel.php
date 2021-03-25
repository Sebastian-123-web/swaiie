<?php
require '../excel/vendor/autoload.php';
include '../clases/EquipoComputo.php';
include '../clases/conexion.php';
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
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$documento = new Spreadsheet();
$documento
    ->getProperties()
    ->setCreator("Aquí va el creador, como cadena")
    ->setLastModifiedBy('Parzibyte') // última vez modificado por
    ->setTitle('Mi primer documento creado con PhpSpreadSheet')
    ->setSubject('El asunto')
    ->setDescription('Este documento fue generado para parzibyte.me')
    ->setKeywords('etiquetas o palabras clave separadas por espacios')
    ->setCategory('La categoría');

$nombreDelDocumento = "Mi primer archivo.xlsx";

$hoja = $documento->getActiveSheet();
$hoja->setTitle("Inventario");
$hoja->getStyle('B2')->getFill()->getStartColor()->setARGB('dc3545');
$hoja->setCellValue("A2", "USUARIO");
$hoja->setCellValue("B2", "NOMBRE EQUIPO");
$hoja->setCellValue("C2", "SERIE");
$hoja->setCellValue("D2", "MODELO");
$hoja->setCellValue("E2", "TIPO");
$hoja->setCellValue("F2", "OS");
$hoja->setCellValue("G2", "CPU");
$hoja->setCellValue("H2", "MEMORIA RAM");
$hoja->setCellValue("I2", "DISCO");
$hoja->setCellValue("J2", "ANTIVIRUS");
$hoja->setCellValue("K2", "SOFTWARE");
$hoja->setCellValue("L2", "MANTENIMIENTO");
$i=3;
foreach ($result as $key => $value) {
  $hoja->setCellValue("A$i", $value['id_user']);
  $hoja->setCellValue("B$i", $value['nom_equipo']);
  $hoja->setCellValue("C$i", $value['id_equipo']);
  $hoja->setCellValue("D$i", $value['mm']);
  $hoja->setCellValue("E$i", $value['tipo']);
  $hoja->setCellValue("F$i", $value['os']);
  $hoja->setCellValue("G$i", $value['cpu']);
  $hoja->setCellValue("H$i", $value['ram']);
  $hoja->setCellValue("I$i", $value['disco'].' '.$value['tipo_disco']);
  $hoja->setCellValue("J$i", $value['antivirus']);
  $hoja->setCellValue("K$i", $value['software']);
  $hoja->setCellValue("L$i", $value['mantenimiento']);
  $i++;
}
$hoja->setAutoFilter('A2:L6');
/**
 * Los siguientes encabezados son necesarios para que
 * el navegador entienda que no le estamos mandando
 * simple HTML
 * Por cierto: no hagas ningún echo ni cosas de esas; es decir, no imprimas nada
 */

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $nombreDelDocumento . '"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($documento, 'Xlsx');
$writer->save('php://output');
exit;
?>
