<?php
  $componente = $_POST['searchcomponente'];
  $abuscar = $_POST['search'];
  include '../clases/ComponentesComputo.php';
  $cc = new ComponentesComputo();
  $cc->BuscarComponente($componente, $abuscar);
?>
