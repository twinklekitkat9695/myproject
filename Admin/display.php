<?php
    require_once "config.php";
    //$conn = mysqli_connect("localhost", "root", "", "project") or die("Connection Failed");
    // $sql = "SELECT * FROM products";
    $sql="SELECT * FROM products JOIN categories WHERE products.cid= 
        categories.cid";
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
                <th>Product Image</th>
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
        </thead>';
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= "<tbody><tr>
                <td><input type='checkbox' /></td>
                <td align='center'>{$row["pid"]}</td>
                <td>{$row["name"]}</td>
                <td>{$row["price"]}</td>
                <td><img src='".$row["path"]."'></td>
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="resources/css/update.css" type="text/css" media="screen" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
            <div id="#modal">
                <div id="modal-form">
                    <h2>Edit Form</h2>
                    <div id="close-btn">X</div>
                    <table cellpadding="10px" width="100%">
                    </table>
                </div>
            </div>
            <script>
            //if(isset($_POST['dltbtn'])){ 
                $(document).ready(function(){
                    $('.delete').click(function(){
                    //e.preventDefault();
                    var name = $(this).data('id');
                    //alert(name);
                    if(confirm("Are you sure?")) {
                        $.ajax({
                        url: "delete.php",
                        type : "POST",
                        data : {sid:name},
                        success : function(data){
                        //alert(data);
                        //console.log(data);
                        if(data == 1){
                        alert("Successfully Deleted");  
                        } else {
                        alert("failed");
                        }
                    }
                    });
                    }
                });
                //Show Modal Box
                $('.edit').click(function(){
                $("#modal").show();
                $("#close-btn").show();
                $("h2").show();
                var eid = $(this).data("eid");
                    //alert(eid);
                $.ajax({
                    url: "updateform.php",
                    type: "POST",
                    data: {id: eid},
                    success: function(data) {
                        //alert(data);
                    $("#modal-form table").html(data);
                    }
                })
                });
                //Hide Modal Box
                $("#close-btn").click(function(){
                    $("#modal-form").hide();
                });
                //Save Update Form
                $(document).on("click","#edit-submit", function(){
                    var id = $("#editid").val();
                    var name = $("#editname").val();
                    var price = $("#editprice").val();
                    var path = $("#editpath").val();
                    var category = $("#editcategory").val();
                    //alert(category);
                    //alert(id);
                    $.ajax({
                    url: "update.php",
                    type : "POST",
                    data : {id: id, name: name, price: price, path: path, category:category},
                    success: function(data) {
                        if(data == 1){
                            alert("successfully updated");
                            //$("#modal").hide();
                        }
                    }
                    });
                });

            });
        //}
        </script>
    </body>
</html>