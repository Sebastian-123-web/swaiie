<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Swaiie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/swaiie-estilos.css">
  </head>
  <body>
    <div class="d-flex">
      <nav class="bg-black navbar align-items-start" style="height: 100vh;">
        <div class="">
          <ul class="navbar-nav flex-column">
            <li class="nav-item mx-4 my-2"><img src="img/logo-swaiie-3.png" alt="" style="width: 100px"></li>
            <li class="nav-item mx-4"><a href="#" class="nav-link text-light"><i class="fas fa-home" style="width: 25px;"></i>Home</a></li>
            <li class="nav-item mx-4"><a href="#" class="nav-link text-light"><i class="fas fa-ticket-alt" style="width: 25px;"></i>Ticket</a></li>
            <li class="nav-item mx-4"><a href="equipo.php" class="nav-link text-light"><i class="fas fa-desktop" style="width: 25px;"></i>Equipo</a></li>
            <li class="nav-item mx-4"><a href="#" class="nav-link text-light"><i class="fas fa-chart-bar" style="width: 25px;"></i>Estadisticas</a></li>
            <li class="nav-item mx-4"><a href="#" class="nav-link text-light"><i class="fas fa-cogs" style="width: 25px;"></i>Configuración</a></li>
            <li class="nav-item mx-4"><a href="#" class="nav-link text-light"><i class="fas fa-info" style="width: 25px; height: 16px;"></i>About</a></li>
          </ul>
        </div>
      </nav>
      <div class="d-flex flex-column" style="width: calc(100% - 204px);">
        <nav class="bg-black navbar d-flex justify-content-end">
          <ul class="navbar-nav menu">
            <li class="nav-item"><a href="#" class="nav-link text-light">
              <?php
                session_start();
                if(isset($_SESSION["usuario"]["id_user"])){
                  echo $_SESSION["usuario"]["id_user"];
                }else{
                  echo "No hay sesion";
                }
              ?>
              <i class="fas fa-user-tie"></i></a>
              <ul class="navbar-nav submenu">
                <li class="nav-item"><a href="#" class="nav-link text-light px-2">Editar</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light px-2">Perfil</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light px-2" id="cerrarSesion">Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="">
          <div class="col-lg-8">
            <h1 class="h3">Inventario</h1>
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>N° serie</th>
                  <th>Nombre Equipo</th>
                  <th>Modelo</th>
                  <th>Sistema Operativo</th>
                  <th>Usuario</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                </tr>
              </tbody>
            </table>
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
