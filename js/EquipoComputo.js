$(document).ready(function(){
  if (window.location.pathname == '/swaiie/equipo.php') {
    MostrarEquipo();
    
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
        insertar +=`
        <tr idequipo="${equipos.id_equipo}">
          <th><input type="checkbox" name="" value="" class="ml-1 case"></th>
          <td>${equipos.id_equipo}</td>
          <td>${equipos.nom_equipo}</td>
          <td>${equipos.mm}</td>
          <td>${equipos.os}</td>
          <td><span class="badge badge-pill badge-success">${equipos.estado}</span></td>
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
