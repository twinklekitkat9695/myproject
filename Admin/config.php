<?php

$dbhost='localhost';
$dbname="project";
$dbusername="root";
$dbpass="";
$conn = new mysqli($dbhost, $dbusername, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function display() {
    $conn = mysqli_connect("localhost", "root", "", "project") or die("Connection Failed");
  // $sql = "SELECT * FROM products";
  $sql="SELECT * FROM products JOIN categories WHERE products.cid= 
        categories.cid";
    $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
    $output = "";
    if (mysqli_num_rows($result) > 0 ) {
        $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Image</th>
                <th>Product Category</th>
                <th width="100px">action</th>
              </tr>';

    while ($row = mysqli_fetch_assoc($result))  {
        $output .= "<tr>
            <td align='center'>{$row["pid"]}</td>
            <td>{$row["name"]}</td>
            <td>{$row["price"]}</td>
            <td><img src='".$row["path"]."'></td>
            <td>{$row["cname"]}</td>
            <td align='center'><button class='edit-btn' data-eid='{$row["pid"]}'>Edit</button>
            <button Class='delete-btn' data-pid='{$row["pid"]}'>Delete</button></td></tr>";
                // </form>";
            
           
    }
        $output .= "</table>";

        //mysqli_close($conn);

        echo $output;
    } else {
        echo "<h2>No Record Found.</h2>";
    }
}
?>      