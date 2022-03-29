<?php 
    include('connect.php');

    $sql = "SELECT count(1) from tempat";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);

    echo "$row"

    // $sql = //Query insert;
    // $result = mysqli_query($connect, $sql);
?>