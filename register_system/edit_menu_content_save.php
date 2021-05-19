<?php
include '../connect.php';

$number_p       = $_POST["number_p"];
$detail         = $_POST["explain"];
$Ingredients    = $_POST["Ingredients"];
$cook           = $_POST["cook"];
$menu_name      = $_POST["menu_name"];

$food_type      = $_POST["food_type"];
$fastival       = $_POST["fastival"];
$international  = $_POST["international"];
$local_food     = $_POST["local_food"];

$sql = "UPDATE menu SET for_people='$number_p', Ingredients='$Ingredients', cook='$cook', detail='$detail', food_type='$food_type', fastival='$fastival', international='$international', local_food='$local_food' WHERE menu_name='$menu_name' ";

if ($con->query($sql) === TRUE) {
    echo "Updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}