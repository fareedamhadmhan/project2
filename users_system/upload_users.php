<?php
include '../connect.php';
?>

<?php
$username      = $_POST["username"];
$email        = $_POST["email"];
$password       = $_POST["password"];


$uploadfile     = "";
$date           = date("Y-m-d");


$fileupload     = $_FILES["fileupload"]["tmp_name"];
$filename       = $_FILES['fileupload']['name'];

//uploadfile
@mkdir("fileupload/", 0755);
if (!empty($username)) {
  @mkdir("fileupload/" . $username . "/", 0755);
  $uploaddir = "fileupload/" . $username . "/";
  $uploadfile = $uploaddir . $filename;
  @move_uploaded_file($_FILES["fileupload"]["tmp_name"], $uploadfile);
} else {
  $username = "";
}

@$sql_users = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username','$email','$password')";
@$sql_file = "INSERT INTO `users_file` (`username`,`path_file`,`add_date`) VALUES ('$username','$uploadfile','$date')";

@$con->query($sql_users);
@$con->query($sql_file);

echo "success";



?>

