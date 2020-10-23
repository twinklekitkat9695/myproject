<?php
    require_once "config.php";
    //$conn = mysqli_connect("localhost", "root", "", "project") or die("Connection Failed");
    // $sql = "SELECT * FROM products";
    $result_per_page =20;
    $sq="SELECT * FROM products";
  
    $res = mysqli_query($conn, $sq) or die("SQL Query Failed.");
    $number_of_results =mysqli_num_rows($res);
    $number_of_pages =ceil($number_of_results / $result_per_page);
    //$page=$_GET['page'];
    if (isset($_GET['page'])) {
        $page=$_GET['page'];;
    } else {
        $page=1;
    } 
    $this_page_first_result = ($page-1) * $result_per_page;
    //$sql="SELECT * FROM `products` ORDER BY `pid` DESC LIMIT {$this_page_first_result}, {$result_per_page}";
    $sql="SELECT * FROM products JOIN categories WHERE products.cid= 
        categories.cid LIMIT {$this_page_first_result}, {$result_per_page}";
    $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
    $output = "";
    if (mysqli_num_rows($result) > 0 ) {
        $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
        <thead>
              <tr>
                <th><input class="check-all" type="checkbox" /></th>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th width="100px" height="50px">Product Image</th>
                <th>Product Category</th>
                <th width="100px">action</th>
              </tr>
              <tfoot>
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
                  <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>';
                  for ($i=1; $i<=$number_of_pages; $i++) {
                      if ($i==$page) {
                          $active="active";
                      } else {
                          $active ="";
                      }
      $output.=  '<a class="number" title="1" href="display.php?page='.$i.'">'. $i.'</a>';
                    }
                    $output.=  '<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                </div> 
                <div class="clear"></div>
              </td>
            </tr>
          </tfoot>
        </thead>';
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= "<tbody><tr>
                <td><input type='checkbox' /></td>
                <td align='center'>{$row["pid"]}</td>
                <td>{$row["name"]}</td>
                <td>{$row["price"]}</td>
                <td><img src='".$row["path"]."' style='width:50px; height:50px'></td>
                <td>{$row["cname"]}</td>        
                <td>
                <button class='edit' name='edtbtn' data-eid=".$row['pid']."'><img src='resources/images/icons/pencil.png' alt='Edit'/></button>
                <button class='delete' name='dltbtn' data-id=".$row['pid']."'><img src='resources/images/icons/cross.png' alt='Edit Meta' /></button>
                </td></tr>
                <tbody>";
                    
                    /* <a href='edit.php?id=".$row['pid']."'>Edit</a>
                <a href='delete.php?id=".$row['pid']."'>Delete</a> */
        }
        $output .= "</table>";

        //mysqli_close($conn);

        echo $output;
      } else {
          echo "<h2>No Record Found.</h2>";
      }

?>
