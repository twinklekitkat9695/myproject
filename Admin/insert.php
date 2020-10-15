<?php
include "config.php";
$sname = $_POST["sname"];
$sprice = $_POST["sprice"];
$spath = $_POST["spath"];
$scid = $_POST["scid"];
$array =$_POST["scheck"];
//$arr[]=implode(" ", $array);
$arr=(serialize($array));
$text =$_POST["stext"];
//echo $array;
$sql="INSERT INTO products (`name`, `price`, `path`, `cid`, `tname`, `desc`)
              VALUES ('".$sname."', '".$sprice."', '".$spath."',
              (SELECT cid FROM categories WHERE cname = '".$scid."'),
               '".$arr."', '".$text."')";
              
if (mysqli_query($conn, $sql)) {            
    echo 1;
} else {
    echo "Error : " .$sql. "<br>" .$conn -> error;
}
?>