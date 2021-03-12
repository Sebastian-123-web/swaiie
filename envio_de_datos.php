<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Recopilacion de Datos - Swaiie</title>
    <link rel="shortcut icon" href="img/icono.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/swaiie-estilos.css">
  </head>
  <body>
    <?php
      // $cpu = $_GET['cpu'];
      // $serial = $_GET['serial'];
      // $discoint = $_GET['disco'];
      // $discogb = (($discoint/1000)/1000)/1000;
      // $modelo = $_GET['modelo'];
      // $ramint = $_GET['ram'];
      // $ramgb = (($ramint/1000)/1000)/1000;
      // $usuario = $_GET['usuario'];
      // $nomequipo = $_GET['nomequipo'];
      // $os = $_GET['os'];
      $cpu = "Intel(R) Core(TM) i3-2130 CPU @ 3.40GHz";
      $serial = "MXL2150ZPZ";
      $discogb = 499.86770944;
      $modelo = "HP Compaq 8200 Elite SFF PC";
      $ramgb = 6.325051392;
      $usuario = 'TRANSBERPERU\rbanagasta';
      $nomequipo = "TBGRGAFSI002";
      $os = "Microsoft Windows 7 Professional |C:\Windows|\Device\Harddisk0\Partition3";

      //DAR FORMA AL PROCESADOR
      $bmarca = strpos($cpu, 'Intel');
      if ($bmarca === false) {
        echo  "no se encontro";
      }else{
        $br = str_replace('(R)', '', $cpu);
        $btm = str_replace('(TM)', '', $br);
        $procesador = substr($btm, -33, 13);
        include 'clases/conexion.php';
        $sql = "SELECT `id_cpu` FROM `cpu` WHERE `cpu`='$procesador'";
        $query = mysqli_query($link, $sql);
        $array = mysqli_fetch_array($query);
        $bgeneracion = substr($btm, -18, 1);
      }
      // DAR FORMA AL DISCO DURO
      $disk = round($discogb);
      if ($disk <= 160) {
        $disk = 160;
      }elseif ($disk >160 && $disk <= 250) {
        $disk = 250;
      }elseif ($disk >250 && $disk <= 320) {
        $disk = 320;
      }elseif ($disk >320 && $disk <= 500) {
        $disk = 500;
      }elseif ($disk >500 && $disk <= 750) {
        $disk = 750;
      }elseif ($disk >750 && $disk <= 1000) {
        $disk = 1000;
      }elseif ($disk >1000 && $disk <= 1500) {
        $disk = 1500;
      }elseif ($disk >1500 && $disk <= 2000) {
        $disk = 2000;
      }elseif ($disk >2000 && $disk <= 2500) {
        $disk = 2500;
      }elseif ($disk >2500 && $disk <= 3000) {
        $disk = 3000;
      }

      // DAR FORMA A LA MEMORIA RAM
      $ramgb = round($ramgb);

      // DAR FORMA AL SISTEMA OPERATIVO
      $obr = substr($os, -41);
      $bre = str_replace($obr, '', $os);
      $osf = str_replace('Microsoft ', '', $bre);
      $sqlos = "SELECT `id_os` FROM `os` WHERE `os`='$osf'";
      $queryos = mysqli_query($link, $sqlos);
      $arrayos = mysqli_fetch_array($queryos);

      //DAR FORMA AL USUARIO
      $ubi = strpos($usuario, '\\');
      $tt = strlen($usuario);
      $bslash = $tt - ($ubi + 1);
      $usuariot = substr($usuario, -$bslash);
      $sqlu = "SELECT `id_user` FROM `usuario` WHERE `id_user`='rbanagasta'";
      $queryu = mysqli_query($link, $sqlu);
      $arrayu = mysqli_fetch_array($queryu);
    ?>
    <div class="d-flex" style="height: 100vh;">
      <div class="bg-black" style="width: 173px;">
        <div class="py-3 px-4">
          <img src="img/logo-swaiie-3.png" alt="" style="width: 100px">
        </div>
        <div>
          <nav>
            <ul class="navbar-nav flex-column">
              <li class="nav-item mx-4"><a href="#" class="nav-link text-light"><i class="fas fa-home" style="width: 25px;"></i>Home</a></li>
              <li class="nav-item mx-4"><a href="#" class="nav-link text-light"><i class="fas fa-desktop" style="width: 25px;"></i>Inventario</a></li>
              <li class="nav-item mx-4"><a href="#" class="nav-link text-light"><i class="fas fa-ticket-alt" style="width: 25px;"></i>Ticket</a></li>
              <li class="nav-item mx-4"><a href="#" class="nav-link text-light"><i class="fas fa-chart-bar" style="width: 25px;"></i>Estadisticas</a></li>
              <li class="nav-item mx-4"><a href="#" class="nav-link text-light"><i class="fas fa-cogs" style="width: 25px;"></i>Configuración</a></li>
              <li class="nav-item mx-4"><a href="#" class="nav-link text-light"><i class="fas fa-info" style="width: 25px; height: 16px;"></i>About</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="" style="width: calc(100% - 173px)">
        <div class="bg-black p-3 d-flex justify-content-end">
          <p class="m-0 px-3 text-light">Usuario</p>
        </div>
        <div class="">
          <div class="col-lg-12 pl-5 pr-5 py-3">
            <div class="py-2">
              <h1 class="h3">Recopilacion de Datos del Equipo</h1>
            </div>
            <form id="formAdde" name="formAdde" method="POST" enctype="multipart/form-data">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6 m-0">
                      <h4 class="card-title">Componentes Fisicos</h4>
                      <hr style="">
                      <div class="d-flex mb-3">
                        <div class="col-lg-4 my-auto">
                          <p class="text-right my-auto">Procesador</p>
                        </div>
                        <div class="col-lg-8 d-flex">
                          <?php
                            if (!isset($array[0])) {
                              echo '
                                <input type="text" name="procesador" value="" style="width: 250px" class="form-control">
                              ';
                            }else{
                              echo '
                              <select disabled name="procesador" class="form-control mr-3" style="width: 190px">
                                <option value="'.$array[0].'">'.$procesador.'</option>
                              </select>
                              <input type="text" name="generacion" value="'.$bgeneracion.'" style="width: 45px" class="form-control">
                              ';
                            }
                          ?>
                        </div>
                      </div>
                      <!-- ///////////////////////////////////////////////////////// -->
                      <div class="d-flex mb-3">
                        <div class="col-lg-4 my-auto">
                          <p class="text-right my-auto">Capacidad de Disco</p>
                        </div>
                        <div class="col-lg-8">
                          <input type="number" name="disco" value="<?php echo $disk; ?>" style="width: 250px" class="form-control">
                        </div>
                      </div>
                      <!-- ///////////////////////////////////////////////////////// -->
                      <div class="d-flex mb-3">
                        <div class="col-lg-4 my-auto">
                          <p class="text-right my-auto">Memoria RAM</p>
                        </div>
                        <div class="col-lg-8">
                          <input type="number" name="ram" value="<?php echo $ramgb; ?>" style="width: 250px" class="form-control">
                        </div>
                      </div>
                      <!-- ///////////////////////////////////////////////////////// -->
                      <div class="d-flex mb-3">
                        <div class="col-lg-4 my-auto">
                          <p class="text-right my-auto">Marca y Modelo</p>
                        </div>
                        <div class="col-lg-8">
                          <div class="input-group" style="width: 250px">
                            <input type="text" name="modelo" class="form-control" value="<?php echo $modelo; ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <h4 class="card-title">Componentes Logicos</h4>
                      <hr style="">
                      <div class="d-flex mb-3">
                        <div class="col-lg-4 my-auto">
                          <p class="text-right my-auto">Sistema Operativo</p>
                        </div>
                        <div class="col-lg-8">
                          <?php
                            if (!isset($arrayos[0])) {
                              echo '
                                <input type="text" name="procesador" value="" style="width: 250px" class="form-control">
                              ';
                            }else{
                              echo '
                              <select disabled name="procesador" class="form-control" style="width: 250px">
                                <option value="'.$array[0].'">'.$osf.'</option>
                              </select>
                              ';
                            }
                          ?>
                        </div>
                      </div>
                      <!-- ///////////////////////////////////////////////////////// -->
                      <div class="d-flex mb-3">
                        <div class="col-lg-4 my-auto">
                          <p class="text-right my-auto">N° Serie</p>
                        </div>
                        <div class="col-lg-8">
                          <input type="text" name="serie" value="<?php echo $serial; ?>" style="width: 250px" class="form-control">
                        </div>
                      </div>
                      <!-- ///////////////////////////////////////////////////////// -->
                      <div class="d-flex mb-3">
                        <div class="col-lg-4 my-auto">
                          <p class="text-right my-auto">Nombre de Equipo</p>
                        </div>
                        <div class="col-lg-8">
                          <input type="text" name="nombree" value="<?php echo $nomequipo; ?>" style="width: 250px" class="form-control">
                        </div>
                      </div>
                      <!-- ///////////////////////////////////////////////////////// -->
                      <div class="d-flex mb-3">
                        <div class="col-lg-4 my-auto">
                          <p class="text-right my-auto">Usuario</p>
                        </div>
                        <div class="col-lg-8">
                          <?php
                            if (!isset($arrayu[0])) {
                              echo '
                                <input type="text" name="usuario" value="" style="width: 250px" class="form-control">
                              ';
                            }else{
                              echo '
                              <select disabled name="usuario" class="form-control" style="width: 250px">
                                <option value="'.$arrayu[0].'">'.$arrayu[0].'</option>
                              </select>
                              ';
                            }
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end">
                    <input type="submit" name="" value="Agregar" class="btn btn-info mr-5">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/e20f78cd09.js" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- SWAIIE -->

    <script type="text/javascript">
    $("#selectall").on("click", function() {
      $(".case").prop("checked", this.checked);
    });


    </script>
  </body>
</html>
