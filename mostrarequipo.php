<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Swaiiie - Home</title>
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
              <li class="nav-item mx-4"><a href="admin.php" class="nav-link text-light"><i class="fas fa-home" style="width: 25px;"></i>Home</a></li>
              <li class="nav-item mx-4"><a href="equipo.php" class="nav-link text-light"><i class="fas fa-desktop" style="width: 25px;"></i>Inventario</a></li>
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
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-9 pl-5 pr-0 py-3">
              <div class="d-flex justify-content-between py-2">
                <div class="d-flex">
                  <h1 class="h3 m-0" id="idequipo"></h1>
                  <p class="my-auto ml-2" style="cursor: pointer;"><i class="fas fa-edit"></i></p>
                  <div class="my-auto ml-3">
                    <span class="badge badge-pill" id="estado">Activo</span>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="m-auto">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" name="button" class="btn btn-info"><i class="fas fa-file-alt"></i></button>
                      <button type="button" name="button" class="btn btn-dark"><i class="fas fa-tools"></i></button>
                      <button type="button" name="button" class="btn btn-primary"><i class="fas fa-file-invoice"></i></button>
                      <button type="button" name="button" class="btn btn-secondary"><i class="fas fa-trash"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <form id="formCamEq" name="formCamEq" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-lg-6" style="border-right: 1px solid #dee2e6;">
                        <h3>Componente Logico</h3>
                        <hr>
                        <div class="d-flex mb-3">
                          <div class="col-lg-4 my-auto">
                            <p class="text-right my-auto">Nombre Equipo</p>
                          </div>
                          <div class="col-lg-8">
                            <input type="text" name="nomequipo" value="" style="width: 250px" class="form-control" id="nomequipo">
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="col-lg-4 my-auto">
                            <p class="text-right my-auto">Sistema Operativo</p>
                          </div>
                          <div class="col-lg-8 d-flex">
                            <select name="os" class="form-control" style="width: 250px" id="os">

                            </select>
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="col-lg-4 my-auto">
                            <p class="text-right my-auto">Antivirus</p>
                          </div>
                          <div class="col-lg-8 d-flex">
                            <select name="antivirus" class="form-control" style="width: 250px" id="antivirus">

                            </select>
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="col-lg-4 my-auto">
                            <p class="text-right my-auto">Software</p>
                          </div>
                          <div class="col-lg-8 d-flex">
                            <select name="software" class="form-control" style="width: 250px" id="software">

                            </select>
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="col-lg-4 my-auto">
                            <p class="text-right my-auto">Mantenimiento</p>
                          </div>
                          <div class="col-lg-8">
                            <textarea name="mantenimiento" rows="3" cols="" class="form-control" style="width: 250px;" id="mantenimiento"></textarea>
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="col-lg-4 my-auto">
                            <p class="text-right my-auto">Usuario</p>
                          </div>
                          <div class="col-lg-8 d-flex">
                            <select name="usuario" class="form-control" style="width: 250px" id="usuario">

                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <h3>Componente Fisico</h3>
                        <hr>
                        <div class="d-flex mb-3">
                          <div class="col-lg-4 my-auto">
                            <p class="text-right my-auto">Procesador</p>
                          </div>
                          <div class="col-lg-8 d-flex">
                            <select name="procesador" class="form-control mr-3" style="width: 190px" id="cpu">

                            </select>
                            <input type="text" name="generacion" value="" style="width: 45px" class="form-control" id="generacion">
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="col-lg-4 my-auto">
                            <p class="text-right my-auto">Disco</p>
                          </div>
                          <div class="col-lg-8 d-flex">
                            <input type="text" name="disco" value="" class="form-control mr-3" style="width: 170px" id="disco">
                            <input type="text" name="tipodisco" value="" style="width: 66px" class="form-control" id="tipodisco">
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="col-lg-4 my-auto">
                            <p class="text-right my-auto">Marca/Modelo</p>
                          </div>
                          <div class="col-lg-8 d-flex">
                            <select name="mm" class="form-control" style="width: 250px" id="mm">

                            </select>
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="col-lg-4 my-auto">
                            <p class="text-right my-auto">Memoria RAM</p>
                          </div>
                          <div class="col-lg-8">
                            <input type="number" name="ram" value="" style="width: 250px" class="form-control" id="ram">
                          </div>
                        </div>
                        <div class="d-flex mb-3">
                          <div class="col-lg-4 my-auto">
                            <p class="text-right my-auto">Tipo de Equipo</p>
                          </div>
                          <div class="col-lg-8 d-flex">
                            <select name="tipo" class="form-control" style="width: 250px" id="tipo">

                            </select>
                          </div>
                        </div>
                        <div class="d-flex justify-content-end">
                          <button type="button" name="button" class="btn btn-info mr-5 mt-5 mb-3" id="cambiarequipo"><i class="fas fa-exchange-alt"></i> Cambiar</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-3 py-3">
              <h1 class="h3 p-1 mb-3">Agregar componente</h1>
              <div class="card">
                <div class="card-body">
                  <form id="formAddCom" name="formAddCom" method="POST" enctype="multipart/form-data">
                    <p class="mb-2">Seleccion el tipo de Componente</p>
                    <select name="selectcomponente" class="form-control mb-3">
                      <option selected>Tipo de Componente</option>
                      <option value="marca_modelo">Marca y Modelo</option>
                      <option value="os">Sistema Operativo</option>
                      <option value="cpu">Procesador</option>
                      <option value="tipo">Tipo de Equipo</option>
                      <option value="antivirus">Antivirus</option>
                      <option value="software">Software</option>
                    </select>
                    <p class="mb-2">Digite el componente</p>
                    <div class="input-group mb-3">
                      <input type="text" name="addcomponente" class="form-control" placeholder="Componente" aria-label="" aria-describedby="basic-addon1">
                      <div class="input-group-append">
                        <button class="btn btn-info btn-group-sm" type="button" id="btnCom"><i class="fas fa-plus"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
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
    <script src="js/SesionUsuario.js" charset="utf-8"></script>
    <script src="js/EquipoComputo.js" charset="utf-8"></script>
    <script type="text/javascript">
    $("#selectall").on("click", function() {
      $(".case").prop("checked", this.checked);
    });
    </script>
  </body>
</html>
