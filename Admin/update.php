<?php
    $pid = $_POST["id"];
    $pname = $_POST["name"];
    $pprice = $_POST["price"];
    $path = $_POST["path"];
    $pcategory = $_POST["category"];
    
    require_once "config.php";
    
    $sql = "UPDATE products SET `name` = '{$pname}', `price` = '{$pprice}',`path` = '{$pname}', `cid` = '{$pcategory}'
    WHERE pid = {$pid}";
    
    if (mysqli_query($conn, $sql)) { 
        echo 1;
    } else {
        echo "Error : " .$sql. "<br>" .$conn -> error;
    }
?>