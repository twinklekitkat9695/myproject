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
    include "config.php";
    $p_id=$_GET['id'];
    require 'config.php';
    $sql="DELETE FROM products WHERE pid={$p_id}";
    $result=mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    header("Location:product.php");
    mysqli_close($conn);
?>