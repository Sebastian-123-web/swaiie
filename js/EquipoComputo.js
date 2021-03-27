$(document).ready(function(){
  if (window.location.pathname == '/swaiie/equipo.php') {
    MostrarEquipo();
    MostrarComponentesEnAgregar();
  }
  if(window.location.pathname == '/swaiie/mostrarequipo.php') {
    InsertarComponentescpu();
    InsertarComponentesmm();
    InsertarComponentestipo();
    InsertarComponentesos();
    InsertarComponentesantivirus();
    InsertarComponentesoftware();
    InsertarComponentesusuario();
  }

  // BUSCADOR - CREANDO EL JAVASCRIPT PARA BUSCAR COMPONENTE
  $('#SearchCom').keyup(function(){
    var search = $('#SearchCom').val();
    var searchcomponente = $('#SearchComponente').val();
    $.ajax({
      url : 'metodos/SearchComponente.php',
      type : 'POST',
      data : { search , searchcomponente },
      success : function(response){
        let datosbucados = JSON.parse(response);
        var insertar = '';
        datosbucados.forEach(datosbucados => {
          if (datosbucados.estado == 'Operativo') {
            var estado = 'badge-success';
          }else if (datosbucados.estado == 'Inoperativo') {
            var estado = 'badge-danger';
          }else if (datosbucados.estado == 'Mantenimiento') {
            var estado = 'badge-info';
          }else if (datosbucados.estado == 'En Proceso') {
            var estado = 'badge-warning';
          }
          insertar +=`
          <tr idequipo="${datosbucados.id_equipo}">
            <th><input type="checkbox" value="${datosbucados.id_equipo}" class="ml-1 case deletecheckbox"></th>
            <td>${datosbucados.id_equipo}</td>
            <td>${datosbucados.nom_equipo}</td>
            <td>${datosbucados.mm}</td>
            <td>${datosbucados.os}</td>
            <td><span class="badge badge-pill ${estado}" id="estado">${datosbucados.estado}</span></td>
            <td>${datosbucados.id_user}</td>
            <td><a href="#" class="btn btn-info btn-sm abrir-Equipo"><i class="fas fa-cogs"></i></a></td>
          </tr>
          `
        });
        $('#todosequipos').html(insertar);
      }
    })
  })
});

//  ELIMINAR EQUIPOS O EQUIPO
$('#EliminarEquipo').click(function(){
  var elementos = new Array();
  $("input:checkbox:checked").each(function(){
    elementos.push($(this).val());
  });
  $.ajax({
    url : 'metodos/EliminarEquipo.php',
    type : 'POST',
    data : { elementos },
    success : function(response){
      console.log(response);
      MostrarEquipo();
    }
  });
});


//  AGREGAR COMPONENTES
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
        }else if (equipos.estado == 'Mantenimiento') {
          var estado = 'badge-info';
        }else if (equipos.estado == 'En Proceso') {
          var estado = 'badge-warning';
        }
        insertar +=`
        <tr idequipo="${equipos.id_equipo}">
          <th><input type="checkbox" name="eliminar[]" value="${equipos.id_equipo}" class="ml-1 case"></th>
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
          $('#idequipo').html(unequipo.id_equipo);
          if(unequipo.estado == 'Operativo'){
            $('#estado').html(unequipo.estado).addClass('badge-success');
            estado +=`
            <option selected value="Operativo">Operativo</option>
            <option value="Inoperativo">Inoperativo</option>
            <option value="En Proceso">En Proceso</option>
            <option value="Mantenimiento">Mantenimiento</option>
            `
          }else if(unequipo.estado == 'Inoperativo'){
            $('#estado').html(unequipo.estado).addClass('badge-danger');
            estado +=`
            <option value="Operativo">Operativo</option>
            <option selected value="Inoperativo">Inoperativo</option>
            <option value="En Proceso">En Proceso</option>
            <option value="Mantenimiento">Mantenimiento</option>
            `
          }else if(unequipo.estado == 'Mantenimiento'){
            $('#estado').html(unequipo.estado).addClass('badge-info');
            estado +=`
            <option value="Operativo">Operativo</option>
            <option value="Inoperativo">Inoperativo</option>
            <option value="En Proceso">En Proceso</option>
            <option selected value="Mantenimiento">Mantenimiento</option>
            `
          }else if(unequipo.estado == 'En Proceso'){
            $('#estado').html(unequipo.estado).addClass('badge-warning');
            estado +=`
            <option value="Operativo">Operativo</option>
            <option value="Inoperativo">Inoperativo</option>
            <option selected value="En Proceso">En Proceso</option>
            <option value="Mantenimiento">Mantenimiento</option>
            `
          }
          $('#estadoselect').html(estado);

          $('#generacion').val(unequipo.generacion);
          $('#disco').val(unequipo.disco);
          if (unequipo.tipo_disco == 'HDD') {
            tipodisco +=`
              <option selected value="${cpu.id_cpu}">HDD</option>
              <option value="${cpu.id_cpu}">SSD</option>
            `
          }else {
            tipodisco +=`
              <option value="${cpu.id_cpu}">HDD</option>
              <option selected value="${cpu.id_cpu}">SSD</option>
            `
          }
          $('#tipodisco').html(tipodisco);
          $('#ram').val(unequipo.ram);
          $('#nomequipo').val(unequipo.nom_equipo);
          $('#mantenimiento').val(unequipo.mantenimiento);
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

function InsertarComponentestipo(){
  $.ajax({
    url : 'metodos/MostrarComponente.php',
    type : 'POST',
    data : { com : 'tipo' },
    success : function(responsee){
      let tipo = JSON.parse(responsee);
      var id_equipo = localStorage.getItem('id_equipo');
      $.ajax({
        url : 'metodos/MostrarUnEquipo.php',
        type : 'POST',
        data : { id_equipo },
        success : function(tipoe){
          let unequipo = JSON.parse(tipoe);
          var insertar = '';
          tipo.forEach(tipo => {
            if (tipo.tipo == unequipo.tipo) {
              insertar +=`
                <option selected value="${tipo.id_tipo}">${tipo.tipo}</option>
              `
            }else {
              insertar +=`
                <option value="${tipo.id_tipo}">${tipo.tipo}</option>
              `
            }
          });
          $('#tipo').html(insertar);
        }
      });
    }
  });
}

function InsertarComponentesos(){
  $.ajax({
    url : 'metodos/MostrarComponente.php',
    type : 'POST',
    data : { com : 'os' },
    success : function(responsee){
      let os = JSON.parse(responsee);
      var id_equipo = localStorage.getItem('id_equipo');
      $.ajax({
        url : 'metodos/MostrarUnEquipo.php',
        type : 'POST',
        data : { id_equipo },
        success : function(ose){
          let unequipo = JSON.parse(ose);
          var insertar = '';
          os.forEach(os => {
            if (os.os == unequipo.os) {
              insertar +=`
                <option selected value="${os.id_os}">${os.os}</option>
              `
            }else {
              insertar +=`
                <option value="${os.id_os}">${os.os}</option>
              `
            }
          });
          $('#os').html(insertar);
        }
      });
    }
  });
}

function InsertarComponentesantivirus(){
  $.ajax({
    url : 'metodos/MostrarComponente.php',
    type : 'POST',
    data : { com : 'antivirus' },
    success : function(responsee){
      let antivirus = JSON.parse(responsee);
      var id_equipo = localStorage.getItem('id_equipo');
      $.ajax({
        url : 'metodos/MostrarUnEquipo.php',
        type : 'POST',
        data : { id_equipo },
        success : function(antiviruse){
          let unequipo = JSON.parse(antiviruse);
          var insertar = '';
          antivirus.forEach(antivirus => {
            if (antivirus.antivirus == unequipo.antivirus) {
              insertar +=`
                <option selected value="${antivirus.id_antivirus}">${antivirus.antivirus}</option>
              `
            }else {
              insertar +=`
                <option value="${antivirus.id_antivirus}">${antivirus.antivirus}</option>
              `
            }
          });
          $('#antivirus').html(insertar);
        }
      });
    }
  });
}

function InsertarComponentesoftware(){
  $.ajax({
    url : 'metodos/MostrarComponente.php',
    type : 'POST',
    data : { com : 'software' },
    success : function(responsee){
      let software = JSON.parse(responsee);
      var id_equipo = localStorage.getItem('id_equipo');
      $.ajax({
        url : 'metodos/MostrarUnEquipo.php',
        type : 'POST',
        data : { id_equipo },
        success : function(softwaree){
          let unequipo = JSON.parse(softwaree);
          var insertar = '';
          software.forEach(software => {
            if (software.software == unequipo.software) {
              insertar +=`
                <option selected value="${software.id_software}">${software.software}</option>
              `
            }else {
              insertar +=`
                <option value="${software.id_software}">${software.software}</option>
              `
            }
          });
          $('#software').html(insertar);
        }
      });
    }
  });
}

function InsertarComponentesusuario(){
  $.ajax({
    url : 'metodos/MostrarComponente.php',
    type : 'POST',
    data : { com : 'usuario' },
    success : function(responsee){
      let usuario = JSON.parse(responsee);
      console.log(usuario);
      var id_equipo = localStorage.getItem('id_equipo');
      $.ajax({
        url : 'metodos/MostrarUnEquipo.php',
        type : 'POST',
        data : { id_equipo },
        success : function(usuarioe){
          let unequipo = JSON.parse(usuarioe);
          console.log(unequipo);
          var insertar = '';
          usuario.forEach(usuario => {
            if (usuario.id_user == unequipo.id_user) {
              insertar +=`
                <option selected value="${usuario.id_user}">${usuario.id_user}</option>
              `
            }else {
              insertar +=`
                <option value="${usuario.id_user}">${usuario.id_user}</option>
              `
            }
          });
          $('#usuario').html(insertar);
        }
      });
    }
  });
}

function MostrarComponentesEnAgregar(){
  let componentes = ["os","mm","cpu","tipo","antivirus","software","usuario"];
  componentes.forEach(com => {
    $.ajax({
      url : 'metodos/MostrarComponente.php',
      type : 'POST',
      data : { com },
      success : function(response){
        let componente = JSON.parse(response);
        console.log(componente);
        var insertaros = '';
        var insertarmm = '';
        var insertarcpu = '';
        var insertartipo = '';
        var insertarantivirus = '';
        var insertarsoftware = '';
        var insertarid_user = '';
        componente.forEach(item => {
          if (item.os !== undefined) {
            if (item.os == 'Ninguno') {
              insertaros +=`
                <option selected value="${item.id_os}">${item.os}</option>
              `}else {
                insertaros +=`
                  <option value="${item.id_os}">${item.os}</option>
                `}
          }else if(item.mm !== undefined){
            if (item.mm === 'Ninguno') {
              insertarmm +=`
                <option selected value="${item.id_mm}">${item.mm}</option>
              `}else{
                insertarmm +=`
                  <option value="${item.id_mm}">${item.mm}</option>
                `}
          }else if (item.cpu !== undefined) {
            if (item.cpu == 'Ninguno') {
              insertarcpu +=`
                <option selected value="${item.id_cpu}">${item.cpu}</option>
              `}else {
                insertarcpu +=`
                  <option value="${item.id_cpu}">${item.cpu}</option>
                `}
          }else if (item.tipo !== undefined) {
            if (item.tipo == 'Ninguno') {
              insertartipo +=`
                <option selected value="${item.id_tipo}">${item.tipo}</option>
              `}else {
                insertartipo +=`
                  <option value="${item.id_tipo}">${item.tipo}</option>
                `}
          }else if (item.antivirus !== undefined) {
            if (item.antivirus == 'Ninguno') {
              insertarantivirus +=`
                <option selected value="${item.id_antivirus}">${item.antivirus}</option>
              `}else {
                insertarantivirus +=`
                  <option value="${item.id_antivirus}">${item.antivirus}</option>
                `}
          }else if (item.software !== undefined) {
            if (item.software == 'Ninguno') {
              insertarsoftware +=`
                <option selected value="${item.id_software}">${item.software}</option>
              `}else {
                insertarsoftware +=`
                  <option value="${item.id_software}">${item.software}</option>
                `}
          }else if (item.id_user !== undefined) {
            if (item.id_user == 'Ninguno') {
              insertarid_user +=`
                <option selected value="${item.id_user}">${item.id_user}</option>
              `
            }else {
              insertarid_user +=`
                <option value="${item.id_user}">${item.id_user}</option>
              `}
          }
        });
        if (insertaros !== '') {
          $('#os').html(insertaros);
        }else if (insertarmm !== '') {
          $('#mm').html(insertarmm);
        }else if (insertarcpu !== '') {
          $('#cpu').html(insertarcpu);
        }else if (insertartipo !== '') {
          $('#tipo').html(insertartipo);
        }else if (insertarantivirus !== '') {
          $('#antivirus').html(insertarantivirus);
        }else if (insertarsoftware !== '') {
          $('#software').html(insertarsoftware);
        }else if (insertarid_user !== '') {
          $('#usuario').html(insertarid_user);
        }
      }
    })
  });
}


$('#agregarequipo').click(function(){
  var formDataAddEq = new FormData(document.getElementById('formAddEq'));
  $.ajax({
    url : 'metodos/AgregarEquipo.php',
    type : 'POST',
    data : formDataAddEq,
    processData : false,
    contentType : false,
    success : function(response){
      console.log(response);
      if (response == 'hecho') {
        alert('¡Bien hecho! Se agrego Correctamente');
        document.getElementById('formAddEq').reset();
        MostrarEquipo();
      }else {
        alert('¡Oh cielos! Faltan Datos');
      }
    }
  });
});
