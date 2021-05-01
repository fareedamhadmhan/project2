<!DOCTYPE html>
<html lang="en">    
  <head>
    <title>ประเภทอาหาร</title>
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
     <li class="active" ><a href="ประเภทอาหาร.php" class="text-white"><U>จัดการประเภทอาหาร</U></a></li>
     <li><a href="วัตถุดิบ.php" class="text-white">จัดการวัตถุดิบ</a></li>
     <li><a href="วิธีการ.php" class="text-white">จัดการวิธีการ</a></li>
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
      </div>  -->



<h3 align="center" ><font color=green> 🏳‍🌈 ประเภทอาหาร <button class="btn btn-success"><a href="insertประเภทอาหาร.php" class="text-white"> เพิ่ม </a> </button></font></h3>
<meta charset="UTF-8">
<?php


//1. เชื่อมต่อ database: 
include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM foodtype ORDER BY foodtype_Name asc" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
 echo "<table style='border: 2px solid red;' table border=1 align='center' width='300' cellspacing=0 cellpading=0>";

//  หัวข้อตาราง
// echo "<tr align='center' bgcolor='#CCCCCC'><td><B> <font color=green>🏳‍🌈ประเภทอาหาร</font></B></td>";

while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["foodtype_Name"] .  "</td> "; 
  echo "</tr>";

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
       <!-- <h4> <font color="blue"><B><I>🏳 ดูรายการประเภทอาหาร</I></B></h4></FONT>
        <p><font color="blue"><a href="เมนูน้ำพริก.html">เมนูน้ำพริก&lt;<a href="เมนูกับข้าว.html">&lt;เมนูกับข้าว<a href="เมนูอาหารจีน.html">&lt;&lt;เมนูอาหารจีน&lt;<a href="เมนูอาหารฝรั่ง.html">&lt;เมนูอาหารฝรั่ง&lt;&lt;<a href="เมนูอาหารมังสวิรัติ.html">เมนูอาหารมังสวิรัติ&lt;<a href="เมนูอาหารเหนือ.html">&lt;เมนูอาหารเหนือ&lt;&lt;<a href="เมนูแกง.html">เมนูแกง &lt;&lt; <a href="เมนูกับแกล้ม/อาหารว่าง.html">เมนูกับแกล้ม/อาหารว่าง&lt;&lt;<a href="เมนูก๋วยเตี๋ยว.html">เมนูก๋วยเตี๋ยว &lt;&lt;<a href="เมนูซุป.html">เมนูซุป &lt;&lt;<a href="เมนูสเต็ก.html">เมนูสเต็ก&lt;&lt; <a href="เมนูอาหารจานเดียว.html">เมนูอาหารจานเดียว &lt;&lt;<a href="เมนูอาหารภาคกลาง.html">เมนูอาหารภาคกลาง&lt;&lt; <a href="เมนูอาหารอีสาน.html">เมนูอาหารอีสาน&lt;&lt; <a href="เมนูอาหารเช้า.html">เมนูอาหารเช้า&lt;&lt; <a href="เมนูอาหารใต้.html">เมนูอาหารใต้&lt;&lt; <a href="เมนูอาหารไทย.html">เมนูอาหารไทย &lt;&lt; <a href="เมนูแซนด์วิช.html">เมนูแซนด์วิช </p></th></FONT> 
        <br><br> --> 

        <h4> <font color="blue"><B><I>🏳 ดูรายการประเภทอาหาร</I></B></h4></FONT> 
        <p><font color="blue"><a href="เมนูน้ำพริก.html">เมนูน้ำพริก</p></th></FONT> 
        <p><font color="blue"><a href="เมนูกับข้าว.html">เมนูกับข้าว</p></th></FONT>  
        <p><font color="blue"><a href="เมนูอาหารจีน.html">เมนูอาหารจีน</p></th></FONT> 
        <p><font color="blue"><a href="เมนูอาหารฝรั่ง.html">เมนูอาหารฝรั่ง</p></th></FONT> 
        <p><font color="blue"><a href="เมนูอาหารมังสวิรัติ.html">เมนูอาหารมังสวิรัติ</p></th></FONT> 
        <p><font color="blue"><a href="เมนูอาหารเหนือ.html">เมนูอาหารเหนือ</p></th></FONT> 
        <p><font color="blue"><a href="เมนูแกง.html">เมนูแกง</p></th></FONT> 
        <p><font color="blue"><a href="เมนูกับแกล้ม/อาหารว่าง.html">เมนูกับแกล้ม/อาหารว่าง</p></th></FONT> 
        <p><font color="blue"><a href="เมนูก๋วยเตี๋ยว.html">เมนูก๋วยเตี๋ยว</p></th></FONT>  
        <p><font color="blue"><a href="เมนูซุป.html">เมนูซุป</p></th></FONT> 
        <p><font color="blue"><a href="เมนูสเต็ก.html">เมนูสเต็ก</p></th></FONT>  
        <p><font color="blue"><a href="เมนูอาหารจานเดียว.html">เมนูอาหารจานเดียว</p></th></FONT> 
        <p><font color="blue"><a href="เมนูอาหารภาคกลาง.html">เมนูอาหารภาคกลาง</p></th></FONT>  
        <p><font color="blue"><a href="เมนูอาหารอีสาน.html">เมนูอาหารอีสาน</p></th></FONT> 
        <p><font color="blue"><a href="เมนูอาหารเช้า.html">เมนูอาหารเช้า</p></th></FONT>  
        <p><font color="blue"><a href="เมนูอาหารใต้.html">เมนูอาหารใต้</p></th></FONT> 
        <p><font color="blue"><a href="เมนูอาหารไทย.html">เมนูอาหารไทย</p></th></FONT>  
        <p><font color="blue"><a href="เมนูอาหารใต้.html">เมนูอาหารใต้</p></th></FONT> 
        <p><font color="blue"><a href="เมนูอาหารไทย.html">เมนูอาหารไทย</p></th></FONT> 
        <p><font color="blue"><a href="เมนูแซนด์วิช.html">เมนูแซนด์วิช</p></th></FONT>    
       </table>

     <br>
          <tr>
            <td><button type="button" class="btn btn-outline-info"> <a href="สูตรอาหาร.php" class="text-white"> ย้อนกลับ </a> </button> </td>
            <td><button class="btn btn-info"> <a href="indexhome.php" class="text-white">กลับหน้าหลัก</a></button></td>
            <td><button type="button" class="btn btn-outline-info"><a href="วัตถุดิบ.php"> ถัดไป </a></button></td> 
         </tr>
     <br>
      
      
</body>
</html>