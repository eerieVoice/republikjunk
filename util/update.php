<?php
include "../db/database.php";

if (isset($_POST['update'])) {
    $user_id = $_POST['id'];
    $date = $_POST['date'];
    $plastic_pet = $_POST['plastic_pet'];
    $plastic_solid = $_POST['plastic_solid'];
    $carton = $_POST['carton'];
    $cans = $_POST['cans'];
    $others = $_POST['others'];
    $remarks = $_POST['remarks'];

    $sql = "UPDATE collection SET date = '$date', plastic_pet = '$plastic_pet', plastic_solid = '$plastic_solid' , carton = '$carton' , cans = '$cans' , others = '$others' ,remarks = '$remarks' WHERE id = $user_id ";
    //$sql = sprintf("UPDATE users SET firstname = '$firstname', lastname = '$lastname',email = '$email',password='$password',gender='$gender' WHERE id =$user_id ");

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record Updated Successfully";
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    header("location: ../collection_log.php");
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM collection WHERE id = $user_id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $date = $row['date'];
            $plastic_pet = $row['plastic_pet'];
            $plastic_solid = $row['plastic_solid'];
            $carton = $row['carton'];
            $cans = $row['cans'];
            $others = $row['others'];
            $remarks = $row['remarks'];
            $id = $row['id'];
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
            <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
            <link rel="stylesheet" href="../styles/collection-record-style.css">
            <link rel="stylesheet" href="../styles/style.css">
        </head>

        <body>
            <header>
                <img class="logo" src="../img/logo straight white.svg" alt="logo">
                <nav>
                    <ul class="nav__links">
                        <li><a class="dashboard" href="../dashboard.php">Dashboard</a></li>
                        <li><a class="mrf" href="../mrf.php">MRF</a></li>
                        <li><a class="mrf" href="../collection_record.php">Collection Record</a></li>
                        <li><a class="mrf" href="../collection_log.php">Collection Log</a></li>
                    </ul>
                </nav>
                <button>
                    <form id="logoutform" action="../util/logout.php" method="POST">
                        <a id="logout-link" onclick="myFunction()" class="cta">
                            <div>

                                <span class="text_logout"> Logout</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                </svg>
                            </div>
                        </a>
                    </form>
                </button>
            </header>

            <form action="" method="POST">
                <div class="wrapper">
                    <div class="title">
                        Update Collection Record
                    </div>
                    <div class="form">
                        <div class="inputfield">
                            <label>Date</label>
                            <input type="date" class="input" name="date" value="<?php echo $date; ?>" id="theDate">
                            <input type="hidden" name="id" value="<?php echo $user_id; ?>">
                        </div>
                        <div class="inputfield">
                            <label>Plastic Pet</label>
                            <input type="number" class="input" name="plastic_pet" value="<?php echo $plastic_pet; ?>" required>
                        </div>
                        <div class="inputfield">
                            <label>Plastic Solid</label>
                            <input type="number" class="input" name="plastic_solid" value="<?php echo $plastic_solid; ?>" required>
                        </div>
                        <div class="inputfield">
                            <label>Carton</label>
                            <input type="number" class="input" name="carton" value="<?php echo $carton; ?>" required>
                        </div>
                        <div class="inputfield">
                            <label>Cans</label>
                            <input type="number" class="input" name="cans" value="<?php echo $cans; ?>" required>
                        </div>
                        <div class="inputfield">
                            <label>Others</label>
                            <input type="number" class="input" name="others" value="<?php echo $others; ?>" required>
                        </div>
                        <div class="inputfield">
                            <label>Remarks</label>
                            <textarea class="textarea" name="remarks"><?php echo $remarks; ?></textarea>
                        </div>
                        <div class="inputfield">
                            <input type="submit" value="Update" class="btn" name="update">
                        </div>
                    </div>
                </div>


            </form>


            <script>
                function myFunction() {
                    document.getElementById("logoutform").submit();

                }
            </script>
        </body>

        </html>


<?php   } else {
        // if the 'id' is not valid, redirect the user back to view.php page
        header("location: ../collection_log.php");
    }
}
?>