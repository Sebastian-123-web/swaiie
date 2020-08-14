
function menu_hambug(){
  var h = document.getElementById("nav");
  var x = document.getElementById("menu");
  if (h.style.display === "none") {
    h.style.display = "block";
    x.src = "img/menu_x.png";
  } else {
    h.style.display = "none";
    x.src = "img/menu_hamburguesa.png";
  }
}

function navigation(bar){
  var xhr = new XMLHttpRequest();
  var h = document.getElementById("nav");var x = document.getElementById("divmenu");var c = document.getElementById("menu");
  xhr.open('GET','php/navegacion.php?bar='+bar,true);
  xhr.onreadystatechange = function(){
      if(xhr.readyState = 4 && xhr.status == 200){
          var contenido = document.getElementById('contenido');
          contenido.innerHTML = xhr.responseText;
          if(x.style.display === "none"){
            h.style.display = "block";
          }else if(h.style.display === "block"){
            h.style.display = "none";
            c.src = "img/menu_hamburguesa.png";
          }

      }
  }
  xhr.send();
}

function open_tkt(nt){
  var xhr = new XMLHttpRequest();
  xhr.open('GET','php/open_ticket.php?nt='+nt,true);
  xhr.onreadystatechange = function(){
      if(xhr.readyState = 4 && xhr.status == 200){
          var contenido = document.getElementById('contenido');
          contenido.innerHTML = xhr.responseText;
      }
  }
  xhr.send();
}

function search(){
  var state = document.getElementById('state').value;
  var priority = document.getElementById('priority').value;
  var buscar = document.getElementById('buscar').value;

  var xhr = new XMLHttpRequest();
  xhr.open('GET','php/generalfunctions.php?state='+state+'&priority='+priority+'&buscar='+buscar,true);
  xhr.onreadystatechange = function(){
      if(xhr.readyState = 4 && xhr.status == 200){
          var tickets = document.getElementById('tickets');
          tickets.innerHTML = xhr.responseText;
      }
  }
  xhr.send();
}

function state(nt){
  var category1 = document.getElementById('state').name;
  var valor1 = document.getElementById('state').value;

  var xhr = new XMLHttpRequest();
  xhr.open('GET','php/savecategory_comment.php?valor1='+category1+'&valor='+valor1+'&nt='+nt,true);
  xhr.onreadystatechange = function(){
      if(xhr.readyState = 4 && xhr.status == 200){
      }
  }
  xhr.send();
}

function priority(nt){
  var category2 = document.getElementById('priority').name;
  var valor2 = document.getElementById('priority').value;
  var xhr = new XMLHttpRequest();
  xhr.open('GET','php/savecategory_comment.php?valor1='+category2+'&valor='+valor2+'&nt='+nt,true);
  xhr.onreadystatechange = function(){
      if(xhr.readyState = 4 && xhr.status == 200){
      }
  }
  xhr.send();
}
