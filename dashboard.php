<?php
require 'util/admin_conn.php';
?>

<head>
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="styles/dashboard-style.css">
</head>

<body>

    <?php include 'includes/header.php'; ?>
    <div class="upper-container">
        <div class="upper-text">
            <span>
                Pre-collection Status
            </span>
            <span id='date-time'></span>
        </div>
        <div class="lower-cards">
            <div class="card">
                <div class="value">
                    <div class="number">
                        <p>10</p>
                    </div>
                </div>
                <div class="trash-type"></div>
            </div>
            <div class="card">
                <div class="value"></div>
                <div class="trash-type"></div>
            </div>
            <div class="card">
                <div class="value"></div>
                <div class="trash-type"></div>
            </div>
            <div class="card">
                <div class="value"></div>
                <div class="trash-type"></div>
            </div>
            <div class="card">
                <div class="value"></div>
                <div class="trash-type"></div>
            </div>
        </div>

    </div>
    <div class="lower-container">
        <div class="card">

        </div>
        <div class="card">

        </div>
    </div>



</body>

<script>
    function myFunction() {
        document.getElementById("logoutform").submit();
    }
    var dt = new Date();
    document.getElementById('date-time').innerHTML = dt;
</script>

</html>