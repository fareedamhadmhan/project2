<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้
//สร้างตัวแปรสำหรับรับค่า admin_Emailจากไฟล์แสดงข้อมูล
$manu_name  = $_REQUEST["manu_name"];
$Ingredients= $_REQUEST["Ingredients"];
$Gastronomy= $_REQUEST["Gastronomy"];
 
//ลบข้อมูลออกจาก database ตาม food_recipe ->admin_Email ที่ส่งมา
 
$sql = "DELETE FROM ตารางสูตรอาหาร WHERE manu_name='$manu_name' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'updateสูตรอาหาร.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>