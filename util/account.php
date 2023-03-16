<?php
require '../db/database.php';

if (isset($_POST['login'])) {

    $username = $_POST['r_name'];
    $password = $_POST['r_pass'];
    $sql = "SELECT * FROM admin WHERE admin_username = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php");
    } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['admin_pass']) {
            session_start();
            $_SESSION['role'] = 'admin';
            header("Location: ../dashboard.php");
        } else {
            header("Location: ../index.php?wrong_cred");
        }
    }
}
