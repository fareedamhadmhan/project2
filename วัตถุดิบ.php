<!DOCTYPE html>
<html lang="en">    
  <head>
    <title>วิธีการ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css">
    <href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>


    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 10700px}
    
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
     <li  class="active"><a href="วัตถุดิบ.php" class="text-white"><U>จัดการวัตถุดิบ</U></a></li>
     <li><a href="วิธีการ.php" class="text-white">จัดการวิธีการ</a></li>
     <!-- <li><a href="วัตถุดิบทดแทน.php" class="text-white">จัดการวัตถุดิบทดแทน</a></li> -->
     <li><a href="ผู้ดูแลระบบ.php" class="text-white">จัดการข้อมูลผู้ดูแลระบบ</a></li>
     <li><a href="member.php" class="text-white">จัดการข้อมูลสมาชิก</a></li>       
     </ul><br>
     
     </ul><br>
      <form action="" method="get">
      <label>ค้นหาเมนูอาหาร</label>
      <div class="input-group" class="text-dark" bgcolor="#FF3366">
        <input type="text"  SIZE="35" placeholder="ค้นหาจากชื่อเมนู,วัตถุดิบ,ประเภทอาหาร,วันเทศกาล/วันสำคัญ,นานาชาติ,ภูมิภาคอาหาร" name="search1">
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


<html>
<title>จัดการวัตถุดิบ</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 
</head>
<body>
<!-- <h3 align="center"><font color=green>🧀วัตถุดิบ <button class="btn btn-success"><a href="insertวัตถุดิบ.php" class="text-white"> เพิ่ม </a> </button></font></h3>  -->
<h3 align="center"><font color=green>🧀วัตถุดิบ </font></h3>
<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM  material ORDER BY material_name asc" or die("Error:" . mysqli_error($con)); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
echo "<table style='border: 0px ' table border=1 align='center' width='300' cellspacing=0 cellpading=0>";
// //หัวข้อตาราง
// echo "<tr align='center' bgcolor='#CCCCCC'><td>วัตถุดิบ</td><td>Uername</td><td>ชื่อ</td><td>นามสกุล</td><td>อีเมล์</td><td>แก้ไข</td><td>ลบ</td></tr>";
while($row = mysqli_fetch_array($result)) { 
  $mn = $row["material_name"];
  echo "<tr>";
  echo "<td>" .$mn ."</td> "; 
  echo "<td>&nbsp;&nbsp;&nbsp;<a href='$mn.html'>Select</a></td>";
  // echo "<td>" .$row["material_name"] .  "</td> "; 
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>
<body>

    <!-- <div class="col-lg-9">
    <div class="container" class="col-md-8">
     <form method="post">           
      <table>
        <h4 ><font color="blue"><B>🧀 ดูรายการวัตุดิบ</B></h4></FONT>
        <tr>
            <p><font color="blue"><a href="ขนมปังปิง.html">ขนมปังปิง</p></th></FONT>  -->
            <!-- <p><font color="blue"><a href="เมนูอะโวคาโด.html">เมนูอะโวคาโด</p></th></FONT>  -->
            <!-- <p><font color="blue"><a href="เมนูกุ้ง.html">กุ้ง</p></th></FONT> 
            <p><font color="blue"><a href="เมนูชีส.html">ชีส</p></th></FONT> 
            <p><font color="blue"><a href="ปลา.html">ปลา</p></th></FONT> 
            <p><font color="blue"><a href="เมนูปลาหมึก.html">ปลาหมึก</p></th></FONT> 
          </tr>
          <tr>
            <p><font color="blue"><a href="เมนูปู.html">ปู</p></th></FONT> 
            <p><font color="blue"><a href="เมนูผลไม้.html">ผลไม้</p></th></FONT> 
            <p><font color="blue"><a href="เมนูผัก.html">ผัก</p></th></FONT> 
            <p><font color="blue"><a href="เมนูสามชั้น.html">สามชั้น</p></th></FONT> 
            <p><font color="blue"><a href="เมนูหมู.html">หมู</p></th></FONT> 
          </tr>
          <tr>  
            <p><font color="blue"><a href="เมนูหอย.html">หอย</p></th></FONT>
            <p><font color="blue"><a href="เมนูอกไก่.html">อกไก่</p></th></FONT> 
            <p><font color="blue"><a href="เมนูอาหารทะเล.html">อาหารทะเล</p></th></FONT> 
            <p><font color="blue"><a href="เมนูเต้าหู้.html">เต้าหู้</p></th></FONT> 
            <p><font color="blue"><a href="เมนูเนื้อวัว.html">เนื้อวัว</p></th></FONT>
          </tr>
          <tr>
            <p><font color="blue"><a href="เมนูเป็ด.html">เป็ด</p></th></FONT> 
            <p><font color="blue"><a href="เมนูเส้น.html">เส้น</p></th></FONT> 
            <p><font color="blue"><a href="เมนูเห็ด.html">เห็ด</p></th></FONT> 
            <p><font color="blue"><a href="เมนูแซลมอน.html">แซลมอน</p></th></FONT> 
            <p><font color="blue"><a href="เมนูไก่.html">ไก่</p></th></FONT> 
          </tr>
          <tr>    
            <p><font color="blue"><a href="เมนูไข่.html">ไข่</p></th></FONT> 
            <p><font color="blue"><a href="เมนูไข่เค็ม.html">ไข่เค็ม</p></th></FONT>  
            <p><font color="blue"><a href="เมนูไข่.html">.ใส้กรอก</p></th></FONT> 
            <p><font color="blue"><a href="เมนูไข่เค็ม.html">ผัก</p></th></FONT>
          </tr>    
          <tr><td><br></td></tr>
       </table> -->


       
          <!--  <table>
            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0">  
            <br><h3 align="center"> <font color="blue"><B>เมนูอาหาร ตามวัตถุดิบ</B></h3></FONT>
            <h4><FONT SIZE="4"><font color="red"><B><Blink><button type="button" class="btn btn-outline-info">➦ เมนูหมู </button></Blink></B></FONT></h4>
            <caption align="top"><U> <font color="blue">เมนูหมูผัด คือ อาหารประเภทหมูที่ใช้เทคนิคการทำอาหาร ด้วยวิธีการผัด ซึ่งเป็นวิธีทำอาหารหลักๆ เมนูหมูผัดมากมายรายละเอียด ดังนี้</U></caption><br></FONT>
        
                <th scope="row"><p><img src="img/หมูผัดพริกไทยอ่อน.jpg" width="230" height="160" alt="หมูผัดพริกไทยอ่อน" /></p>
                <p align="center">หมูผัดพริกไทยอ่อน</p></th>
                <th scope="row"><p><img src="img/ผัดเปรี้ยวหวานหมู.jpg" width="230" height="160" alt="ผัดเปรี้ยวหวานหมู" /></p>
                <p align="center">ผัดเปรี้ยวหวานหมู</p></th>
                <th scope="row"><p><img src="img/ผัดกะเพราหมู.jpg" width="230" height="160" alt="ผัดกะเพราหมู" /></p>
                <p align="center">ผัดกะเพราหมู</p></th>
                <tr>
                <th scope="row"><p><img src="img/หมูผัดขิงกับข้าวโพด.jpg" width="230" height="160" alt="หมูผัดขิงกับข้าวโพด" /></p>
                <p align="center">หมูผัดขิงกับข้าวโพด</p></th>
                <th scope="row"><p><img src="img/ผัดแขนงหมูสับ.jpg" width="230" height="160" alt="ผัดแขนงหมูสับ" /></p>
                <p align="center">ผัดแขนงหมูสับ</p></th>
                <th scope="row"><p><img src="img/	หมูผัดพริกหยวก.jpg" width="230" height="160" alt="หมูผัดพริกหยวก" /></p>
                <p align="center">	หมูผัดพริกหยวก</p></th>
                </tr>
                </table>
           
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูแกงหมู คือ อาหารประเภทแกงที่มีหมูเป็นส่วนประกอบ เป็นอาหารประเภทน้ำ สูตรอาหาร เมนูแกงจากหมู มีมากมายหลากหลายสูตรอาหาร ดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/แกงอ่อมหมู.jpg" width="230" height="160" alt="แกงอ่อมหมู" /></p>
                <p align="center">แกงอ่อมหมู</p></th>
                <th scope="row"><p><img src="img/ต้มจืดมะระซี่โครงหมู.jpg" width="230" height="160" alt="ต้มจืดมะระซี่โครงหมู" /></p>
                <p align="center">ต้มจืดมะระซี่โครงหมู</p></th>
                <th scope="row"><p><img src="img/แกงป่าหมู.png" width="230" height="160" alt="แกงป่าหมู" /></p>
                <p align="center">แกงป่าหมู</p></th>
                <tr>
               <th scope="row"><p><img src="img/ขาหมูพะโล้.jpg" width="230" height="160" alt="ขาหมูพะโล้ " /></p>
                <p align="center">ขาหมูพะโล้ </p></th>
                <th scope="row"><p><img src="img/แกงจืดเต้าหู้หมูสับ.jpg" width="230" height="160" alt="แกงจืดเต้าหู้หมูสับ " /></p>
                <p align="center">แกงจืดเต้าหู้หมูสับ </p></th>
                <th scope="row"><p><img src="img/กระเพาะหมูตุ๋น.png" width="230" height="160" alt="กระเพาะหมูตุ๋น" /></p>
                <p align="center">กระเพาะหมูตุ๋น</p></th>
              </tr>
              </table>
              
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูหมูทอด คือ อาหารทอดจากหมู สูตรอาหาร เมนูทอดจากหมู มีมากมายหลากหลายสูตรอาหาร ดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/หมูทอดกะปิ.jpg" width="230" height="160" alt="หมูทอดกะปิ" /></p>
                <p align="center">หมูทอดกะปิ</p></th>
                <th scope="row"><p><img src="img/พริกหยวกหมูสับ.jpg" width="230" height="160" alt="พริกหยวกหมูสับ" /></p>
                <p align="center">พริกหยวกหมูสับ</p></th>
                <th scope="row"><p><img src="img/ไส้อ่อนทอดกระเทียมพริกไทย.jpg" width="230" height="160" alt="ไส้อ่อนทอดกระเทียมพริกไทย" /></p>
                <p align="center">ไส้อ่อนทอดกระเทียมพริกไทย</p></th>
                <tr>
               <th scope="row"><p><img src="img/ไส้อ่อนผัดพริกเกลือ.jpg" width="230" height="160" alt="ไส้อ่อนผัดพริกเกลือ" /></p>
                <p align="center">ไส้อ่อนผัดพริกเกลือ</p></th>
                <th scope="row"><p><img src="img/หมูโสร่ง.jpg" width="230" height="160" alt="หมูโสร่ง" /></p>
                <p align="center">หมูโสร่ง</p></th>
                <th scope="row"><p><img src="img/หมูทอด.jpg" width="230" height="160" alt="หมูทอด" /></p>
                <p align="center">หมูทอด</p></th>
              </tr>
              </table>

              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูยำหมู คือ อาหารประเภทยำที่มีเนื้อหมู สูตรอาหาร เมนูยำที่มีเนื้อหมูมีอะไรบ้าง</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ยำหมูยอ.jpg" width="230" height="160" alt="ยำหมูยอ" /></p>
                <p align="center">ยำหมูยอ</p></th>
                <th scope="row"><p><img src="img/พันหอม.jpg" width="230" height="160" alt="พันหอม" /></p>
                <p align="center">พันหอม</p></th>
                <th scope="row"><p><img src="img/บั๋นหมี่.jpg" width="230" height="160" alt="บั๋นหมี่" /></p>
                <p align="center">บั๋นหมี่</p></th> 
              </tr>
              </table>

              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูน้ำพริกจากหมู คือ น้ำพริกที่มีหมูเป็นส่วนประกอบ น้ำพริกหมูมีอะไรบ้าง สูตรอาหาร เมนูน้ำพริกจากหมู มีมากมายหลากหลายสูตรอาหาร ดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/น้ำพริกหมูกรอบ.png" width="230" height="160" alt="น้ำพริกหมูกรอบ" /></p>
                <p align="center">น้ำพริกหมูกรอบ</p></th>
                <th scope="row"><p><img src="img/น้ำพริกกากหมู.jpg" width="230" height="160" alt="น้ำพริกกากหมู" /></p>
                <p align="center">น้ำพริกกากหมู</p></th>
                <th scope="row"><p><img src="img/กะปิหลน.jpg" width="230" height="160" alt="กะปิหลน" /></p>
                <p align="center">กะปิหลน</p></th>  
              </tr>
              </table>
                  
            <br>
            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0">  
            <h4><FONT SIZE="4"><font color="red"><B><Blink><button type="button" class="btn btn-outline-info">➦ เมนูไก่ </button></Blink></B></FONT></h4>
            <caption align="top"><U> <font color="blue">เมนูแกงไก่ สูตรอาหารประเภทแกง</U></caption><br></FONT>  
           
                <th scope="row"><p><img src="img/แกงมัสมั่นไก่.jpg" width="230" height="160" alt="แกงมัสมั่นไก่" /></p>
                <p align="center">แกงมัสมั่นไก่</p></th>
                <th scope="row"><p><img src="img/แกงเขียวหวานไก่.jpg" width="230" height="160" alt="	แกงเขียวหวานไก่" /></p>
                <p align="center">แกงเขียวหวานไก่</p></th>
                <th scope="row"><p><img src="img/ไก่ต้มระกำ.jpg" width="230" height="160" alt="ไก่ต้มระกำ" /></p>
                <p align="center">ไก่ต้มระกำ</p></th>
            </tr>
            <tr>
                <th scope="row"><p><img src="img/แกงคั่วฟักไก่.png" width="230" height="160" alt="แกงคั่วฟักไก่" /></p>
                <p align="center">แกงคั่วฟักไก่</p></th>
                <th scope="row"><p><img src="img/ซุปตีนไก่.jpg" width="230" height="160" alt="ซุปตีนไก่" /></p>
                <p align="center">ซุปตีนไก่</p></th>
                <th scope="row"><p><img src="img/แกงเผ็ดกล้วยดิบ.jpg" width="230" height="160" alt="แกงเผ็ดกล้วยดิบ" /></p>
                <p align="center">แกงเผ็ดกล้วยดิบ</p></th>
          </tr>
           </table>

           <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูไก่ผัด สูตรอาหารต่างๆประเภทผัด</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ไก่ผัดเม็ดมะม่วงหิมพานต์.jpg" width="230" height="160" alt="ไก่ผัดเม็ดมะม่วงหิมพานต์" /></p>
                <p align="center">ไก่ผัดเม็ดมะม่วงหิมพานต์</p></th>
                <th scope="row"><p><img src="img/ไก่ผัดขิง.jpg" width="230" height="160" alt="ไก่ผัดขิง" /></p>
                <p align="center">ไก่ผัดขิง</p></th>
                <th scope="row"><p><img src="img/ไก่ผัดเปรี้ยวหวาน.jpg" width="230" height="160" alt="ไก่ผัดเปรี้ยวหวาน" /></p>
                <p align="center">ไก่ผัดเปรี้ยวหวาน</p></th>
                <tr>
               <th scope="row"><p><img src="img/ผัดพริกแกงไก่.jpg" width="230" height="160" alt="ผัดพริกแกงไก่" /></p>
                <p align="center">ผัดพริกแกงไก่</p></th>
                <th scope="row"><p><img src="img/ผัดกระเฉดไก่.png" width="230" height="160" alt="ผัดกระเฉดไก่" /></p>
                <p align="center">ผัดกระเฉดไก่</p></th>
                <th scope="row"><p><img src="img/ไก่ผัดแห้ว.jpg" width="230" height="160" alt="ไก่ผัดแห้ว" /></p>
                <p align="center">ไก่ผัดแห้ว</p></th>
              </tr>
              </table>

            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูไก่ทอด สูตรอาหารต่างๆประเภททอด</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ปีกไก่ยัดไส้.jpg" width="230" height="160" alt="ปีกไก่ยัดไส้" /></p>
                <p align="center">ปีกไก่ยัดไส้</p></th>
                <th scope="row"><p><img src="img/ไก่ทอดขิง.png" width="230" height="160" alt="ไก่ทอดขิง" /></p>
                <p align="center">ไก่ทอดขิง</p></th>
                <th scope="row"><p><img src="img/ปีกไก่ทอดน้ำแดง.jpg" width="230" height="160" alt="ปีกไก่ทอดน้ำแดง" /></p>
                <p align="center">ปีกไก่ทอดน้ำแดง</p></th>
                <tr>
               <th scope="row"><p><img src="img/ไก่ทอดคาราเกะ.jpg" width="230" height="160" alt="ไก่ทอดคาราเกะ" /></p>
                <p align="center">ไก่ทอดคาราเกะ</p></th>
                <th scope="row"><p><img src="img/ไก่ทอดบอนชอน.png" width="230" height="160" alt="ไก่ทอดบอนชอน" /></p>
                <p align="center">ไก่ทอดบอนชอน</p></th>
                <th scope="row"><p><img src="img/ปีกไก่คั่วพริกเกลือ.jpg" width="230" height="160" alt="ปีกไก่คั่วพริกเกลือ" /></p>
                <p align="center">ปีกไก่คั่วพริกเกลือ</p></th>
              </tr>
              </table>

           <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูยำไก่ สูตรอาหารประเภทยำ</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ไก่ผัดเส้นบุกต้มยำแห้ง.png" width="230" height="160" alt="ไก่ผัดเส้นบุกต้มยำแห้ง" /></p>
                <p align="center">ไก่ผัดเส้นบุกต้มยำแห้ง</p></th>
                <th scope="row"><p><img src="img/ยำจิ้นไก่.jpg" width="230" height="160" alt=" ยำจิ้นไก่" /></p>
                <p align="center"> ยำจิ้นไก่</p></th>
                <th scope="row"><p><img src="img/ลาบไก่เส้นบุก.png" width="230" height="160" alt="ลาบไก่เส้นบุก" /></p>
                <p align="center">ลาบไก่เส้นบุก</p></th>
                <tr>
              </table>



            <br>
            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0">
            <h4><FONT SIZE="4"><font color="red"><B><Blink><button type="button" class="btn btn-outline-info">➦ เมนูกุ้ง </button></Blink></B></FONT></h4>  
             <caption align="top"><U> <font color="blue"> สูตรอาหารแสนอร่อย เมนูกุ้ง รวมสูตรอาหารตั้งแต่ เมนูต้ม เมนูผัด เมนูแกง เมนูทอด หรือ เมนูปิ้งย่าง มีดังนี้ </U></caption><br></FONT>
              <tr>
                <th scope="row"><p><img src="img/แกงส้มชะอมไข่.jpg" width="230" height="160" alt="แกงส้มชะอมกุ้ง" /></p>
                <p align="center">แกงส้มชะอมกุ้ง </p></th>
                <th scope="row"><p><img src="img/กุ้งราดกระเทียมพริกไทย.png" width="230" height="160" alt="กุ้งราดกระเทียมพริกไทย" /></p>
                <p align="center">กุ้งราดกระเทียมพริกไทย </p></th>
                <th scope="row"><p><img src="img/กุ้งผัดไข่.jpg" width="230" height="160" alt="กุ้งผัดไข่" /></p>
                <p align="center">กุ้งผัดไข่</p></th>
             </tr>
            <tr>
                <th scope="row"><p><img src="img/ต้มยำกุ้ง.jpg" width="230" height="160" alt="ต้มยำกุ้ง" /></p>
                <p align="center">ต้มยำกุ้ง</p></th>
                <th scope="row"><p><img src="img/น้ำพริกหยำ.jpg" width="230" height="160" alt="น้ำพริกหยำ" /></p>
                <p align="center">น้ำพริกหยำ </p></th>
                <th scope="row"><p><img src="img/ยำดอกขจรกุ้งสด.jpg" width="230" height="160" alt="ยำดอกขจรกุ้งสด" /></p>
                <p align="center">ยำดอกขจรกุ้งสด </p></th>
            </tr>
            <tr>
                <th scope="row"><p><img src="img/กุ้งมังกรราดซอสข่า.png" width="230" height="160" alt="กุ้งมังกรราดซอสข่า" /></p>
                <p align="center"> กุ้งมังกรราดซอสข่า</p></th>
                <th scope="row"><p><img src="img/แกงเลียงกุ้งสด.jpg" width="230" height="160" alt="แกงเลียงกุ้งสด" /></p>
                <p align="center"> แกงเลียงกุ้งสด</p></th>
                <th scope="row"><p><img src="img/กุ้งอบวุ้นเส้น.jpg" width="230" height="160" alt="กุ้งอบวุ้นเส้น" /></p>
                <p align="center">กุ้งอบวุ้นเส้น</p></th>
            </tr>
              
            <br>
            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0">  
            <h4><FONT SIZE="4"><font color="red"><B><Blink><button type="button" class="btn btn-outline-info">➦ เมนูไข่ </button></Blink></B></FONT></h4>
             <caption align="top"><U> <font color="blue"> เมนูไข่ทอด สูตรอาหารประเภทไข่ ที่ใช้การทอด มีดังนี้ </U></caption><br></FONT>
              <tr>
                <th scope="row"><p><img src="img/ไข่ดาวลูกเขย.jpg" width="230" height="160" alt="ไข่ดาวลูกเขย" /></p>
                <p align="center">ไข่ดาวลูกเขย</p></th>
                <th scope="row"><p><img src="img/ไข่กระทะ.jpg" width="230" height="160" alt="ไข่กระทะ" /></p>
                <p align="center">ไข่กระทะ</p></th>
                <th scope="row"><p><img src="img/ไข่ลูกเขย.jpg" width="230" height="160" alt="ไข่ลูกเขย" /></p>
                <p align="center">ไข่ลูกเขย</p></th>
              </tr>
              </table>
                
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูแกงไข่ สูตรอาหารประเภทแกงที่มีไข่เป็นส่วนประกอบ มีอะไรบ้าง</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ไข่พะโล้.jpg" width="230" height="160" alt="ไข่พะโล้" /></p>
                <p align="center">ไข่พะโล้</p></th>
                <th scope="row"><p><img src="img/แกงจืดไข่ม้วน.jpg" width="230" height="160" alt="แกงจืดไข่ม้วน" /></p>
                <p align="center">แกงจืดไข่ม้วน</p></th>
                <th scope="row"><p><img src="img/แกงส้มชะอมไข่1.jpg" width="230" height="160" alt="แกงส้มชะอมไข่" /></p>
                <p align="center">แกงส้มชะอมไข่</p></th>
              <tr>
               <th scope="row"><p><img src="img/ต้มยำไข่เจียว.jpg" width="230" height="160" alt="ต้มยำไข่เจียว" /></p>
                <p align="center">ต้มยำไข่เจียว</p></th>
                <th scope="row"><p><img src="img/แกงจืดไข่น้ำ 2 สี.jpg" width="230" height="160" alt="แกงจืดไข่น้ำ 2 สี" /></p>
                <p align="center">แกงจืดไข่น้ำ 2 สี</p></th>
                <th scope="row"><p><img src="img/ซุปไข่.jpg" width="230" height="160" alt="ซุปไข่" /></p>
                <p align="center">ซุปไข่</p></th>
              </tr>
              </table>

              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูไข่ผัด อาหารประเภทผัดที่มีไข่เป็นส่วนประกอบ มีดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/เต้าหู้หน้าไข่เห็ดหอม.jpg" width="230" height="160" alt="เต้าหู้หน้าไข่เห็ดหอม" /></p>
                <p align="center">เต้าหู้หน้าไข่เห็ดหอม</p></th>
                <th scope="row"><p><img src="img/แกงไข่ไล่ทุ่ง.jpg" width="230" height="160" alt="แกงไข่ไล่ทุ่ง" /></p>
                <p align="center">แกงไข่ไล่ทุ่ง</p></th>
                <th scope="row"><p><img src="img/มะระผัดไข่เค็ม.jpg" width="230" height="160" alt="มะระผัดไข่เค็ม" /></p>
                <p align="center">มะระผัดไข่เค็ม</p></th>
              <tr>
               <th scope="row"><p><img src="img/ข้าวผัดไข่.jpg" width="230" height="160" alt="ข้าวผัดไข่" /></p>
                <p align="center">ข้าวผัดไข่</p></th>
                <th scope="row"><p><img src="img/ไข่ราดซอส.jpg" width="230" height="160" alt="ไข่ราดซอส" /></p>
                <p align="center">ไข่ราดซอส</p></th>
                <th scope="row"><p><img src="img/ดอกขจรผัดไข่กุ้งสด.png" width="230" height="160" alt="ดอกขจรผัดไข่กุ้งสด" /></p>
                <p align="center">ดอกขจรผัดไข่กุ้งสด</p></th>
              </tr>
              </table>

              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูยำไข่ อาหารประเภทยำที่มีไข่เป็นส่วนประกอบ มีดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ไข่ต้มทรงเครื่อง.jpg" width="230" height="160" alt="ไข่ต้มทรงเครื่อง" /></p>
                <p align="center">ไข่ต้มทรงเครื่อง</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/พันหอม.jpg" width="230" height="160" alt="พันหอม" /></p>
                <p align="center">พันหอม</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/ยำไข่ดาว.jpg" width="230" height="160" alt="ยำไข่ดาว" /></p>
                <p align="center">ยำไข่ดาว</FONT></p></th></FONT>
              <tr>
               <th scope="row"><p><img src="img/ก้อยไข่มดแดง.jpg" width="230" height="160" alt="ก้อยไข่มดแดง" /></p>
                <p align="center">ก้อยไข่มดแดง</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/ส้มตำไข่ฟู.png" width="230" height="160" alt="ส้มตำไข่ฟู" /></p>
                <p align="center">ส้มตำไข่ฟู</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/น้ำพริกไข่เค็ม.jpg" width="230" height="160" alt="น้ำพริกไข่เค็ม" /></p>
                <p align="center">น้ำพริกไข่เค็ม</FONT></p></th></FONT>
              </tr>
              </table>

              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูไข่นึ่ง สูตรอาหารประเภทนึ่งที่มีไข่เป็นส่วนประกอบ มีดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/หมูสับนึ่งไข่เค็ม.jpg" width="230" height="160" alt="หมูสับนึ่งไข่เค็ม" /></p>
                <p align="center">หมูสับนึ่งไข่เค็ม</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/ไข่ตุ๋นนมสด.jpg" width="230" height="160" alt="ไข่ตุ๋นนมสด" /></p>
                <p align="center">ไข่ตุ๋นนมสด</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/ไข่ตุ๋นทรงเครื่อง.png" width="230" height="160" alt="ไข่ตุ๋นทรงเครื่อง" /></p>
                <p align="center">ไข่ตุ๋นทรงเครื่อง</FONT></p></th></FONT>
              <tr>
              </table>

              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">ขนมไข่ สูตรอาหารประเภทขนมหวานที่มีไข่เป็นส่วนประกอบ มีดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ทองเอก.jpg" width="230" height="160" alt="ทองเอก" /></p>
                <p align="center">ทองเอก</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/ขนมทองหยอด.jpg" width="230" height="160" alt="ขนมทองหยอด" /></p>
                <p align="center">ขนมทองหยอด</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/ขนมทองหยิบ.jpg" width="230" height="160" alt="ขนมทองหยิบ" /></p>
                <p align="center">ขนมทองหยิบ</FONT></p></th></FONT>
              </table>
  
            <br>
            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0">  
            <h4><FONT SIZE="4"><font color="red"><B><Blink><button type="button" class="btn btn-outline-info">➦ เมนูปลา </button></Blink></B></FONT></h4>
            <caption align="top"><U> <font color="blue">เมนูปลาผัด สูตรอาหารประเภทผัดจากปลา มีดังนี้</U></caption><br></FONT>
            <tr>
                <th scope="row"><p><img src="img/ปลากะพงผัดสะตอ.jpg" width="230" height="160" alt="ปลากะพงผัดสะตอ" /></p>
                <p align="center">ปลากะพงผัดสะตอ</p></th>
                <th scope="row"><p><img src="img/ผัดชะอมปลาชอนทอดกรอบ.jpg" width="230" height="160" alt="ผัดชะอมปลาชอนทอดกรอบ" /></p>
                <p align="center">ผัดชะอมปลาชอนทอดกรอบ</p></th>
                <th scope="row"><p><img src="img/ปลาช่อนจู่ขิง.jpg" width="230" height="160" alt="ปลาช่อนจู่ขิง" /></p>
                <p align="center">ปลาช่อนจู่ขิง</p></th>
             </tr>
            <tr>
                <th scope="row"><p><img src="img/ปลาหิมะผัดผงกะหรี่.png" width="230" height="160" alt="ปลาหิมะผัดผงกะหรี่" /></p>
                <p align="center">ปลาหิมะผัดผงกะหรี่</p></th>
                <th scope="row"><p><img src="img/ผัดเผ็ดปลาดุก.jpg" width="230" height="160" alt="ผัดเผ็ดปลาดุก" /></p>
                <p align="center">ผัดเผ็ดปลาดุก</p></th>
                <th scope="row"><p><img src="img/ปลาดุกผัดพริกสด.jpg" width="230" height="160" alt="ปลาดุกผัดพริกสด" /></p>
                <p align="center">ปลาดุกผัดพริกสด</p></th>
             </tr>
            </table>

            </table>
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูแกงปลา สูตรอาหารประเภทแกงจากปลา มีดังนี้ </U></caption><br></FONT>
                <th scope="row"><p><img src="img/แกงกะทิสายบัวปลาทู.jpg" width="230" height="160" alt="แกงกะทิสายบัวปลาทู" /></p>
                <p align="center">แกงกะทิสายบัวปลาทู</p></th>
                <th scope="row"><p><img src="img/ปลาทูต้มขมิ้น.jpg" width="230" height="160" alt="ปลาทูต้มขมิ้น" /></p>
                <p align="center">ปลาทูต้มขมิ้น </p></th>
                <th scope="row"><p><img src="img/ต้มยำปลาช่อนใบมะขามอ่อน.jpg" width="230" height="160" alt="ต้มยำปลาช่อนใบมะขามอ่อน" /></p>
                <p align="center">ต้มยำปลาช่อนใบมะขามอ่อน</p></th>
              <tr>
               <th scope="row"><p><img src="img/ต้มยำปลานิล.jpg" width="230" height="160" alt="ต้มยำปลานิล" /></p>
                <p align="center">ต้มยำปลานิล</p></th>
                <th scope="row"><p><img src="img/ข้าวต้มปลามิโซะ.jpg" width="230" height="160" alt="ข้าวต้มปลามิโซะ" /></p>
                <p align="center">ข้าวต้มปลามิโซะ</p></th>
                <th scope="row"><p><img src="img/แกงไตปลา.jpg" width="230" height="160" alt="แกงไตปลา" /></p>
                <p align="center">แกงไตปลา</p></th>
              </tr>
              </table>

              </table>
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูปลาทอด สูตรอาหารประเภททอดจากปลา มีดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ปลานิลทอดกระเทียมพริกไทย.png" width="230" height="160" alt="ปลานิลทอดกระเทียมพริกไทย" /></p>
                <p align="center">ปลานิลทอดกระเทียมพริกไทย</p></th>
                <th scope="row"><p><img src="img/ปลาราดพริก.jpg" width="230" height="160" alt="ปลาราดพริก" /></p>
                <p align="center">ปลาราดพริก</p></th>
                <th scope="row"><p><img src="img/ปลาช่อนลุยสวน.jpg" width="230" height="160" alt="ปลาช่อนลุยสวน" /></p>
                <p align="center">ปลาช่อนลุยสวน</p></th>
              <tr>
               <th scope="row"><p><img src="img/ปลากระพงทอดน้ำปลา.jpg" width="230" height="160" alt="ปลากระพงทอดน้ำปลา" /></p>
                <p align="center">ปลากระพงทอดน้ำปลา</p></th>
                <th scope="row"><p><img src="img/ปลาซาบะย่างซีอิ๋ว.jpg" width="230" height="160" alt="ปลาซาบะย่างซีอิ๋ว" /></p>
                <p align="center">ปลาซาบะย่างซีอิ๋ว</p></th>
                <th scope="row"><p><img src="img/ไข่เจียวทูน่า.jpg" width="230" height="160" alt="ไข่เจียวทูน่า" /></p>
                <p align="center">ไข่เจียวทูน่า</p></th>
              </tr>
              </table>
           
              </table>
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูปลานึ่ง สูตรอาหารประเภทยำจากปลา มีดังนี้ </U></caption><br></FONT>
                <th scope="row"><p><img src="img/ปลาดอลลี่นึ่งมะนาว.jpg" width="230" height="160" alt="ปลาดอลลี่นึ่งมะนาว" /></p>
                <p align="center">ปลาดอลลี่นึ่งมะนาว</p></th>
                <th scope="row"><p><img src="img/ปลากะพงนึ่งมะนาว.jpg" width="230" height="160" alt="ปลากะพงนึ่งมะนาว" /></p>
                <p align="center">ปลากะพงนึ่งมะนาว</p></th>
                <th scope="row"><p><img src="img/ปลาซาบะ ต้มมิโซะ.png" width="230" height="160" alt="ปลาซาบะ ต้มมิโซะ" /></p>
                <p align="center">ปลาซาบะ ต้มมิโซะ</p></th>
              <tr>
               <th scope="row"><p><img src="img/ปลาเก๋าลวกจิ้ม.jpg" width="230" height="160" alt="ปลาเก๋าลวกจิ้ม" /></p>
                <p align="center">ปลาเก๋าลวกจิ้ม</p></th>
                <th scope="row"><p><img src="img/หมกปลาซิว.png" width="230" height="160" alt="หมกปลาซิว" /></p>
                <p align="center">หมกปลาซิว</p></th>
                <th scope="row"><p><img src="img/ห่อหมกปลามะพร้าวอ่อน.png" width="230" height="160" alt="ห่อหมกปลามะพร้าวอ่อน" /></p>
                <p align="center">ห่อหมกปลามะพร้าวอ่อน</p></th>
              </tr>
              </table>

              </table>
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูยำปลา สูตรอาหารประเภทยำจากปลา มีดังนี้ </U></caption><br></FONT>
                <th scope="row"><p><img src="img/ปลานิลลุยสวน.jpg" width="230" height="160" alt="ปลานิลลุยสวน" /></p>
                <p align="center">ปลานิลลุยสวน</p></th>
                <th scope="row"><p><img src="img/ส้มตำปลาดุกฟู.png" width="230" height="160" alt="ส้มตำปลาดุกฟู" /></p>
                <p align="center">ส้มตำปลาดุกฟู</p></th>
                <th scope="row"><p><img src="img/ปลาดุกฟูคั่วกลิ้ง.jpg" width="230" height="160" alt="ปลาดุกฟูคั่วกลิ้ง" /></p>
                <p align="center">ปลาดุกฟูคั่วกลิ้ง</p></th>
              <tr>
               <th scope="row"><p><img src="img/ลาบปลาบึก.jpg" width="230" height="160" alt="ลาบปลาบึก" /></p>
                <p align="center">ลาบปลาบึก</p></th>
                <th scope="row"><p><img src="img/สะเดาทรงเครื่อง.png" width="230" height="160" alt="สะเดาทรงเครื่อง" /></p>
                <p align="center">สะเดาทรงเครื่อง</p></th>
                <th scope="row"><p><img src="img/ปลากระพงผัดต้มยำแห้ง.jpg" width="230" height="160" alt="ปลากระพงผัดต้มยำแห้ง" /></p>
                <p align="center">ปลากระพงผัดต้มยำแห้ง</p></th>
              </tr>
              </table>

              </table>
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูน้ำพริกจากปลา สูตรอาหารประเภทน้ำพริกที่มีปลา มีดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/น้ำพริกปลาสลิด.jpg" width="230" height="160" alt="น้ำพริกปลาสลิด" /></p>
                <p align="center">น้ำพริกปลาสลิด</p></th>
                <th scope="row"><p><img src="img/น้ำพริกอ่องปลากระป๋อง.png" width="230" height="160" alt="น้ำพริกอ่องปลากระป๋อง" /></p>
                <p align="center">น้ำพริกอ่องปลากระป๋อง</p></th>
                <th scope="row"><p><img src="img/น้ำพริกปลาย่าง.jpg" width="230" height="160" alt="น้ำพริกปลาย่าง" /></p>
                <p align="center">น้ำพริกปลาย่าง</p></th>
              </table>

            <br>
            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0">  
            <h4><FONT SIZE="4"><font color="red"><B><Blink><button type="button" class="btn btn-outline-info">➦ เมนูเนื้อวัว </button></Blink></B></FONT></h4>
             <caption align="top"><U> <font color="blue"> เมนูเนื้อ ( beef recipes ) คือ อาหารที่ใช้เนื้อวัวเป็นวัตถุดิบ สูตรอาหาร เมนูเนื้อวัว ประโยชน์ของเนื้อวัว เนื้อวัวทำอะไรกินได้บ้าง เมนูต้ม เมนูผัด เมนูย่าง เมนูทอด แบบง่ายๆสำหรับคนชอบกินเนื้อ</U></caption><br></FONT>
             <caption align="top"><U> <font color="blue">สูตรอาหาร เมนูเนื้อวัว มีดังนี้</U></caption><br></FONT>
             <tr>
                <th scope="row"><p><img src="img/ต้มแซ่บเนื้อวัว.jpg" width="230" height="160" alt="ต้มแซ่บเนื้อวัว" /></p>
                <p align="center">ต้มแซ่บเนื้อวัว</p></th>
                <th scope="row"><p><img src="img/ผัดเผ็ดเนื้อใบยี่หร่า.jpg" width="230" height="160" alt="ผัดเผ็ดเนื้อใบยี่หร่า" /></p>
                <p align="center">ผัดเผ็ดเนื้อใบยี่หร่า</p></th>
                <th scope="row"><p><img src="img/พุลโกกิ.jpg" width="230" height="160" alt="พุลโกกิ" /></p>
                <p align="center">พุลโกกิ</p></th>
              </tr>
              <tr>
                <th scope="row"><p><img src="img/เนื้อผัดขิงอ่อน.jpg" width="230" height="160" alt="เนื้อผัดขิงอ่อน" /></p>
                <p align="center">เนื้อผัดขิงอ่อน</p></th>
                <th scope="row"><p><img src="img/พะแนงเนื้อ.jpg" width="230" height="160" alt="พะแนงเนื้อ" /></p>
                <p align="center">พะแนงเนื้อ</p></th>
                <th scope="row"><p><img src="img/ชกเล็ก.jpg" width="230" height="160" alt="ชกเล็ก" /></p>
                <p align="center">ชกเล็ก/ลาบเนื้อดิบ</p></t h>
              </tr>
              <tr>
               <th scope="row"><p><img src="img/เนื้อวัวผัดกระเทียม.jpg" width="230" height="160" alt="เนื้อวัวผัดกระเทียม" /></p>
                <p align="center">เนื้อวัวผัดกระเทียม</p></th>
                <th scope="row"><p><img src="img/เนื้อผัดพริกไทยดำ.jpg" width="230" height="160" alt="เนื้อวัวผัดพริกไทยดำ" /></p>
                <p align="center">เนื้อวัวผัดพริกไทยดำ</p></th>
                <th scope="row"><p><img src="img/ผัดกะเพราเนื้อ.jpg" width="230" height="160" alt="ผัดกะเพราเนื้อ" /></p>
                <p align="center">ผัดกะเพราเนื้อ</p></th>
              </tr>
              </table> -->

             
                <br>
                <table align='center' >
                <tr >
                  <td><button type="button" class="btn btn-outline-info"> <a href="ประเภทอาหาร.php" class="text-white"> ย้อนกลับ </a> </button> </td>
                  <td><button class="btn btn-info"> <a href="index.php" class="text-white">หน้าหลัก</a> </button> </td>
                  <td><button type="button" class="btn btn-outline-info"> <a href="วิธีการ.php" class="text-white"> ถัดไป </a> </button> </td>
                </tr>
            
            </table>
        </form>
    </div>
