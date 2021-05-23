<?php
include '../connect.php';
?>

<?php
$menu_name      = $_POST["menu_name"];
$explain        = $_POST["explain"];
$time           = $_POST["time"];
$Ingredients    = $_POST["Ingredients"];
$cook           = $_POST["cook"];

$food_type      = "";
$fastival       = "";
$international  = "";
$local_food     = "";
$material     = "";
$uploadfile     = "";
$date           = date("Y-m-d");

if (!empty($_POST["food_type"])) {
  $food_type      = $_POST["food_type"];
}
if (!empty($_POST["fastival"])) {
  $fastival      = $_POST["fastival"];
}
if (!empty($_POST["international"])) {
  $international      = $_POST["international"];
}
if (!empty($_POST["local_food"])) {
  $local_food      = $_POST["local_food"];
}
if (!empty($_POST["material"])) {
  $material       = $_POST["material"];
}

$fileupload     = $_FILES["fileupload"]["tmp_name"];
$filename       = $_FILES['fileupload']['name'];

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

@$sql_menu = "INSERT INTO `menu` (`menu_name`, `Ingredients`, `cook`,`detail`,`material`,`food_type`,`international`,`fastival`,`local_food`) VALUES ('$menu_name','$Ingredients','$cook','$explain','$material','$food_type','$international','$fastival','$local_food')";
@$sql_file = "INSERT INTO `attach_file` (`menu_name`,`path_file`,`add_date`) VALUES ('$menu_name','$uploadfile','$date')";

@$con->query($sql_menu);
@$con->query($sql_file);

echo "success";



?>

