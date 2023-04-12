<?php
require 'util/admin_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="styles/mrf.css">
    <title>MRF</title>
</head>

<body>

    <?php include 'includes/header.php'; ?>



    <div class="container">
        <div class="row">
            <div class="column">
                <div class="type">Plastic Pet</div>
                <img id="mrf">
                <div class="statusdiv">
                    <p class="status1" type="text"></p>
                </div>
                <div class="date-time">
                    <p class="dateDetect" type="text"></p>
                </div>
            </div>
            <div class="column">
                <div class="type">Plastic Solid</div>
                <img id="mrf1">
                <div class="statusdiv">
                    <p class="status2" type="text"></p>
                </div>
                <div class="date-time">
                    <p class="dateDetect" type="text"></p>
                </div>
            </div>
            <div class="column">
                <div class="type">Cans</div>
                <img id="mrf2">
                <div class="statusdiv">
                    <p class="status3" type="text"></p>
                </div>
                <div class="date-time">
                    <p class="dateDetect" type="text"></p>
                </div>
            </div>
            <div class="column">
                <div class="type">Carton</div>
                <img id="mrf3">
                <div class="statusdiv">
                    <p class="status4" type="text"></p>
                </div>
                <div class="date-time">
                    <p class="dateDetect" type="text"></p>
                </div>
            </div>
        </div>
    </div>



</body>

<script type="module" src="scripts/mrf.js">
    function myFunction() {
        document.getElementById("logoutform").submit();
    }
</script>
<script type="module" src="scripts/mrfstatus.js">

</script>

</html>
</body>

</html>l