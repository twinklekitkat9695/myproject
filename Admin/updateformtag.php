<?php

$p_id = $_POST["id"];
require_once "config.php";

$sql='SELECT * FROM `tags` WHERE `tid` ="'.$p_id.'"';
$result = mysqli_query($conn, $sql);
$output = "";
if (mysqli_num_rows($result) > 0 ) {

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
                <td width='90px'>Category Name</td>
                    <td><input type='text' id='editname' value='{$row["tname"]}'> </td>
                    <input type='hidden' id='editid' value='{$row["tid"]}'>
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
