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
                <h1 class="h3">Inventario</h1>
                <div class="d-flex">
                  <div class="mr-2">
                    <div class="input-group">
                      <input type="search" class="form-control" placeholder="Busqueda" aria-label="" aria-describedby="basic-addon1">
                      <div class="input-group-append">
                        <button class="btn btn-dark btn-group-sm" type="button"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="btn-group pb-1" role="group" aria-label="Basic example">
                    <button type="button" class="btn bg-swaiie text-light"><i class="fas fa-plus"></i></button>
                    <button type="button" class="btn bg-swaiie text-light"><i class="fas fa-file-alt"></i></button>
                    <button type="button" class="btn bg-swaiie text-light"><i class="fas fa-trash"></i></button>
                  </div>
                </div>
              </div>
              <div class="overflow-auto" style="height: calc(100vh - 146px)">
                <table class="table" style="border: 1px solid #dee2e6">
                  <thead>
                    <tr>
                      <th><input type="checkbox" name="" value="" class="ml-1" id="selectall"></th>
                      <th>N° Serie</th>
                      <th>Nombre Equipo</th>
                      <th>Modelo</th>
                      <th>Sistema Operativo</th>
                      <th>Estado</th>
                      <th>Asignación</th>
                      <th> </th>
                    </tr>
                  </thead>
                  <tbody id="todosequipos">

                  </tbody>
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
