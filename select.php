<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sql = "SELECT * from tempat where tempat_id = 'T-01'";
                    $result=mysqli_query($connect, $sql);
                    if ($result) {
                        while ($row=mysqli_fetch_assoc($result)) {
                        echo $row['foto_tempat'];
                        }
                    }
                    echo "<br>";
    $sql = "SELECT * from lapangan where tempat_id = 'T-01'";
                    $result=mysqli_query($connect, $sql);
                    if ($result) {
                        while ($row=mysqli_fetch_assoc($result)) {
                        echo $row['foto'];
                        }
                    }
                ?>
</body>
</html>