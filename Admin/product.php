<?php include("header.php");?>
      <?php include("sidebar.php");?>
      <?php include("config.php");?>

      <div id="main-content"> <!-- Main Content Section with everything -->

      <noscript> <!-- Show a notification if the user has disabled javascript -->
      <div class="notification error png_bg">
        <div>
          Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
        </div>
      </div>
      </noscript>

      <!-- Page Head -->
      <h2>Welcome Admin</h2>
      <p id="page-intro">What would you like to do?</p>

      <div class="clear"></div> <!-- End .clear -->

      <div class="content-box"><!-- Start Content Box -->

      <div class="content-box-header">

      <h3>Product Details</h3>

      <ul class="content-box-tabs">
        <li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
        <li><a href="#tab2">Add Products</a></li>
      </ul>

      <div class="clear"></div>

      </div> <!-- End .content-box-header -->

      <div class="content-box-content">

      <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
        
        <div class="notification attention png_bg">
          <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
          <div>
            This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
          </div>
        </div>
          <?php
              require_once "display.php";
          ?>
       
      </div> <!-- End #tab1 -->
      <div class="tab-content" id="tab2">

        <form method="post">
          
          <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            
            <p>
              <label>Product Name</label>
                  <input class="text-input small-input" type="text" id="name" name="input1" /> <!--<span class="input-notification success png_bg">Successful message</span> <!- Classes for input-notification: success, error, information, attention -->
                  <br /><small>Name of product which is not inside database</small>
            </p>
            
            <p>
                <label>Product Price</label>
                <input class="text-input medium-input datepicker" type="text" id="price" name="input2" /> <!--<span class="input-notification error png_bg">Error message</span>-->
            </p>
            
            <p>
                <label>Image Path</label>
                <input class="text-input large-input" type="text" id="path" name="input3" />
            </p>
               <label>Choose Category</label>              
                  <select class="small-input" id='cid' name="input4">
                      <option class="one" value="">Select Category</option>
                      <?php 
                        $sql1="SELECT * FROM categories";
                        $result1=mysqli_query($conn, $sql1) or die("Query Unsuccessful.");
                        while ($row1=mysqli_fetch_assoc($result1)) {
                            ?>
                          <option value="<?php echo $row1['cname'];?>">
                            <?php echo $row1['cname']?></option>
                            <?php 
                        } ?>
                    </select>

          <p>
            <label>Select Product Tags</label>
              <?php 
                $sql2="SELECT * FROM tags";
                $result2=mysqli_query($conn, $sql2) or die("Query Unsuccessful.");

                while ($row2=mysqli_fetch_assoc($result2)) {
                    ?>
                    <input type="checkbox" id="check" name="input1[]" value="<?php echo $row2['tname'] ?>"/> 
                    <?php echo $row2['tname'];
                }?>
          </p>
              
            <p>
              <label>Product Description</label>
              <textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
            </p>
            <p>
                <input type="submit" name="submit" value="Submit" id="save"/>
            </p>
            
          </fieldset>
          
          <div class="clear"></div><!-- End .clear -->
          
        </form>
        <?php
    
        ?>
        
      </div> <!-- End #tab2 -->        

      </div> <!-- End .content-box-content -->

      </div> <!-- End .content-box -->
    
      <div class="clear"></div>

    

<?php require "footer.php";?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script>
      $(document).ready(function(){
        $('#save').on('click', function(e){
          e.preventDefault();
          var name = $("#name").val();
          var price = $("#price").val();
          var path = $("#path").val();
          var cid = $('#cid').val();
          /* var check=$('#check').val(); */
          var array=[];
          $("input:checked").each(function(){
              array.push($(this).val());
          });
          var text=$('#textarea').val();
          alert(array);
          $.ajax({
          url: "insert.php",
          type : "POST",
          data : {sname:name, sprice: price, spath:path, scid:cid, scheck:array, stext:text},
          success : function(data){
            //alert(data);
            //console.log(data);
            if(data == 1){
              alert("Successfully Added");  
            } else {
              alert("failed");
            }

          }
        });/*.done(function (msg) {
                header("Location: product.php");
            }*/
        });
      });
  </script>


