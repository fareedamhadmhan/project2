<?php
include '../connect.php';

$menu_id        = $_POST["menu_id"];
$sql = "UPDATE menu SET active='0' WHERE menu_id='$menu_id' ";

if ($con->query($sql) === TRUE) {
    echo "Delete successfully";
} else {
    echo "Error updating record: " . $con->error;
}