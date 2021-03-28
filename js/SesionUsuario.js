$(document).ready(function(){
  EstadoSesion();
});

  //ESTADO SESION
  function EstadoSesion(){
    $.ajax({
      url : 'metodos/SesionEstado.php',
      type : 'GET',
      success : function(response){
        if(response==2){
          if(window.location.pathname !== "/swaiie/admin.php" && window.location.pathname !== "/swaiie/equipo.php" && window.location.pathname !== "/swaiie/mostrarequipo.php"){
            window.location.href = "admin.php";
          }
        }else if(response==1){
          if(window.location.pathname !== "/swaiie/index.php"){
            console.log(window.location.pathname);
            window.location.href = "index.php";
          }
        }
      }
    });
  }


  //SESION CERRADA
  $('#cerrarSesion').click(function(){
    $.ajax({
      url : 'metodos/SesionCerrada.php',
      type : 'GET',
      success: function(response){
        console.log(response);
        if(window.location.pathname !== "/swaiie/index.php"){
          window.location.href = "index.php";
        }
      }
    });
  });

  //AUTENTIFICACION DE USUARIO
  $("#btnLogin").click(function(){
    var formDataLogin = new FormData(document.getElementById('formLogin'));
    $.ajax({
      url : "metodos/SesionAutentificacion.php",
      type : "POST",
      data : formDataLogin,
      processData : false,
      contentType : false,
      success : function(response){
        if(response==2){
          EstadoSesion();
        }else{
          $('#falloSesion').html('Usuario y/o Contraseña erronea');
        }
      }
    });
  });
