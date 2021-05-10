<?php
include '../connect.php';

$number_p       = $_POST["number_p"];
$detail        = $_POST["explain"];
$Ingredients    = $_POST["Ingredients"];
$cook           = $_POST["cook"];
$menu_name      = $_POST["menu_name"];

$sql = "UPDATE menu SET for_people='$number_p', Ingredients='$Ingredients', cook='$cook', detail='$detail' WHERE menu_name='$menu_name' ";

if ($con->query($sql) === TRUE) {
    echo "Updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}
