<?php
include "db/database.php";

$sql = "SELECT * FROM collection";

$result = $conn->query($sql);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/collection-log-style.css">
    <title>Collection Log</title>
</head>

<body>
    <!-- includes the header -->
    <?php include 'includes/header.php'; ?>
    <!-- the body of the page  -->
    <div class="container">
        <div class="title">Collection Log</div>
        <table class="table-sortable">
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Date</th>
                    <th>Plastic Pet</th>
                    <th>Plastic Solid</th>
                    <th>Carton</th>
                    <th>Cans</th>
                    <th>Others</th>
                    <th>Remarks</th>
                    <th></th>


                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>

                        <tr>
                            <!-- <td><?php echo $row['id']; ?></td> -->
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['plastic_pet']; ?></td>
                            <td><?php echo $row['plastic_solid']; ?></td>
                            <td><?php echo $row['carton']; ?></td>
                            <td><?php echo $row['cans']; ?></td>
                            <td><?php echo $row['others']; ?></td>
                            <td><?php echo substr($row['remarks'], 0, 40); ?></td>

                            <td><a class="btn btn-info" href="util/update.php?id=<?php echo $row['id']; ?>">Edit</a>
                                &nbsp;<a class="btn btn-danger" href="util/delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>
                <?php }
                }
                ?>

            </tbody>
            </head>

        </table>
    </div>

</body>
<script src="scripts/tablesort.js">
</script>