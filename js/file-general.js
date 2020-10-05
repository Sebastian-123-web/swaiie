$(document).ready(function(){
  estadoSesion();
})

$("#cerrarSesion").click(function(){
  $.ajax({
    url : "php/sesion.php",
    type: "POST",
    data : { cerrar : "cerrar" },
    success : function(){
      window.location.href = "index.php";
    }
  })
});

function tableros(){
  $.ajax({
    url: 'php/tableros.php',
    type: 'GET',
    success: function(response){
      let tableros = JSON.parse(response);
      $('#n_ticket').html(tableros[0][0]);
      $('#n_usuario').html(tableros[1][0]);
      $('#n_equipo').html(tableros[2][0]);
    }
  });
}

function estadoSesion(){
  $.ajax({
    url : "php/sesion.php",
    type: "GET",
    success: function(response){
      if(response==1){
        if (window.location.pathname !== "/swaiie/index-admin.php"){
          window.location.href = "index-admin.php";
        }
      }else if(response==0){
        if (window.location.pathname !== "/swaiie/index.php") {
          window.location.href = "index.php";
        }
      }
    }
  })
}

$("#btnLogin").click(function(){
  var formDataLogin = new FormData(document.getElementById('formLogin'));
  $.ajax({
    url : "php/sesion.php",
    type : "POST",
    data : formDataLogin,
    processData : false,
    contentType : false,
    success : function(response){
      if(response=="admin" || response=="user"){
        window.location.href = "index-admin.php";
      }else{
        var falloSesion = document.getElementById('falloSesion');
        falloSesion.innerHTML = response;
      }
    }
  });
  document.getElementById('formLogin').reset();
})
