<?php
include "../db/database.php";

if (isset($_GET['id'])) {
    $trash_id = $_GET['id'];

    $sql = "DELETE FROM collection WHERE id = '$trash_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record deleted successfully.";
        header("location: ../collection_log.php");
    } else {
        "Error:" . $sql . "<br>" . $conn->error;
    }
}
