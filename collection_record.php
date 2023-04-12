<?php
include "db/database.php";

if (isset($_POST["submit"])) {
    $date = $_POST['date'];
    $plastic_pet = $_POST['plastic_pet'];
    $plastic_solid = $_POST['plastic_solid'];
    $carton = $_POST['carton'];
    $cans = $_POST['cans'];
    $others = $_POST['others'];
    $remarks = $_POST['remarks'];

    $sql = "INSERT INTO `collection` (`date`,`plastic_pet`,`plastic_solid`,`carton`,`others`,`cans`,`remarks`) 
            VALUES ('$date','$plastic_pet','$plastic_solid','$carton','$others','$cans','$remarks')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "New record created successfully";
        header("location: collection_log.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Collection Record</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="styles/collection-record-style.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <form action="" method="POST" autocomplete="off">
        <div class="wrapper">
            <div class="title">
                Collection Record
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Date (dd/mm/yyyy)</label>
                    <input type="date" class="input" name="date" id="myDate" value="2000-01-01">
                </div>
                <div class="inputfield">
                    <label>Plastic Pet</label>
                    <input type="number" class="input" name="plastic_pet" required>
                </div>
                <div class="inputfield">
                    <label>Plastic Solid</label>
                    <input type="number" class="input" name="plastic_solid" required>
                </div>
                <div class="inputfield">
                    <label>Carton</label>
                    <input type="number" class="input" name="carton" required>
                </div>
                <div class="inputfield">
                    <label>Cans</label>
                    <input type="number" class="input" name="cans" required>
                </div>
                <div class="inputfield">
                    <label>Others</label>
                    <input type="number" class="input" name="others" required>
                </div>
                <div class="inputfield">
                    <label>Remarks</label>
                    <textarea class="textarea" name="remarks"></textarea>
                </div>
                <div class="inputfield">
                    <input type="submit" value="Submit" class="btn" name="submit">

                </div>
            </div>
        </div>
        <!-- Date: <br>
                <input type="date" name="date" required><br>
                Plastic Pet: <br>
                <input type="number" name="plastic_pet" minlength="1" maxlength="4" required><br>
                Plastic Solid: <br>
                <input type="number" name="plastic_solid" minlength="1" maxlength="4" required><br>
                Carton: <br>
                <input type="number" name="carton" minlength="1" maxlength="4" required><br>
                Cans: <br>
                <input type="number" name="cans" minlength="1" maxlength="4" required><br>
                Others: <br>
                <input type="number" name="others" minlength="1" maxlength="4" required><br>
                Remarks: <br>
                <textarea type="text" name="remarks" maxlength="250" rows="5" cols="20"></textarea><br>
                <br><br>
                <input type="submit" name="submit" value="Submit" class> -->

    </form>

</body>

</html>