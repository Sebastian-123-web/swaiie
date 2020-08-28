$(document).ready(function(){
  document.getElementById('i_t_u_e_g_n').style.display = '';
  document.getElementById('ticket-info-ticket').style.display = 'none';
  document.getElementById('equipo-info-equipo').style.display = 'none';
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
