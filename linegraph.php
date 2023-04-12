<?php
//somewhere set a value
$num = 100;
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js">
    </script>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="chart-container" style="max-width: 50vw;
  margin: 0 auto;">
        <canvas id="myChart"></canvas>
    </div>

    <script>
        const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Plastic Pet',
                data: [<?php echo $num?>, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            },
            {
                label: 'Plastic Solid',
                data: [2, 4, 6, 8, 10, 12, 14, 15, 16, 18, 20, 22],
                fill: false,
                borderColor: 'rgb(255, 192, 192)',
                tension: 0.1
            },
            {
                label: 'Cans',
                data: [5, 6, 10, 7, 9, 11, 20, 15, 17, 25, 21, 30],
                fill: false,
                borderColor: 'rgb(75, 255, 192)',
                tension: 0.1
            },
            {
                label: 'Carton',
                data: [13, 33, 20, 28, 32, 11, 13, 13, 11, 30, 34, 23],
                fill: false,
                borderColor: 'rgb(75, 192, 255)',
                tension: 0.1
            }]
        };
        const config = {
            type: 'line',
            data: data,
        };
        var myChart = new Chart(document.getElementById('myChart'), config)
    </script>
</body>

</html>