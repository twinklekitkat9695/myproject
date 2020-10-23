<?php 

ob_start();
session_start(); 
require_once 'header.php';
require_once 'config.php';
if (!isset($_SESSION["user_id"])) {
  header("Location: {$hostname}/account.php");
}
$sum="";
$total=array();
?>

  <!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Cart Page</h2>
        <ol class="breadcrumb">
          
          <li><a href="index.php">Home</a></li>                    
          <li class="active">Cart</li><br>
          <h2>Welcome !!  <?php echo $_SESSION["username"]; ?></h2>
          <li><a href="logout.php"> Logout</a></li> 
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
            <div style="display:<?php if (isset($_SESSION['showAlert'])) {echo $_SESSION['showAlert'];
            } else {echo 'none';} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong><?php if (isset($_SESSION['message'])) {echo $_SESSION['message'];}
                unset($_SESSION['message']); ?></strong>
              </div>
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php

                   /*  if (empty($_SESSION['cart'])) {       
                        global $usercart ;
                        $usercart = array();
                    } else {
                        $usercart = $_SESSION['cart'];
                    }
                    if (isset($_GET["id"])) {
                        $usercart[] = $_GET["id"];
                        $_SESSION['cart']=$usercart;
                    }
                    $total=array();

                    foreach ($_SESSION['cart'] as $key => $value) { */
                        
                    $sql="SELECT * FROM cart WHERE `uid`={$_SESSION['user_id']}";
                      $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
                      
                      if (mysqli_num_rows($result) > 0 ) {
                          while ($row = mysqli_fetch_assoc($result)) {
                              $total[]=$row["price"] * $row["quantity"];
                              ?>
                              <tr>
                                  <td>
                                    <a class="remove" href="cartaction.php?remove=<?php echo $row['id'] ?>" onclick="return confirm
                                    ('Are you sure want to delete this item');"><fa class="fa fa-close"></fa>   </a>
                                  </td>
                                  <input type="hidden" class="cid" value="<?php echo $row['id'] ?>">
                                  <td><a href="#"><img src="<?php echo $row["path"] ?>" alt="img"></a></td>
                                  <td><a class="aa-cart-title" href="#"><?php echo $row["name"] ?></a></td>
                                  <td>$<?php echo $row["price"] ?></td>
                                  <input type="hidden" class="price" value="<?php echo $row['price'] ?>">
                                  <td><input class="aa-cart-quantity qty" type="number" value="<?php echo $row["quantity"] ?>"></td>
                                  <td>$<?php echo $row["price"]  * $row["quantity"] ?></td>
                              </tr>
                                  <?php
                      
                          }
                        //}  
                         
                        $sum=array_sum($total);
                    }           
                    ?>          
                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                          <div class="aa-cart-coupon">
                            <input class="aa-coupon-code" type="text" placeholder="Coupon">
                            <input class="aa-cart-view-btn" type="submit" value="Apply Coupon">
                          </div>
                          <input class="aa-cart-view-btn" type="submit" value="Update Cart">
                        </td>
                      </tr>
                      </tbody>
                  </table>
                </div>
             </form>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <!-- <tr>
                     <th>Subtotal</th>
                     <td></td>
                   </tr>
                   <tr> -->
                     <th>Total</th>
                     <td><?php echo $sum ?></td>
                   </tr>
                 </tbody>
               </table>
               <a href="checkout.php" class="aa-cart-view-btn" <?php ($sum >1)?"":"disabled"; ?>>Proced to Checkout</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
<?php
//session_unset();
?>

<?php require_once 'footer.php' ?>
<script>
$(document).ready(function(){
    $(".qty").on("change", function(){
       // e.preventDefault();
        var $id = $(this).closest('tr');
        var cid = $id.find(".cid").val();
        var price = $id.find(".price").val();
        var qty = $id.find(".qty").val();
        location.reload(true);
        //console.log(qty);
        //console.log(cid);
        //alert(price);
        $.ajax({
          url:'cartaction.php',
          method:'post',
          cache:'false',
          data:{id:cid, price:price, qty:qty},
          success:function(data){
          alert(data);
          }
        });
        /* function load_cart(){
          $.ajax({
            url:'cartaction.php',
            method:'get',
            data:{}
          })
        } */
    });
});
</script>
<?php ob_end_flush(); ?>