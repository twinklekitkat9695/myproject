<?php

session_start();
$price="";
$name="";
$path="";
//$uid="";
require_once 'config.php';
/* if (isset($_SESSION["username"])) {
    $uid=$_SESSION["username"];
} */
if (isset($_GET['id']) && isset($_SESSION['username'])) {
    $pid=$_GET['id'];
    $qty=1;
    $uid=$_SESSION['username'];
    $sql="SELECT * FROM cart WHERE `pid`= '{$pid}'";
    $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
    if (mysqli_num_rows($result) == 0 ) {
        $sql1="SELECT * FROM products WHERE `pid`= '{$pid}'";
        $result1 = mysqli_query($conn, $sql1) or die("SQL Query Failed.");
        if (mysqli_num_rows($result1) > 0 ) {
            while ($row = mysqli_fetch_assoc($result1)) {
                $price =$row["price"];
                $name =$row["name"];
                $path=$row["path"];
            }
        }
        $sql="INSERT INTO cart (`uid`, `pid`, `price`, `quantity`, `name`, `path`)
              VALUES ((SELECT `uid` FROM users WHERE uname = '".$uid."'), '".$pid."', '".$price."', '".$qty."',
               '".$name."', '".$path."')";
        if (mysqli_query($conn, $sql)) {            
            echo '
            <script>
                window.location.href="product.php";
                alert("Successfully added to cart!");
            </script>;
          header("Location: cart.php");
        } else {
            echo "Error : " .$sql. "<br>" .$conn -> error';
        }
    } else {
        echo '
            <script>
            window.location.href="product.php";
            alert("Item Already Inside Cart");
            </script>
       ';
        //header("Location: cart.php");
    }

}

if (isset($_GET["remove"])) {
    $id = $_GET["remove"];
    $sql2="DELETE FROM cart WHERE id={$id}";
    if (mysqli_query($conn, $sql2)) {
        $_SESSION['showAlert'] ='block';
        $_SESSION['message'] ='Item removed from the cart !';
        header("Location: cart.php");
    }
}
if (isset($_POST['qty'])) {
    $qty=$_POST['qty'];
    $id=$_POST['id'];
    $price=$_POST['price'];

    //$tprice=$qty*$price;
    $sql3="UPDATE cart SET `price`=$price, `quantity` =$qty WHERE `id`= $id";
    if (mysqli_query($conn, $sql3)) {
        echo 1;
    } else {
        echo "Error : " .$sql3. "<br>" .$conn -> error;
    }
}
?>