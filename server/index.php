<?php 
    header('Access-Control-Allow-Origin: *');
    include 'config.php';
    error_reporting(0);
    $cid = mysqli_real_escape_string($dbconfig, $_GET['cid']);
    $bm  = mysqli_real_escape_string($dbconfig, $_GET['bm']);
    $cm  = mysqli_real_escape_string($dbconfig, $_GET['cm']);
    $day = date("Y-m-d");
    $today = mysqli_real_escape_string($dbconfig, $day);



    

    $sql_query = "INSERT INTO ordermanagement (customerid,buffalomilk,cowmilk,orderdate) VALUES ('$cid','$bm', '$cm',  '$today')";

if (mysqli_query($dbconfig, $sql_query)) {
    echo "success";
} else {
    echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
}

    ?>
