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
            <form class="" action="index.html" method="post">
              <div class="card">
                <div class="card-body row">
                  <div class="col-lg-6 m-0">
                    <h4 class="card-title">Componentes Fisicos</h4>
                    <hr style="">
                    <div class="d-flex mb-3">
                      <div class="col-lg-4 my-auto">
                        <p class="text-right my-auto">Procesador</p>
                      </div>
                      <div class="col-lg-8">
                        <input type="text" name="" value="" style="width: 250px" class="form-control">
                      </div>
                    </div>
                    <!-- ///////////////////////////////////////////////////////// -->
                    <div class="d-flex mb-3">
                      <div class="col-lg-4 my-auto">
                        <p class="text-right my-auto">Capacidad de Disco</p>
                      </div>
                      <div class="col-lg-8">
                        <input type="text" name="" value="" style="width: 250px" class="form-control">
                      </div>
                    </div>
                    <!-- ///////////////////////////////////////////////////////// -->
                    <div class="d-flex mb-3">
                      <div class="col-lg-4 my-auto">
                        <p class="text-right my-auto">Memoria RAM</p>
                      </div>
                      <div class="col-lg-8">
                        <input type="text" name="" value="" style="width: 250px" class="form-control">
                      </div>
                    </div>
                    <!-- ///////////////////////////////////////////////////////// -->
                    <div class="d-flex mb-3">
                      <div class="col-lg-4 my-auto">
                        <p class="text-right my-auto">Marca y Modelo</p>
                      </div>
                      <div class="col-lg-8">
                        <input type="text" name="" value="" style="width: 250px" class="form-control">
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
                        <input type="text" name="" value="" style="width: 250px" class="form-control">
                      </div>
                    </div>
                    <!-- ///////////////////////////////////////////////////////// -->
                    <div class="d-flex mb-3">
                      <div class="col-lg-4 my-auto">
                        <p class="text-right my-auto">N° Serie</p>
                      </div>
                      <div class="col-lg-8">
                        <input type="text" name="" value="" style="width: 250px" class="form-control">
                      </div>
                    </div>
                    <!-- ///////////////////////////////////////////////////////// -->
                    <div class="d-flex mb-3">
                      <div class="col-lg-4 my-auto">
                        <p class="text-right my-auto">Nombre de Equipo</p>
                      </div>
                      <div class="col-lg-8">
                        <input type="text" name="" value="" style="width: 250px" class="form-control">
                      </div>
                    </div>
                    <!-- ///////////////////////////////////////////////////////// -->
                    <div class="d-flex mb-3">
                      <div class="col-lg-4 my-auto">
                        <p class="text-right my-auto">Usuario</p>
                      </div>
                      <div class="col-lg-8">
                        <input type="text" name="" value="" style="width: 250px" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
    /*
      $cpu = $_GET['cpu'];
      $serial = $_GET['serial'];
      $discoint = $_GET['disco'];
      $discogb = (($discoint/1000)/1000)/1000;
      $modelo = $_GET['modelo'];
      $ramint = $_GET['ram'];
      $ramgb = (($ramint/1000)/1000)/1000;
      $usuario = $_GET['usuario'];
      $nomequipo = $_GET['nomequipo'];
      $os = $_GET['os'];

      echo "
        Procesador: $cpu <br>
        Serie: $serial <br>
        Disco: $discogb <br>
        Modelo: $modelo <br>
        RAM: $ramgb <br>
        Usuario: $usuario <br>
        Nombre Equipo: $nomequipo <br>
        Sistema Operativo: $os
      ";
      */
    ?>
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
