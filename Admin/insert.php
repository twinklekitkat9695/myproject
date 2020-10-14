<?php
include "config.php";
$sname = $_POST["sname"];
$sprice = $_POST["sprice"];
$spath = $_POST["spath"];
$scid = $_POST["scid"];
$sql="INSERT INTO products (`name`, `price`, `path`, `cid`)
              VALUES ('".$sname."', '".$sprice."', '".$spath."',(SELECT cid FROM categories 
              WHERE cname = '".$scid."'))";
              
if (mysqli_query($conn, $sql)) {            
    echo 1;
} else {
    echo "Error : " .$sql. "<br>" .$conn -> error;
}
?>