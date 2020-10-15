<?php

$p_id = $_POST["id"];
require_once "config.php";

$sql='SELECT * FROM `products` WHERE `pid` ="'.$p_id.'"';
$result = mysqli_query($conn, $sql);
$output = "";
if (mysqli_num_rows($result) > 0 ) {

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
                <td width='90px'>Product Name</td>
                    <td><input type='text' id='editname' value='{$row["name"]}'> </td>
                    <input type='hidden' id='editid' value='{$row["pid"]}'>
                </tr>
                <tr>
                    <td width='90px'>Product Price</td>
                    <td><input type='text' id='editprice' value='{$row["price"]}'></td>
                </tr>
                <tr>
                    <td width='90px'>Image Path</td>
                    <td><input type='text' id='editpath' value='{$row["path"]}'></td>
                </tr>
                <tr>
                    <td>Category Name</td>
                    <td><select id='editcategory'>";
                        $sql1="SELECT * FROM categories";
                        $result1=mysqli_query($conn, $sql1) or die("Query Unsuccessful.");
                        while ($row1=mysqli_fetch_assoc($result1)) {
                            if ($row['cid'] == $row1['cid']) {
                                $select="selected";
                            } else {
                                $select="";
                            }
                            $output.=    "<option {$select} value ={$row1["cid"]}>{$row1["cname"]} </option>";
                            
                        }
                        $output.=  "</select></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type='submit' id='edit-submit' value='save'></td>;
                </tr>";
                

    }

    mysqli_close($conn);

    echo $output;
} else {
    echo "<h2>No Record Found.</h2>";
    echo "Error : " .$sql. "<br>" .$conn -> error;
}

?>
