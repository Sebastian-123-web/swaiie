$(document).ready(function(){
  if (window.location.pathname == '/swaiie/equipo.php') {
    MostrarEquipo();
  }
  if(window.location.pathname == '/swaiie/mostrarequipo.php') {
    InsertarComponentescpu();
    InsertarComponentesmm()
  }
});

$('#btnCom').click(function(){
  var formDataCom = new FormData(document.getElementById('formAddCom'));
  $.ajax({
    url: 'metodos/agregarcomponentes.php',
    type : 'POST',
    data : formDataCom,
    processData : false,
    contentType : false,
    success : function(data){
      alert(data);
    }
  });
  document.getElementById('formAddCom').reset();
});

function MostrarEquipo(){
  $.ajax({
    url : 'metodos/MostrarEquipo.php',
    type : 'GET',
    success : function(response){
      let equipos = JSON.parse(response);
      var insertar = '';
      equipos.forEach(equipos => {
        if (equipos.estado == 'Operativo') {
          var estado = 'badge-success';
        }else if (equipos.estado == 'Inoperativo') {
          var estado = 'badge-danger';
        }else if (equipos.estado == 'Mantenimineto') {
          var estado = 'badge-info';
        }else if (equipos.estado == 'En Proceso') {
          var estado = 'badge-warning';
        }
        insertar +=`
        <tr idequipo="${equipos.id_equipo}">
          <th><input type="checkbox" name="" value="" class="ml-1 case"></th>
          <td>${equipos.id_equipo}</td>
          <td>${equipos.nom_equipo}</td>
          <td>${equipos.mm}</td>
          <td>${equipos.os}</td>
          <td><span class="badge badge-pill ${estado}" id="estado">${equipos.estado}</span></td>
          <td>${equipos.id_user}</td>
          <td><a href="#" class="btn btn-info btn-sm abrir-Equipo"><i class="fas fa-cogs"></i></a></td>
        </tr>
        `
      });
      $('#todosequipos').html(insertar);
    }
  });
}
$(document).on('click', '.abrir-Equipo', function(){
  var elemento = $(this)[0].parentElement.parentElement;
  var id_equipo = $(elemento).attr('idequipo');
  location.href = 'mostrarequipo.php';
  localStorage.setItem('id_equipo', id_equipo);
});

function InsertarComponentescpu(){
  $.ajax({
    url : 'metodos/MostrarComponente.php',
    type : 'POST',
    data : { com : 'cpu' },
    success : function(response){
      let cpu = JSON.parse(response);
      var id_equipo = localStorage.getItem('id_equipo');
      $.ajax({
        url : 'metodos/MostrarUnEquipo.php',
        type : 'POST',
        data : { id_equipo },
        success : function(responce){
          let unequipo = JSON.parse(responce);
          console.log(unequipo);
          $('#idequipo').html(unequipo.id_equipo);
          if(unequipo.estado == 'Operativo'){
            $('#estado').html(unequipo.estado).addClass('badge-success');
          }else if(unequipo.estado == 'Inoperativo'){
            $('#estado').html(unequipo.estado).addClass('badge-danger');
          }else if(unequipo.estado == 'Mantenimiento'){
            $('#estado').html(unequipo.estado).addClass('badge-info');
          }else if(unequipo.estado == 'En Proceso'){
            $('#estado').html(unequipo.estado).addClass('badge-warning');
          }
          $('#generacion').val(unequipo.generacion);
          $('#disco').val(unequipo.disco);
          $('#tipodisco').val(unequipo.tipo_disco);
          var insertar = '';
          cpu.forEach(cpu => {
            if (cpu.cpu == unequipo.cpu) {
              insertar +=`
                <option selected value="${cpu.id_cpu}">${cpu.cpu}</option>
              `
            }else {
              insertar +=`
                <option value="${cpu.id_cpu}">${cpu.cpu}</option>
              `
            }
          });
          $('#cpu').html(insertar);
        }
      });
    }
  });
}

function InsertarComponentesmm(){
  $.ajax({
    url : 'metodos/MostrarComponente.php',
    type : 'POST',
    data : { com : 'mm' },
    success : function(response){
      let mm = JSON.parse(response);
      var id_equipo = localStorage.getItem('id_equipo');
      $.ajax({
        url : 'metodos/MostrarUnEquipo.php',
        type : 'POST',
        data : { id_equipo },
        success : function(m_m){
          let unequipo = JSON.parse(m_m);
          console.log(unequipo);
          var insertar = '';
          mm.forEach(mm => {
            if (mm.mm == unequipo.mm) {
              insertar +=`
                <option selected value="${mm.id_mm}">${mm.mm}</option>
              `
            }else {
              insertar +=`
                <option value="${mm.id_mm}">${mm.mm}</option>
              `
            }
          });
          $('#mm').html(insertar);
        }
      });
    }
  });
}
