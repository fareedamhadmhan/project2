<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
//สร้างตัวแปรสำหรับรับค่า admin_Emailจากไฟล์แสดงข้อมูล
$admin_Email = $_REQUEST["admin_Email"];
$admin_User = $_REQUEST["admin_User"];
$admin_Password= $_REQUEST["admin_Password"];
 
//ลบข้อมูลออกจาก database ตาม admin_Email ที่ส่งมา
 
$sql = "DELETE FROM system_admin WHERE admin_Email='$admin_Email' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'ผู้ดูแลระบบ.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>