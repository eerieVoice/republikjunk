<?php
session_start();
if (isset($_SESSION["role"]) != 'admin') {
    header('Location: index.php');
    session_destroy();
} ?>