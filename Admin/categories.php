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
      <h2>Welcome John</h2>
      <p id="page-intro">What would you like to do?</p>

      <div class="clear"></div> <!-- End .clear -->

      <div class="content-box"><!-- Start Content Box -->

      <div class="content-box-header">

      <h3>Content box</h3>

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
        display();
        ?>

      <div class="tab-content" id="tab2">

        <form action="#" method="post">
          
          <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            
            <p>
              <label>Category Name</label>
                <input class="text-input small-input" type="text" id="small-input" name="small-input" /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                <br /><small>A small description of the field</small>
            </p>
            <p>
              <input class="button" type="submit" value="Submit" />
            </p>
            
          </fieldset>
          
          <div class="clear"></div><!-- End .clear -->
          
        </form>
        
      </div> <!-- End #tab2 -->        

      </div> <!-- End .content-box-content -->

      </div> <!-- End .content-box -->
    
      <div class="clear"></div>


      <!-- Start Notifications -->

      <!--<div class="notification attention png_bg">
      <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
      <div>
      Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. 
      </div>
      </div>

      <div class="notification information png_bg">
      <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
      <div>
      Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
      </div>
      </div>

      <div class="notification success png_bg">
      <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
      <div>
      Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
      </div>
      </div>

      <div class="notification error png_bg">
      <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
      <div>
      Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
      </div>
      </div>-->

      <!-- End Notifications -->

      <?php require "footer.php";?>
