<?php
require 'util/admin_conn.php';
?>

<head>
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="styles/dashboard-style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0/dist/chartjs-plugin-datalabels.min.js"></script>

</head>

<body>

    <?php include 'includes/header.php'; ?>
    <div class="upper-container">
        <div class="upper-text">
            <span>
                Pre-collection Status
            </span>
            <span id='date-time'>
                <p>Latest MRF Status: </p>
                <p class="dateDetect" type="text"></p>
            </span>
        </div>
        <div class="lower-cards">
            <div class="card">
                <div class="value">
                    <div class="number">

                        <p class="status" type="text"></p>
                    </div>
                </div>
                <div class="trash-type">
                    <span class="trash-types">Plastic Pet</span>
                </div>
            </div>
            <div class="card">
                <div class="value">
                    <div class="number">
                        <p class="status1" type="text"></p>
                    </div>
                </div>
                <div class="trash-type">
                    <p class="trash-types">Plastic Solid</p>
                </div>
            </div>
            <div class="card">
                <div class="value">
                    <div class="number">

                        <p class="status2" type="text"></p>
                    </div>
                </div>
                <div class="trash-type">
                    <span class="trash-types">Cans</span>
                </div>
            </div>
            <div class="card">
                <div class="value">
                    <div class="number">

                        <p class="status3" type="text"></p>
                    </div>
                </div>
                <div class="trash-type"><span class="trash-types">Carton</span></div>
            </div>


        </div>

    </div>
    <div class="lower-container">
        <div class="card">
        <canvas id="lineChart"></canvas>
        </div>
        <div class="card">
        <canvas id="pieChart"></canvas>
        </div>
    </div>

    <script src="scripts/status.js" type="module">
        function myFunction() {
            document.getElementById("logoutform").submit();
        }
        // var dt = new Date();
        // document.getElementById('date-time').innerHTML = dt;
    </script>
<script src="scripts/chart.js"></script>



</body>



</html>