<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>Republik Junk</title>
</head>

<body>

    <?php if (isset($_GET['wrong_cred'])) {
        echo '<script>alert("Wrong Email or Password!")</script>';
    } ?>

    <div class="whole">
        <div class="container">
            <div class="form-container">
                <div class="logo">
                    <img src="img/rjlogo.png" alt="">
                </div>
                <form action="util/account.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <label>Username</label>
                        <input type="text" name="r_name" required>
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="r_pass" required>
                    </div>
                    <div>
                        <button type="submit" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>