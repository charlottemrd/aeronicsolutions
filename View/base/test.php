<!DOCTYPE html>
<html>
<head>
    <title>myChart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
    <link rel="stylesheet" href="..\assets\test.css">

    <meta charset="utf-8" />

</head>
<body>

<?php include "header.php"; ?>

<div class="container">
    <div class="text_container">
    <h1>Bonjour Gabriel ! </h1>
    <H2>Bon retour parmis nous, voici les résultats de tes tests</H2>
    </div>
    <div class="test_container">
        <div class="ligne1_container">
            <div class="petit_test_container test1">
                <div class="text_test_container">
                    <h3>test 1</h3>
                </div>
            </div>
            <div class="petit_test_container test2">
                <div class="text_test_container">
                    <h3>test 2</h3>
                </div>
            </div>
            <div class="petit_test_container test3">
                <div class="text_test_container">
                    <h3>test 3</h3>
                </div>
            </div>
        </div>
        <div class="ligne2_container">
            <div class="grand_test_container"></div>
            <div class="reconnaissanceTonalité_container">
                <div class="text_test_container">
                    <h3>Reconnaissance de tonalité</h3>
                </div>
                <div class="doug_canva_container">
                    <canvas id="myChart"></canvas>
                <h1>3/5</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

<script>
new Chart(document.getElementById("myChart"), {
    type: 'doughnut',
    data: {
      
      datasets: [
        {
          backgroundColor: ["#54a0ff","#D8D8D8"],
          data: [3,2],
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
<?php include "footer2.php"; ?>
</body>
</html>