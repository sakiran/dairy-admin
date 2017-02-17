<?php 
    header('Access-Control-Allow-Origin: *');
    include 'config.php';
    error_reporting(0);
    $cid = mysqli_real_escape_string($dbconfig, $_GET['cid']);
    $bm  = mysqli_real_escape_string($dbconfig, $_GET['month']);
    $sql_query = "SELECT * FROM ordermanagement WHERE customerid='$cid'";
    $result    = mysqli_query($dbconfig, $sql_query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
    $var[] = $row;
    
}
echo json_encode($var);
?>