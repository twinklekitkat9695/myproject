<?php
/**
 * Array file Doc Commentw
 * 
 * PHP version 7.4.9
 * 
 * @category Products_Array
 * @package  Products_Array
 * @author   Author <author@domain.com>
 * @license  http://opensourse.org/licesnces/MIT License
 * @link     http://localhost
 */
 /**
  * $products
  */
$dbhost='localhost';
$dbname="project";
$dbusername="root";
$dbpass="";
$conn = new mysqli($dbhost, $dbusername, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    //echo "failed"
}
?>      