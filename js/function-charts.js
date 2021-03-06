$(document).ready(function(){
  $.ajax({
    url :'php/charts.php',
    type : 'GET',
    success : function(response){
      let data = JSON.parse(response);
      console.log(data);
    }
  });
});
// GRAFICO HOME
var chartmonth = document.getElementById('graf-vs-mes').getContext('2d');
var charthome = new Chart(chartmonth, {
  type: 'bar',
  data: {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
    datasets:[{
      label: '# de incidencia',
      data: [15,48,23,78,30,45],
      backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
      borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      yAxes:[{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});
