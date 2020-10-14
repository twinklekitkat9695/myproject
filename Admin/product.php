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
      <h2>Welcome Twinkle</h2>
      <p id="page-intro">What would you like to do?</p>

      <div class="clear"></div> <!-- End .clear -->

      <div class="content-box"><!-- Start Content Box -->

      <div class="content-box-header">

      <h3>Content box</h3>

      <ul class="content-box-tabs">
        <li><a href="product.php" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
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
        
        <!--<table id="table-data">
          
          <thead>
            <tr>
                <th><input class="check-all" type="checkbox" /></th>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Category</th>
                <th>Action</th>
            </tr>
            <tr><td id="table-data"></td></tr>
            
          </thead>
        </table>-->
        
    <?php
        display();
    ?>
          
        <!--  <tfoot>
            <tr>
              <td colspan="6">
                <div class="bulk-actions align-left">
                  <select name="dropdown">
                    <option value="option1">Choose an action...</option>
                    <option value="option2">Edit</option>
                    <option value="option3">Delete</option>
                  </select>
                  <a class="button" href="#">Apply to selected</a>
                </div>
                
                <div class="pagination">
                  <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                  <a href="#" class="number" title="1">1</a>
                  <a href="#" class="number" title="2">2</a>
                  <a href="#" class="number current" title="3">3</a>
                  <a href="#" class="number" title="4">4</a>
                  <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                </div> <!- End .pagination 
                <div class="clear"></div>
              </td>
            </tr>
          </tfoot>
          
          <tbody>
            <tr>
                <td><input type="checkbox" /></td>
                <td>Lorem ipsum dolor</td>
                <td><a href="#" title="title">Sit amet</a></td>
                <td>Consectetur adipiscing</td>
                <td>Donec tortor diam</td>
                <td>
                <!- Icons 
                  <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                  <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                  <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
              </td>
            </tr>
            
            <tr>
                <td><input type="checkbox" /></td>
                <td>Lorem ipsum dolor</td>
                <td><a href="#" title="title">Sit amet</a></td>
                <td>Consectetur adipiscing</td>
                <td>Donec tortor diam</td>
                <td>
                <!- Icons 
                  <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                  <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                  <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
              </td>
            </tr>
            
            <tr>
              <td><input type="checkbox" /></td>
              <td>Lorem ipsum dolor</td>
              <td><a href="#" title="title">Sit amet</a></td>
              <td>Consectetur adipiscing</td>
              <td>Donec tortor diam</td>
              <td>
                <!- Icons 
                  <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                  <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                  <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
              </td>
            </tr>
            
            <tr>
              <td><input type="checkbox" /></td>
              <td>Lorem ipsum dolor</td>
              <td><a href="#" title="title">Sit amet</a></td>
              <td>Consectetur adipiscing</td>
              <td>Donec tortor diam</td>
              <td>
                <!- Icons 
                  <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                  <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                  <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
              </td>
            </tr>
            
            <tr>
              <td><input type="checkbox" /></td>
              <td>Lorem ipsum dolor</td>
              <td><a href="#" title="title">Sit amet</a></td>
              <td>Consectetur adipiscing</td>
              <td>Donec tortor diam</td>
              <td>
                <!- Icons 
                  <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                  <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                  <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
              </td>
            </tr>
            
            <tr>
              <td><input type="checkbox" /></td>
              <td>Lorem ipsum dolor</td>
              <td><a href="#" title="title">Sit amet</a></td>
              <td>Consectetur adipiscing</td>
              <td>Donec tortor diam</td>
              <td>
                <!- Icons 
                  <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                  <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                  <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
              </td>
            </tr>
            
            <tr>
              <td><input type="checkbox" /></td>
              <td>Lorem ipsum dolor</td>
              <td><a href="#" title="title">Sit amet</a></td>
              <td>Consectetur adipiscing</td>
              <td>Donec tortor diam</td>
              <td>
                <!- Icons 
                  <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                  <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                  <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
              </td>
            </tr>
            
            <tr>
              <td><input type="checkbox" /></td>
              <td>Lorem ipsum dolor</td>
              <td><a href="#" title="title">Sit amet</a></td>
              <td>Consectetur adipiscing</td>
              <td>Donec tortor diam</td>
              <td>
                <!- Icons 
                  <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                  <a href="#" title="Delete"><img src=ages/icons/cross.png" alt="Delete" /></a> 
                  <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
              </td>
            </tr>
          </tbody>"resources/im
          
        </table>*/
        
      </div>-- End #tab1 -->

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
                      <option class="one" value="Men">Men</option>
                      <option class="one" value="Women">Women</option>
                      <option class="one" value="Kids">Kids</option>
                      <option class="one" value="Electronics">Electronics</option>
                      <option class="one" value="Sports">Sports</option>
                  </select> 
            </p>
            
            <p>
                <input type="submit" name="submit" value="Submit" id="save"/>
            </p>
            
          </fieldset>
          
          <div class="clear"></div><!-- End .clear -->
          
        </form>
        <?php
       /* if (isset($_POST['submit'])) {
            $name=isset($_POST['input1']) ? $_POST['input1'] : '';
            $price=isset($_POST['input2']) ? $_POST['input2'] : '';
            $path=isset($_POST['input3']) ? $_POST['input3'] : '';
            $cid=isset($_POST['input4']) ? $_POST['input4'] : '';
            if ($name == "" || $price == "" || $path =="" || $cid=="") {
                echo '<script>$("#error-message").html("All fields are required.").slideDown();
                $("#success-message").slideUp()</script>';
            } else {
              $sql="INSERT INTO products (`name`, `price`, `path`, `cid`)
              VALUES ('".$name."', '".$price."', '".$path."',(SELECT cid FROM categories 
              WHERE cname = '".$cid."'))";*/
                /*$sql="INSERT INTO products (`name`, `price`, `path`, `cid`)
                VALUES ('".$name."', '".$price."', '".$path."','".$cid."')";*/
                /*if ($conn-> query($sql) == true) {
                    echo "success";
                } else {
                    echo "Failed";*/
                    /*$sql="INSERT INTO products (`name`, `price`, `path`, `cid`) 
                    select $name,
                          $price,
                          $path,
                          cid
                      from categories where cname = $cid";*/
                /*}
                if ($conn-> query($sql) == true) {
              
                    echo "<script> alert('New record created successfully');</script>";
                } else {
                    echo "Error : " .$sql. "<br>" .$conn -> error;
                }
      
                  $conn -> close();
            }*/
        ?>
        
      </div> <!-- End #tab2 -->        

      </div> <!-- End .content-box-content -->

      </div> <!-- End .content-box -->
    
      <div class="clear"></div>


    

      <?php require "footer.php";?>
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
	<meta name="keywords" content="HTML,CSS">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
      <script>
      $(document).ready(function(){
        $('#save').on('click', function(e){
          e.preventDefault();
          var name = $("#name").val();
          var price = $("#price").val();
          var path = $("#path").val();
          var cid = $("#cid").val();
          $.ajax({
          url: "insert.php",
          type : "POST",
          data : {sname:name, sprice: price, spath:path, scid:cid},
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
</body>
</html>


