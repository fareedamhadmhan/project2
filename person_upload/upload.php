
<?php

$dir = "uploads/";
$fileImage = $dir . basename($_FILES["file"]["name"]);

if(move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)){
  echo"ไฟล์ภาพชื่อ" .basename($_FILES["file"]["name"]). "อัพโหลดรูปเสร็จแล้ว";
}else{
  echo"เกิดข้อผิดพลาดในการอัพโหลดรูป";               
}
