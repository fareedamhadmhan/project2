<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
// $fileupload = $_POST['fileupload']; //รับค่าไฟล์จากฟอร์ม	
// $fileupload = (isset($_POST['fileupload']) ? $_POST['fileupload'] : '');

//ฟังก์ชั่นวันที่
        date_default_timezone_set('Asia/Bangkok');
	$date = date("Ymd");//พ.ศ	
//ฟังก์ชั่นสุ่มตัวเลข
         $numrand = (mt_rand());
//เพิ่มไฟล์
$upload=$_FILES['fileupload'];
if(!empty($upload)) { 
                  //โฟลเดอร์ที่จะ upload file เข้าไป 
                  @mkdir("fileupload/",0755);
                  $path="fileupload/";  

                  //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
                //   $type = strrchr($_FILES['fileupload']['name'],".");
                                    
                  //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
                  $newname = $upload['name'];
                  $path_copy=$path.$newname;
                //   $path_link="fileupload/".$newname;

                  //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
                  move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
                                    }
                                    // เพิ่มไฟล์เข้าไปในตาราง uploadfile
                                    
                                      $sql = "INSERT INTO uploadfile (path_file) 
                                      VALUES('$path_copy')";
                                                      
                                      $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
                                    
                                    mysqli_close($con);
                                    // javascript แสดงการ upload file
                                    
 //                                  exit;

                                    if($result){
                                    echo "<script type='text/javascript'>";
                                    echo "alert('Upload File Succesfuly');";
                                    echo "window.location = '../users_system/member.php'; ";
                                    echo "</script>";
                                    }
                                    else{
                                    echo "<script type='text/javascript'>";
                                    echo "alert('Error back to upload again');";
                                    echo "window.location = 'form.php'; ";
                                    echo "</script>";
}
?>