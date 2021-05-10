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



<h1>Score reconnaissance de tonailité</h1>
<div class="container">
  <canvas id="myChart"></canvas>
  <div class="score_container"><h2>3/5</h2></div>
  
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
<?php include "footer.php"; ?>
</body>
</html>

