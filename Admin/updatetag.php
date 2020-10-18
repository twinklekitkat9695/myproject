<?php
    $pid = $_POST["id"];
    $pname = $_POST["name"];
    
    require_once "config.php";
    
    $sql = "UPDATE tags SET `tname` = '{$pname}' WHERE tid = {$pid}";
    
    if (mysqli_query($conn, $sql)) { 
        echo 1;
    } else {
        echo "Error : " .$sql. "<br>" .$conn -> error;
    }
?>