<?php
include "config.php";
$sname = $_POST["sname"];
//echo $array;
$sql="INSERT INTO `categories`(`cname`) VALUES ('".$sname."')";
              
if (mysqli_query($conn, $sql)) {            
    echo 1;
} else {
    echo "Error : " .$sql. "<br>" .$conn -> error;
}
?>