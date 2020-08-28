$(document).ready(function(){
  document.getElementById('i_t_u_e_g_n').style.display = '';
  document.getElementById('ticket-info-ticket').style.display = 'none';
  document.getElementById('equipo-info-equipo').style.display = 'none';
  tableros();
});

$("#home").click(function(){
  document.getElementById('i_t_u_e_g_n').style.display = '';
  document.getElementById('ticket-info-ticket').style.display = 'none';
  document.getElementById('equipo-info-equipo').style.display = 'none';
});
$("#ticket").click(function(){
  document.getElementById('i_t_u_e_g_n').style.display = 'none';
  document.getElementById('ticket-info-ticket').style.display = '';
  document.getElementById('equipo-info-equipo').style.display = 'none';
});
$("#equipo").click(function(){
  document.getElementById('i_t_u_e_g_n').style.display = 'none';
  document.getElementById('ticket-info-ticket').style.display = 'none';
  document.getElementById('equipo-info-equipo').style.display = '';
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
