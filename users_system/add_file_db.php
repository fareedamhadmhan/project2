<meta charset="UTF-8">
<?php

//1. เชื่อมต่อ database:
//ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้

include "../connect.php";
date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");	
$upload_file = $_FILES['upload_file'];


$fileupload     = $upload_file["tmp_name"];
$filename       = $upload_file['name'];
$id             = $_POST['id'];

$sql_user = "SELECT username FROM users WHERE id='$id' ";
$result   = $con->query($sql_user);
foreach($result as $row){
        @mkdir("upload_user/", 0755);
        @mkdir("upload_user/" . $row["username"] . "/", 0755);

        //uploadfile
        $uploaddir = "upload_user/" . $row["username"] . "/";
        $uploadfile = $uploaddir . $filename;
        move_uploaded_file($_FILES["upload_file"]["tmp_name"], $uploadfile);

        @$sql_users_file = "UPDATE users_file SET path_file='$uploadfile' WHERE id='$id' ";
        @$con->query($sql_users_file);
}

?>
<script>
alert("Upload success");
location.replace("../users_system/member.php");
</script>
