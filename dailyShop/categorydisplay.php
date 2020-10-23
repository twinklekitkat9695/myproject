<?php require_once "config.php" ?>
<ul class="aa-product-catg">
            
          <?php
            $pid=$_POST['id'];
            $sql="SELECT * FROM products JOIN categories WHERE products.cid= 
            categories.cid";
            $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
            if (mysqli_num_rows($result) > 0 ) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($pid == $row["cname"]) {
                  //print_r($row);
                  ?>
                <li>
                  <figure>
                    <a class="aa-product-img" href="#"><img src="<?php echo $row["path"] ?>" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn" href="cart.php?Id=<?php echo $row["pid"] ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#"><?php echo $row["name"] ?></a></h4>
                      <span class="aa-product-price">$<?php echo $row["price"] ?></span><span class="aa-product-price"><del><?php echo $row["price"] ?></del></span>
                      <p class="aa-product-descrip"><?php echo $row["desc"] ?></p>
                    </figcaption>
                  </figure>                          
                  <div class="aa-product-hvr-content">
                    <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a> -->
                    <a href="" id="one" data-id='<?php echo $row["pid"] ?>' data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                  </div>
                  <!-- product badge -->
                  <?php
                  if ($row['cname']=="Men") {
                      ?>
                      <span class="aa-badge aa-hot" href="#">Fashion!</span>
                      <?php
                  } elseif ($row['cname']=="Kids") {
                      ?>
                      <span class="aa-badge aa-sale" href="#">Offer!</span>
                      <?php
                  } elseif ($row['cname']=="Women") {
                    ?>
                    <span class="aa-badge aa-hot" href="#">Hot!</span>
                    <?php
                  } else {
                      ?>
                      <span class="aa-badge aa-sale" href="#">Sale!</span>
                            <?php
                  
                        }
                        ?>
                  
                  </li>
                      <?php 
                        }
                      }
                    } else {
                        echo "Error : " .$sql. "<br>" .$conn -> error;
                      }
                     ?>
            
                      
                      
              </ul> 