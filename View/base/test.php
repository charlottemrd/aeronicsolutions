<!DOCTYPE html>
<html>
<head>
    <title>myChart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
    <link rel="stylesheet" href="../View/assets/test.css">

    <meta charset="utf-8" />

</head>
<body>


<div class="container">
    <div class="text_container">
    <h1>Bonjour ! </h1>
    <H2>Bon retour parmi nous, voici les résultats de tes tests</H2>
    </div>
    <div class="test_container">
        <div class="ligne1_container">
            <div class="petit_test_container test1">
                <div class="text_test_container">
                    <h3>Température corporelle</h3>
                </div>
                <div class="doug_canva_container n1">
                    <canvas id="myChart1"></canvas>
                <h1>36.5°</h1>
                </div>
            </div>
            <div class="petit_test_container test2">
                <div class="text_test_container">
                    <h3>Réflexe</h3>
                </div>
                <div class="doug_canva_container n2">
                    <canvas id="myChart2"></canvas>
                <h1>2/5</h1>
                </div>
            </div>
            <div class="petit_test_container test3">
                <div class="text_test_container">
                    <h3>Reconnaissance de tonalité</h3>
                </div>
                <div class="doug_canva_container n3">
                    <canvas id="myChart3"></canvas>
                <h1>3/5</h1>
                </div>
            </div>
        </div>
        <div class="ligne2_container">
            <div class="grand_test_container">
              <div class="text_test_container">
                  <h3>Fréquence cardiaque</h3>
              </div>
              <div class="line_chart_container">  
                <canvas id="line-chart"></canvas>
              </div>  
              </div>
            
        </div>
    </div>
    <div class="autre_block"></div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

<script>
new Chart(document.getElementById("myChart1"), {
    type: 'doughnut',
    data: {
      datasets: [
        {
          backgroundColor: ["#54a0ff","#F2F5F9"],
          data: [36.5,50-36.5],
          // hoverBackgroundColor:["#4B93E5","#D8D8D8"],
          // hoverBorderColor:["WHITE","#D8D8D8"]
        }
      ]
    },
    options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
    display: false,
    },
    animation: {
      easing: "easeInOutBack"
    },
    scales: {
        xAxes: [{
            gridLines: {
                display:false,
                drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
          }
        }],
        yAxes: [{
            gridLines: {
                display:false,
                drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
          }
        }]
    }
  }
});

</script>


<script>
new Chart(document.getElementById("myChart2"), {
    type: 'doughnut',
    data: {
      datasets: [
        {
          backgroundColor: ["#54a0ff","#F2F5F9"],
          data: [2, 5-2],
          // hoverBackgroundColor:["#4B93E5","#D8D8D8"],
          // hoverBorderColor:["WHITE","#D8D8D8"]
        }
      ]
    },
    options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
    display: false,
    },
    animation: {
      easing: "easeInOutBack"
    },
    scales: {
        xAxes: [{
            gridLines: {
                display:false,
                drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
          }
        }],
        yAxes: [{
            gridLines: {
                display:false,
                drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
          }
        }]
    }
  }
});

</script>
<script>
new Chart(document.getElementById("myChart3"), {
    type: 'doughnut',
    data: {
      datasets: [
        {
          backgroundColor: ["#54a0ff","#F2F5F9"],
          data: [3,5-3],
          // hoverBackgroundColor:["#4B93E5","#D8D8D8"],
          // hoverBorderColor:["WHITE","#D8D8D8"]
        }
      ]
    },
    options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
    display: false,
    },
    animation: {
      easing: "easeInOutBack"
    },
    scales: {
        xAxes: [{
            gridLines: {
                display:false,
                drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
          }
        }],
        yAxes: [{
            gridLines: {
                display:false,
                drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
          }
        }]
    }
  }
});

</script>

<script>

new Chart(document.getElementById("line-chart"), {
	type: 'line',
	options: {},
	data: {
	labels: ["January", 
"February", "March", "April", "May", "June", 
"July"],
	datasets: [{
	backgroundColor:'rgba(84,160,255,0.16)',
	borderColor: 
'#54a0ff',
	data: [0, 1, 5, 
	2, 20, 30, 45],
		}]
	}
});
</script>
 



</body>
</html>