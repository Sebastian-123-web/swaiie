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
                  <h3 class="mr-2"><i class="fas fa-barcode"></i></h3>
                  <h1 class="h3 m-0" id="idequipo"></h1>
                  <p class="my-auto ml-2" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal3"><i class="fas fa-edit"></i></p>
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
                      <button type="button" name="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal4"><i class="fas fa-trash"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <form id="formEditEq" name="formEditEq" method="POST" enctype="multipart/form-data">
                    <input type="text" name="id_equipo" value="" class="d-none" id="id_equipo">
                    <div class="row">
                      <div class="col-lg-6" style="border-right: 1px solid #dee2e6;">
                        <h3>Componente Logico</h3>
                        <hr>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-desktop"></i></span>
                          </div>
                          <input type="text" name="n_equipo" value="" placeholder="Nombre de Equipo" class="form-control" id="nomequipo">
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fab fa-windows"></i></span>
                          </div>
                          <select name="os" class="form-control" id="os">
                            <option value="Sistema Operativo">Sistema Operativo</option>
                          </select>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-shield-virus"></i></span>
                          </div>
                          <select name="antivirus" class="form-control" id="antivirus">
                            <option value="antivirus">antivirus</option>
                          </select>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fab fa-uncharted"></i></span>
                          </div>
                          <select name="software" class="form-control" id="software">
                            <option value="software">software</option>
                          </select>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-tools"></i></span>
                          </div>
                          <textarea name="mantenimiento" rows="3" cols="" class="form-control" placeholder="Describa problema del Equipo" id="mantenimiento"></textarea>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <select name="usuario" class="form-control" id="usuario">
                            <option value="usuario">usuario</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <h3>Componente Fisico</h3>
                        <hr>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-microchip"></i></span>
                          </div>
                          <select name="cpu" class="form-control" id="cpu">
                            <option value="Procesador">Procesador</option>
                          </select>
                          <input type="number" name="generacion" value="" placeholder="generacion" class="form-control" id="generacion">
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-hdd"></i></span>
                          </div>
                          <input type="text" name="disco" value="" placeholder="Capacidad de Disco" class="form-control" id="disco">
                          <select name="t_disco" class="form-control" id="tipodisco">
                            <option value="Sin Disco">Sin Disco</option>
                            <option value="HDD">HDD</option>
                            <option value="SSD">SSD</option>
                          </select>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-registered"></i></span>
                          </div>
                          <select name="mm" class="form-control" id="mm">
                            <option value="Marca y Modelo">Marca y Modelo</option>
                          </select>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-memory"></i></span>
                          </div>
                          <input type="text" name="ram" value="" placeholder="Memoria RAM" class="form-control" id="ram">
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                          </div>
                          <select name="tipo" class="form-control" id="tipo">
                            <option value="tipo">Tipo</option>
                          </select>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-file-medical-alt"></i></span>
                          </div>
                          <select name="estado" class="form-control" id="estadoselect">
                            <option id="op1" value="Operativo">Operativo</option>
                            <option id="op2" value="Inoperativo">Inoperativo</option>
                            <option id="op3" value="En Proceso">En Proceso</option>
                            <option id="op4" value="Mantenimiento">Mantenimiento</option>
                          </select>
                        </div>
                        <div class="d-flex justify-content-end">
                          <button type="button" name="button" class="btn btn-info" id="cambiarequipo"><i class="fas fa-exchange-alt"></i> Cambiar</button>
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

<!-- MODAL PARA EDITAR EL NUMERO DE SERIE -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModal3Label">Esta Seguro que quiere cambiar el N° Serie?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="text" name="id_equipo_edit" value="" class="form-control" id="id_equipo_nuevo" placeholder="Nuevo N° Serie">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancelar</button>
            <button type="button" class="btn btn-primary" id="guardar_nuevo_id"><i class="fas fa-save"></i> Si, Guardar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModal4Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModal4Label"><i class="fas fa-trash"></i> Eliminar Equipo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Esta Seguro que desea Eliminar el Equipo?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">No, Cancelar</button>
            <button type="button" class="btn btn-success" id="EliminarUnEquipo">Si, Eliminar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal MANTENIMIENTO PREVENTIVO/CORRECTIVO -->
    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModal5Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModal5Label"><i class="fas fa-tools"></i> FICHA DE MANTENIMIENTO PREVENTIVO / CORRECTIVO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card">
              <div class="card-body">
                <b>Tipo de Mantenimiento</b>
                <select name="tipomantenimiento" class="form-control my-3">
                  <option value="Preventivo" selected>Preventivo</option>
                  <option value="Correctivo">Correctivo</option>
                </select>
                <div class="">
                  <b>Responsable</b>
                  <input type="text" name="responsable" id="responsable" class="form-control mt-3" value="" placeholder="Nombre del Responsable">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="mantenimientoPreCor">Descargar</button>
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
