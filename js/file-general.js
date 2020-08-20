function home(){
  let homeView = document.getElementById('contenido');
  let pagHome = document.createElement('div');
  pagHome.innerHTML = `
    <div class="row"> <!-- LETREROS DE TICKET USUARIOS Y EQUIPOS -->
      <div class="text-light col-lg-4 p-3"> <!--  TICKET -->
        <div class="bg-danger p-3">
          <h3>TICKET</h3>
          <h1 class="text-right">45 <i class="fas fa-ticket-alt"></i></h1>
          <p>Area con mas insidencias <span class="font-weight-bold">Area</span> con <span class="font-weight-bold">25 <i class="fas fa-ticket-alt ml-1"></i></span></p>
        </div>
      </div>
      <div class="text-light col-lg-4 p-3"> <!--  USUARIO -->
        <div class="bg-success p-3">
          <h3>USUARIO</h3>
          <h1 class="text-right">84 <i class="fas fa-user"></i></h1>
          <p>Usuaio con mas insidencias <span class="font-weight-bold">User</span> con <span class="font-weight-bold">16 <i class="fas fa-user ml-1"></i></span></p>
        </div>
      </div>
      <div class="text-light col-lg-4 p-3"> <!--  EQUIPO -->
        <div class="bg-info p-3">
          <h3>EQUIPO</h3>
          <h1 class="text-right">105 <i class="fas fa-desktop"></i></h1>
          <p>Equipos con Problemas <span class="font-weight-bold">15 <i class="fas fa-desktop ml-1"></i></span> con <span class="font-weight-bold">8 Urgentes</span></p>
        </div>
      </div>
    </div>
    <div class="row"> <!-- GRAFICO Y NOTIFICACIONES -->
      <div class="col-lg-6 p-4"> <!-- GRAFICO -->
        <div class="">
          <canvas id="graf-vs-mes" width="400" height="300" class="p-3"></canvas>
        </div>
      </div>

      <div class="col-lg-6 p-5"> <!-- NOTIFICACIONES -->
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <p class="m-0"><i class="fas fa-bell"></i> Notificaciones</p>
            <span class="badge badge-secondary">14</span>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p>Rodrigo Bañagasta</p>
              <p>SIDIGE</p>
            </div>
            <div class="d-flex justify-content-between">
              <p>Rodrigo Bañagasta</p>
              <p>SIDIGE</p>
            </div>
            <div class="d-flex justify-content-between">
              <p>Rodrigo Bañagasta</p>
              <p>SIDIGE</p>
            </div>
            <div class="d-flex justify-content-between">
              <p>Rodrigo Bañagasta</p>
              <p>SIDIGE</p>
            </div>
            <div class="d-flex justify-content-between">
              <p>Rodrigo Bañagasta</p>
              <p>SIDIGE</p>
            </div>
            <div class="d-flex justify-content-between">
              <p>Rodrigo Bañagasta</p>
              <p>SIDIGE</p>
            </div>
            <div class="d-flex justify-content-between">
              <p>Rodrigo Bañagasta</p>
              <p>SIDIGE</p>
            </div>
            <div class="d-flex justify-content-between">
              <p>Rodrigo Bañagasta</p>
              <p>SIDIGE</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  `;
  homeView.appendChild(pagHome);
}

function ticket(){
  alert('Pagina Ticket');
}
