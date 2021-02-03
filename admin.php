<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Swaiiie - Home</title>
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
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <div class="d-flex justify-content-between p-2">
                <h1 class="h3">Inventario</h1>
                <div class="d-flex">
                  <input type="text" name="" value="" placeholder="Filtro" class="form-control">
                  <h3 class="mx-2"><i class="fas fa-search"></i></h3>
                  <h3 class="mx-2"><i class="fas fa-plus"></i></h3>
                  <h3 class="mx-2"><i class="fas fa-trash"></i></h3>
                </div>
              </div>
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th><input type="checkbox" name="" value=""></th>
                    <th>N° Serie</th>
                    <th>Nombre Equipo</th>
                    <th>Modelo</th>
                    <th>Sistema Operativo</th>
                    <th>Asignación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><input type="checkbox" name="" value=""></th>
                    <td>DS6GF5S4G</td>
                    <td>TBGRGAFSI002</td>
                    <td>HP COMPAQ 8200</td>
                    <td>Windows 7 Pro</td>
                    <td>rbanagasta</td>
                  </tr>
                  <tr>
                    <th><input type="checkbox" name="" value=""></th>
                    <td>DSGMHJ54MN56</td>
                    <td>TBGROMGMMD003</td>
                    <td>HP PROBOOK 4430S</td>
                    <td>Windows 7 Pro</td>
                    <td>orequejo</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-4 bg-dark">
              hola
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
  </body>
</html>
