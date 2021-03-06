<?php 

ob_start();
session_start();
require_once 'config.php';
require_once 'header.php' 
?>

  <!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Login</h4>
                 <form action="<?php $_SERVER["PHP_SELF"];?>" class="aa-login-form" method="post">
                  <div style="display:<?php if (isset($_SESSION['showAlert'])) {echo $_SESSION['showAlert'];
                      } else {echo 'none';} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong><?php if (isset($_SESSION['message'])) {echo $_SESSION['message'];}
                          unset($_SESSION['message']); ?></strong>
                  </div>
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email" name="username">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="aa-browse-btn" name="login">Login</button>
                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
              <div id="show"></div>
                <div class="aa-myaccount-register">                 
                 <h4>Register</h4>
                 <form action="" class="aa-login-form" method="post">
                    <label for="">Username<span>*</span></label>
                    <input type="text" placeholder="Username" id='name'>
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="password" id='password'>
                    <label for="">Confirm Password<span>*</span></label>
                    <input type="password" placeholder="Confirm password" id='repassword'>
                    <label for="">Email<span>*</span></label>
                    <input type="email" placeholder="Email" id='email'><br>
                    <label for="">DOB<span>*</span></label>
                    <input type="date" placeholder="Date of Birth" id='dob'><br>
                    <label for="">Address<span>*</span></label>
                    <input type="text" placeholder="Address" id='address'>
                    <button type="submit" class="aa-browse-btn" id="register">Register</button>                    
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 
 <!-- / Cart view section -->

  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Knowledge Base</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Discount</a></li>
                      <li><a href="#">Special Offer</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Advanced Search</a></li>
                      <li><a href="#">Suppliers</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> 25 Astor Pl, NY 10003, USA</p>
                      <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                      <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form action="<?php $_SERVER["PHP_SELF"];?>" class="aa-login-form" method="post">
              <div style="display:<?php if (isset($_SESSION['showAlert'])) {echo $_SESSION['showAlert'];
                      } else {echo 'none';} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong><?php if (isset($_SESSION['message'])) {echo $_SESSION['message'];}
                          unset($_SESSION['message']); ?></strong>
                  </div>
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email" name="username">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password" name="password">
            <button class="aa-browse-btn" type="submit" name="login">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.php">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>


    
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
  <script>
      $(document).ready(function(){
        $("#register").on("click",function(e){
          e.preventDefault();
         // e.preventDefault();
          var name = $("#name").val();
          var password = $("#password").val();
          var repassword = $("#repassword").val();
          var email = $("#email").val();
          var dob = $("#dob").val();
          var address = $("#address").val();
          $.ajax({
              url: "userRegistration.php",
              type : "POST",
              data : {name:name, password: password, repassword: repassword, email: email, dob: dob, address: address},
              success : function(data){
                //alert(data);
                 if (data==1) {
                  $("#show").html(data);
                } else { 
                  $("#show").html(data);
                  //alert(data);
                }
              }
          });
        });
      });
  </script>

  </body>
</html>
 <!--login code start -->
 <?php 
    if (isset($_POST["login"])) {
        $username = mysqli_real_escape_string($conn, isset($_POST['username']) ? $_POST['username'] : '');
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        $sql = "SELECT `uid`, `uname` FROM users WHERE uemail = '".$username."' 
        and upassword = '".$password."'";
        $result = mysqli_query($conn, $sql) or die("Query failed");
        if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION["username"] =$row["uname"];
                $_SESSION["user_id"] =$row["uid"];
                if (isset($_SESSION["user_id"])) {
                    header("Location: cart.php");
              }
                //header("Location: cart.php");            
            }
        } else {
            $_SESSION['showAlert'] ='block';
            $_SESSION['message'] ="username or password doesnt exist";
        }
    }

?>
 <!--login code end -->
<?php ob_end_flush(); ?>