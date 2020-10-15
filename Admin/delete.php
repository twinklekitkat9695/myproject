<?php
if (isset($_POST['sid'])) {
    $p_id = $_POST["sid"];
    require_once "config.php";
    $sql='DELETE FROM products WHERE `pid` = "'.$p_id.'"';

    if (mysqli_query($conn, $sql)) {
        echo 1;
    } else {
        echo "Error : " .$sql. "<br>" .$conn -> error;
    }
    mysqli_close($conn);
}

//require_once "config.php";
    /*$p_id=$_GET['id'];
    require 'config.php';
    $sql="DELETE FROM products WHERE pid={$p_id}";
    $result=mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    header("Location:product.php");
    mysqli_close($conn); */
    
    
?>