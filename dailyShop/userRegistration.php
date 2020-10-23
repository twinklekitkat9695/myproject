<?php
session_start();
require_once 'config.php';
$errors=array();
$name = $_POST["name"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$address = $_POST["address"];

if ($password != $repassword) {
    $errors['i'] = "password doesnt match";
}

if (!$name || !$password || !$repassword || !$email || !$dob || !$address) {
    $errors['em'] = "Fields should not be empty";
}

$u = "SELECT uname FROM users WHERE uname='$name'";
$uu = mysqli_query($conn, $u);
if (mysqli_num_rows($uu) > 0) {
    $errors['u'] = "Username Already Exist";
}

$e = "SELECT uemail FROM users WHERE uemail='$email'";
$ee = mysqli_query($conn, $e);
if (mysqli_num_rows($ee) > 0) {
    $errors['e'] = "Email Already Exist";
}
$err=implode("!!<br>", $errors);
//$_SESSION["store"] =$errors;
if (sizeof($errors)==0) {
    $sql ="INSERT INTO users (`uname`, `upassword`, `uemail`, `dob`, `address`)
    VALUES ('".$name."', '".$password."', '".$email."', '".$dob."', '".$address."')";
   
    if (mysqli_query($conn, $sql)) {
        ?>
        <div class="alert alert-success alert-dismissible mt-3">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Registration is successful !!!</strong>
          </div>
   <?php 
    }
       
} else {
        $_SESSION['showAlert'] ='block';
        $_SESSION['message'] =$err;
        ?>
        <div <?php if (isset($_SESSION['showAlert'])) {echo $_SESSION['showAlert'];
        } unset($_SESSION['showAlert']); ?> class="alert alert-danger alert-dismissible mt-3">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php if (isset($_SESSION['message'])) {echo $_SESSION['message'];}
            unset($_SESSION['message']); ?></strong>
          </div>
          <?php
}
$conn -> close();
?>
