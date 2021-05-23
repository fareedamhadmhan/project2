<?php
include '../connect.php';

$material       = $_POST["material"];
$detail         = $_POST["explain"];
$Ingredients    = $_POST["Ingredients"];
$cook           = $_POST["cook"];
$menu_name      = $_POST["menu_name"];

$food_type      = $_POST["food_type"];
$fastival       = $_POST["fastival"];
$international  = $_POST["international"];
$local_food     = $_POST["local_food"];
$fileupload     = $_FILES["fileupload"];

$fileupload     = $fileupload["tmp_name"];
$filename       = $_FILES["fileupload"]['name'];

//uploadfile
@mkdir("upload/", 0755);
if (!empty($menu_name)) {
  @mkdir("upload/" . $menu_name . "/", 0755);
  $uploaddir = "upload/" . $menu_name . "/";
  $uploadfile = $uploaddir . $filename;
  @move_uploaded_file($_FILES["fileupload"]["tmp_name"], $uploadfile);
} else {
  $menu_name = "";
}

$sql = "UPDATE menu SET material='$material', Ingredients='$Ingredients', cook='$cook', detail='$detail', food_type='$food_type', fastival='$fastival', international='$international', local_food='$local_food' WHERE menu_name='$menu_name' ";
$sql_upfile = "UPDATE attach_file SET path_file='$uploadfile' WHERE menu_name='$menu_name'";

if ($con->query($sql) === TRUE && $con->query($sql_upfile) === TRUE) {
    echo "Updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}