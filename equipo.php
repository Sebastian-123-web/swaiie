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
                <h1 class="h3"><i class="fas fa-desktop"></i> Inventario</h1>
                <div class="d-flex">
                  <div class="mr-2">
                    <form id="formSearch" name="formSearch" method="POST" enctype="multipart/form-data">
                      <div class="input-group">
                        <select name="SearchComponente" id="SearchComponente" class="form-control">
                          <option selected value="id_equipo">N° serie</option>
                          <option value="nom_equipo">Nombre Equipo</option>
                          <option value="mm">Marca y Modelo</option>
                          <option value="os">Sistema Operativo</option>
                          <option value="cpu">Procesador</option>
                          <option value="tipo">Tipo de Equipo</option>
                          <option value="antivirus">Antivirus</option>
                          <option value="software">Software</option>
                          <option value="estado">Estado</option>
                          <option value="id_user">Usuario</option>
                        </select>
                        <input type="search" id="SearchCom" name="SearchCom" class="form-control" placeholder="Busqueda" aria-label="" aria-describedby="basic-addon1">
                        <div class="input-group-append btn-group pb-1" role="group" aria-label="Basic example">
                          <button type="button" class="btn bg-swaiie text-light" data-toggle="modal" data-target="#exampleModalCentered"><i class="fas fa-plus"></i></button>
                          <button type="button" class="btn bg-swaiie text-light"><a href="archivos/ExportarExcel.php" class="text-light"><i class="fas fa-file-excel"></i></a></button>
                          <button type="button" class="btn bg-swaiie text-light" id="EliminarEquipo"><i class="fas fa-trash"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="overflow-auto" style="height: calc(100vh - 146px)">
                <table class="table" style="border: 1px solid #dee2e6">
                  <thead class="thead-light">
                    <tr>
                      <th><input type="checkbox" value="n" class="ml-1" id="selectall"></th>
                      <th>N° Serie</th>
                      <th>Nombre Equipo</th>
                      <th>Modelo</th>
                      <th>Sistema Operativo</th>
                      <th>Estado</th>
                      <th>Asignación</th>
                      <th> </th>
                    </tr>
                  </thead>
                  <form id="formEquipo" name="formEquipo" method="POST" enctype="multipart/form-data">
                    <tbody id="todosequipos">

                    </tbody>
                  </form>
                </table>
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

    <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenteredLabel"><i class="fas fa-plus"></i> Agregar Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <form class="row" id="formAddEq" name="formAddEq" method="POST" enctype="multipart/form-data">
              <div class="col-lg-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                  </div>
                  <input type="text" name="n_serie" value="" placeholder="Numero de Serie" class="form-control" id="idequipo" required>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-desktop"></i></span>
                  </div>
                  <input type="text" name="n_equipo" value="" placeholder="Nombre de Equipo" class="form-control" id="nomequipo" required>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-memory"></i></span>
                  </div>
                  <input type="text" name="ram" value="" placeholder="Memoria RAM" class="form-control" id="ram" required>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-hdd"></i></span>
                  </div>
                  <input type="text" name="disco" value="" placeholder="Disco" class="form-control" id="disco" required>
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
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fab fa-windows"></i></span>
                  </div>
                  <select name="os" class="form-control" id="os">
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-microchip"></i></span>
                  </div>
                  <select name="cpu" class="form-control" id="cpu">
                  </select>
                  <input type="number" name="generacion" value="" placeholder="generacion" class="form-control" id="generacion" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                  </div>
                  <select name="tipo" class="form-control" id="tipo">
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-shield-virus"></i></span>
                  </div>
                  <select name="antivirus" class="form-control" id="antivirus">
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fab fa-uncharted"></i></span>
                  </div>
                  <select name="software" class="form-control" id="software">
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-file-medical-alt"></i></span>
                  </div>
                  <select name="estado" class="form-control" id="estados">
                    <option value="Operativo">Operativo</option>
                    <option value="Inoperativo">Inoperativo</option>
                    <option value="En Proceso">En Proceso</option>
                    <option value="Mantenimiento">Mantenimiento</option>
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-tools"></i></span>
                  </div>
                  <textarea name="mantenimiento" rows="3" cols="" class="form-control" placeholder="Describa problema del Equipo" id="mantenimiento" required></textarea>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <select name="usuario" class="form-control" id="usuario">
                  </select>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
        <button type="button" class="btn btn-primary" id="agregarequipo"><i class="fas fa-save"></i> Guardar</button>
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
