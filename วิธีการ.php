<!DOCTYPE html>
<html lang="en">    
  <head>
    <title> วิธีการทำอาหาร</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css">
    <href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>


    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #fac240;
      color:#0a3389;
      height: 100%;
    }
     
    /* Set black background color, white text and some padding */
    footer {
      background-color: #0902f4;
      color:lightcoral;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>

<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF" text="#000000" alink="#003399" link="#003399" vlink="#003399" >
<img src= "https://helenathailand.co/wp-content/uploads/elementor/thumbs/HelenaTemp_Ver3_02-07_salisa_V1cover_web-orvb0fhg506ba7og5u08yzzdsgkccpe122qwafxagg.jpg" width="1690px" height="500px">
  <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
    <h1 align="center">Cooking World</h1>
    <h1 align="center">ทุกมื้อให้เราดูแลคุณ</h1>   
    <!-- <h1 align="center">Clear Fridge</h1>
    <h1 align="center">ระบบแนะนำเมนูอาหาร</h1>  
    <h1 align="center">จากวันหมดอายุ</h1>   -->
     <ul class="nav nav-pills nav-stacked">
     <li><a href="index.php" class="text-white">หน้าหลัก</a></li>
     <li><a href="register_system/login.php" class="text-white">จัดการสูตรอาหาร</a></li>
     <li><a href="ประเภทอาหาร.php" class="text-white">จัดการประเภทอาหาร</a></li>
     <li><a href="วัตถุดิบ.php" class="text-white">จัดการวัตถุดิบ</a></li>
     <li class="active"><a href="วิธีการ.php" class="text-white"><U>จัดการวิธีการ</U></a></li>
     <!-- <li><a href="วัตถุดิบทดแทน.php" class="text-white">จัดการวัตถุดิบทดแทน</a></li> -->
     <li><a href="ผู้ดูแลระบบ.php" class="text-white">จัดการข้อมูลผู้ดูแลระบบ</a></li>
     <li><a href="member.php" class="text-white">จัดการข้อมูลสมาชิก</a></li>
     </ul><br>
    
     <form action="" method="get">
      <label>ค้นหาเมนูอาหาร</label>
      <div class="input-group" class="text-dark" bgcolor="#FF3366">
        <input type="text"  SIZE="42" placeholder="ค้นหาจากชื่อเมนู,วัตถุดิบ,ประเภทอาหาร,นานาชาติ,สุขภาพ/ลดน้ำหนัก,เบเกอรี่ และเครื่องดื่ม" name="search1">
        <button name="search" value="ค้นหา" class="btn btn-sm btn-primary">ค้นหา</button>
    </form>
    </div>
    </div>

      <?php
    if (isset($_REQUEST['search']) && $_REQUEST['search'] == "ค้นหา"){
        $file=$_REQUEST['search1'];
        include "../project2/$file/home.php";
    }
    ?>

      <!-- </ul><br>
      <div class="input-group" class="text-dark">
        <form action="" method="GET">   
        <label>ค้นหาเมนูอาหาร</label>
        <input type="text" placeholder="กรอกชื่อเมนูอาหาร" name="search" >
        <input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary" >
      </form>
      </div>
      </div> -->

<h3 align="center"><font color=green>🥘 วิธีการทำ <button class="btn btn-success"><a href="insertวิธีการ.php" class="text-white"> เพิ่ม </a> </button></font></h3>
<meta charset="UTF-8">
<?php


//1. เชื่อมต่อ database: 
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM วิธีการทำ ORDER BY ชื่อวิธีการทำ  asc" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
 echo "<table style='border: 2px solid red;' table border=1 align='center' width='300' cellspacing=0 cellpading=0>";

while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["ชื่อวิธีการทำ"] .  "</td> "; 
;
  
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>

<body>
<br>
    <div class="col-lg-9">
    <div class="container" class="col-md-8">
     <form method="post">           
      <table>
        <h4><font color="blue"><B>🥘 วิธีการทำ </B></h4></FONT>
          <p><font color="blue"><a href="เมนูต้ม.html">เมนูต้ม</p></th></FONT> 
          <p><font color="blue"><a href="เมนูทอด.html">เมนูทอด</p></th></FONT>
          <p><font color="blue"><a href="เมนูนึ่ง.html">เมนูนึ่ง</p></th></FONT>
          <p><font color="blue"><a href="เมนูผัด.html">เมนูผัด</p></th></FONT>
          <p><font color="blue"><a href="เมนูยำ.html">เมนูยำ</p></th></FONT>
          <p><font color="blue"><a href="เมนูย่าง.html"> เมนูย่าง</p></th></FONT>
          <p><font color="blue"><a href="เมนูหม้อหุงข้าว.html">เมนูหม้อหุงข้าว</p></th></FONT>
          <p><font color="blue"><a href="เมนูหม้ออบลมร้อน.html">เมนูหม้ออบลมร้อน</p></th></FONT>
          <p><font color="blue"><a href="เมนูอบ.html">เมนูอบ</p></th></FONT>
          <p><font color="blue"><a href="เมนูไมโครเวฟ.html">เมนูไมโครเวฟ</p></th></FONT>
      </table>
      <br>
                <tr>
                <td><button type="button" class="btn btn-outline-info"> <a href="วัตถุดิบ.php" class="text-white"> ย้อนกลับ </a> </button> </td>
                <td><button class="btn btn-info"> <a href="index.php" class="text-white">หน้าหลัก</a> </button> </td>
                <td><button type="button" class="btn btn-outline-info"> <a href="ผู้ดูแลระบบ.php" class="text-white"> ถัดไป </a> </button> </td>
                </tr>
            

</table>
</body>
</html>