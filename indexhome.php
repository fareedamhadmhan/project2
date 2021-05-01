<?php
    include "connection.php";
 
    $sql = "SELECT * FROM food_recipe ";
    if( isset($_GET['search']) ){
    $manu_name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM food_recipe WHERE manu_name ='$manu_name' ";
   }
    
 ?>
                
<!DOCTYPE html>
<html lang="en">    
  <head>
    <title>Cooking World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css">
    <href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>


    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 15000px}
    
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
     <li class="active"><a href="index.php" class="text-white"><U>หน้าหลัก</U></a></li>
     <li><a href="สูตรอาหาร.php" class="text-white">จัดการสูตรอาหาร</a></li>
     <li><a href="ประเภทอาหาร.php" class="text-white">จัดการประเภทอาหาร</a></li>
     <li><a href="วัตถุดิบ.php" class="text-white">จัดการวัตถุดิบ</a></li>
     <li><a href="วิธีการ.php" class="text-white">จัดการวิธีการ</a></li>
     <!-- <li><a href="วัตถุดิบทดแทน.php" class="text-white">จัดการวัตถุดิบทดแทน</a></li> -->
     <li><a href="ผู้ดูแลระบบ.php" class="text-white">จัดการข้อมูลผู้ดูแลระบบ</a></li>
     <li><a href="member.php" class="text-white">จัดการข้อมูลสมาชิก</a></li>
 
      
      </ul><br>
      <div class="input-group" class="text-dark" bgcolor="#FF3366">
        <form action="" method="GET">   
        <label>ค้นหาเมนูอาหาร</label>
        <input type="text" placeholder="กรอกชื่อเมนูอาหาร" name="search" >
        <input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary" >
      </form>
      </div>
      </div>
     
    <br>
    <div class="col-lg-9">
    <div class="container" class="col-md-8">
     <form method="post">           
       <table>
        <h3 align="center"> <font color="blue"><B>เมนูอาหาร/สูตรอาหาร</B></h3></FONT>
        <h4><FONT SIZE="4"><font color="red"><B><Blink><img src="https://club.hihonor.com/global/global_data/images/2019/4/30/f65c8fe33351110e3b74fd0f131c80bb.gif"width="5%" height="10%" > เมนูใหม่/เมนูแนะนำรายสัปดาห์ </Blink></B></FONT></h4>
        <table align="center"  width="180" height="130" cellspacing= "0" cellspacing="0">  
            <th scope="row"><p><img src="img/กุ้งราดซอสมะขาม.jpg" width="180" height="130" alt="กุ้งราดซอสมะขาม" /></p>
            <p align="center"><font color="blue"><a href="กุ้งราดซอสมะขาม.html">กุ้งราดซอสมะขาม</a></FONT></p></th></FONT>
            <th scope="row"><p><img src="img/น้ำพริกอ่อง.png" width="180" height="130" alt="น้ำพริกอ่อง" /></p>
            <p align="center"><font color="blue"><a href="น้ำพริกอ่อง.html">น้ำพริกอ่อง</p></th></FONT>
            <th scope="row"><p><img src="img/ปูผัดผงกะหรี่.jpg" width="180" height="130" alt="ปูผัดผงกะหรี่" /></p>
            <p align="center"><font color="blue"><a href="ปูผัดผงกะหรี่.html">ปูผัดผงกะหรี่</p></th></FONT>
            <th scope="row"><p><img src="img/แกงป่าเจ.jpg" width="180" height="130" alt="แกงป่าเจ" /></p>
            <p align="center"><font color="blue"><a href="แกงป่าเจ.html">แกงป่าเจ</p></th></FONT>
            <tr>
            <th scope="row"><p><img src="img/พะแนงเนื้อ.jpg" width="180" height="130" alt="พะแนงเนื้อ" /></p>
            <p align="center"><font color="blue"><a href="พะแนงเนื้อ.html">พะแนงเนื้อ</p></th></FONT>
            <th scope="row"><p><img src="img/แกงมัสมั่นไก่.jpg" width="180" height="130" alt="แกงมัสมั่นไก่" /></p>
            <p align="center"><font color="blue"><a href="แกงมัสมั่นไก่.html">แกงมัสมั่นไก่</p></th></FONT>
            <th scope="row"><p><img src="img/พล่ากุ้ง.jpg" width="180" height="130" alt="พล่ากุ้ง" /></p>
            <p align="center"><font color="blue"><a href="พล่ากุ้ง.html">พล่ากุ้ง</p></th></FONT>
            <th scope="row"><p><img src="img/กะหลำเจ.jpg" width="180" height="130" alt="กะหลำเจ" /></p>
            <p align="center"><font color="blue"><a href="กะหลำเจ.html">กะหลำเจ</p></th></FONT>
            </tr>
         <br>
         <table align="center"  width="180" height="130" cellspacing= "0" cellspacing="0">  
         <font color="blue"><FONT SIZE="4"><B>➦ อาหารภาคกลาง</B></Font>
           <caption align="top"><U> <font color="blue">แนะนำเมนู อาหารภาคกลาง อาหารภาคกลางทำอย่างไร สูตรอาหาร เมนูง่ายๆ มาเสนอต่อคุณ</U></caption><br></FONT>
        
         <tr>
            <th scope="row"><p><img src="img/แกงจืดมะระยัดไส้หมูสับปลากราย.jpg" width="180" height="130" alt="แกงจืดมะระยัดไส้หมูสับปลากราย" /></p>
            <p align="center"><a href="แกงจืดมะระยัดไส้หมูสับ.html">แกงจืดมะระยัดไส้หมูสับ</p></th>
            <th scope="row"><p><img src="img/ปลาดุกผัดเผ็ด.jpg" width="180" height="130" alt="ปลาดุกผัดเผ็ด" /></p>
            <p align="center"><a href="ปลาดุกผัดเผ็ด.html">ปลาดุกผัดเผ็ด</p></th>
            <th scope="row"><p><img src="img/หมูผัดขิง.jpg" width="180" height="130" alt="หมูผัดขิง" /></p>
            <p align="center"><a href="หมูผัดขิง.html">หมูผัดขิง</p></th>
            <th scope="row"><p><img src="img/ขาไก่ต้มพะโล้.jpg" width="180" height="130" alt="ขาไก่ต้มพะโล้" /></p>
            <p align="center"><a href="ขาไก่ต้มพะโล้.html">ขาไก่ต้มพะโล้</p></th>
        </tr>

        <tr>
            <th scope="col"><p><img src="img/ต้มยำกุ้ง.JPG" width="180" height="130" alt="ต้มยำกุ้ง" /></p>
            <p align="center"><a href="ต้มยำกุ้ง .html">ต้มยำกุ้ง </p></th>
            <th scope="col"><p><img src="img/ต้มยำขาหมู.JPG" width="180" height="130" alt="ต้มยำขาหมู" /></p>
            <p align="center"><a href="ต้มยำขาหมู.html">ต้มยำขาหมู </p></th>
            <th scope="col"><p><img src="img/แกงเขียวหวานไก่.JPG" width="180" height="130" alt="แกงเขียวหวานไก่" /></p>
            <p align="center"><a href="แกงเขียวหวานไก่.html">แกงเขียวหวานไก่</p></th>
            <th scope="col"><p><img src="img/ต้มแซ่บกระดูกอ่อนใบกะเพรา.JPG" width="180" height="130" alt="ต้มแซ่บกระดูกอ่อนใบกะเพรา" /></p>
            <p align="center"><a href="ต้มแซ่บกระดูกอ่อนใบกะเพรา.html">ต้มแซ่บกระดูกอ่อนใบกะเพรา</p></th>
        </tr>
       
        <tr>
            <th scope="row"><p><img src="img/ยำดอกขจรกุ้งสด.jpg" width="180" height="130" alt="ยำดอกขจรกุ้งสด" /></p>
            <p align="center"><a href="ยำดอกขจรกุ้งสด.html">ยำดอกขจรกุ้งสด</p></th>
            <th scope="row"><p><img src="img/ผัดแขนงหมูสับ.jpg" width="180" height="130" alt="ผัดแขนงหมูสับ" /></p>
            <p align="center"><a href="ผัดแขนงหมูสับ.html">ผัดแขนงหมูสับ</p></th>
            <th scope="row"><p><img src="img/ตับหมูผัดพริก.jpg" width="180" height="130" alt="ตับหมูผัดพริก" /></p>
            <p align="center"><a href="ตับหมูผัดพริก.html">ตับหมูผัดพริก</p></th>
            <th scope="row"><p><img src="img/แกงเลียงกุงสด.jpg" width="180" height="130" alt="แกงเลียงกุงสด" /></p>
            <p align="center"><a href="แกงเลียงกุงสด.html">แกงเลียงกุงสด</p></th>   
        </tr>
        <br>
          <table align="center"  width="180" height="130" cellspacing= "0" cellspacing="0">  
          <font color="blue"><FONT SIZE="4"><B>➦ อาหารภาคใต้</B></Font>
           <caption align="top"><U> <font color="blue">แนะนำ สูตรอาหารปักษ์ใต้ ทำง่ายๆ กับข้าวปักษ์ใต้ สะตอ น้ำบูดู อาหารพื้นเมือง อร่อยๆมาเสนอต่อคุณ </U></caption><br></FONT>
           <tr>
            <th scope="row"><p><img src="img/หมูสามชั้นผัดกะปิ.jpg" width="180" height="130" alt="หมูสามชั้นผัดกะปิ" /></p>
            <p align="center"><a href="หมูสามชั้นผัดกะปิ.html">หมูสามชั้นผัดกะปิ</p></th>
            <th scope="row"><p><img src="img/แกงไตปลา.jpg" width="180" height="130" alt="แกงไตปลา" /></p>
            <p align="center"><a href="แกงไตปลา.html">แกงไตปลา</p></th>
            <th scope="row"><p><img src="img/ข้าวยำน้ำบูดู.jpg" width="180" height="130" alt="ข้าวยำน้ำบูดู" /></p>
            <p align="center"><a href="ข้าวยำน้ำบูดู.html">ข้าวยำน้ำบูดู</p></th>
            <th scope="row"><p><img src="img/ข้าวหมกไก่.jpg" width="180" height="130" alt="ข้าวหมกไก่" /></p>
            <p align="center"><a href="ข้าวหมกไก่.html">ข้าวหมกไก่</p></th>
        </tr>
        <tr>
            <th scope="row"><p><img src="img/แกงคั่วกะทิหอยแครง.jpg" width="180" height="130" alt="แกงคั่วกะทิหอยแครง" /></p>
            <p align="center"><a href="แกงคั่วกะทิหอยแครง.html">แกงคั่วกะทิหอยแครง</p></th>
            <th scope="row"><p><img src="img/หอยลายผัดพริกเผา.jpg" width="180" height="130" alt="หอยลายผัดพริกเผา" /></p>
            <p align="center"><a href="หอยลายผัดพริกเผา.html">หอยลายผัดพริกเผา</p></th>
            <th scope="row"><p><img src="img/กุ้งผัดสะตอพริกแกงใต้.jpg" width="180" height="130" alt="กุ้งผัดสะตอพริกแกงใต้" /></p>
            <p align="center"><a href="กุ้งผัดสะตอพริกแกงใต้.html">กุ้งผัดสะตอพริกแกงใต้</p></th>
            <th scope="row"><p><img src="img/ผัดพริกแกงหอยแครงใบยี่หร่า.jpg" width="180" height="130" alt="ผัดพริกแกงหอยแครงใบยี่หร่า" /></p>
            <p align="center"><a href="ผัดพริกแกงหอยแครงใบยี่หร่า.html">ผัดพริกแกงหอยแครงใบยี่หร่า</p></th>
              
        </tr>
        <tr>
            <th scope="row"><p><img src="img/น้ำพริกหยำ.jpg" width="180" height="130" alt="น้ำพริกหยำ" /></p>
            <p align="center"><a href="น้ำพริกหยำ.html">น้ำพริกหยำ</p></th>
            <th scope="row"><p><img src="img/ใบเหลียงต้มกะทิ.jpg" width="180" height="130" alt="ใบเหลียงต้มกะทิ" /></p>
            <p align="center"><a href="ใบเหลียงต้มกะทิ.html">ใบเหลียงต้มกะทิ</p></th>
            <th scope="row"><p><img src="img/ไก่ผัดกะปิ.jpg" width="180" height="130" alt="ไก่ผัดกะปิ" /></p>
            <p align="center"><a href="ไก่ผัดกะปิ.html">ไก่ผัดกะปิ</p></th>
            <th scope="row"><p><img src="img/หมูผัดกะปิสะตอ.jpg" width="180" height="130" alt="หมูผัดกะปิสะตอ" /></p>
            <p align="center"><a href="หมูผัดกะปิสะตอ.html">หมูผัดกะปิสะตอ</p></th>
        </tr>

        <br>
          <table align="center"  width="180" height="130" cellspacing= "0" cellspacing="0">  
            <font color="blue"><FONT SIZE="4"><B>➦ อาหารภาคเหนือ</B></Font>
            <caption align="top"><U> <font color="blue">แนะนำ สูตรอาหารเมืองเพนือ อาหารล้านนา มีอะไรบ้าง อยากกิน อาหารพื้นเมืองเหนือ อร่อยๆมาเสนอต่อคุณ</U></caption><br></FONT>
        <tr>
            <th scope="row"><p><img src="img/แกงอ่อมหมู.jpg" width="180" height="130" alt="แกงอ่อมหมู" /></p>
            <p align="center"><a href="แกงอ่อมหมู.html">แกงอ่อมหมู</p></th>
            <th scope="row"><p><img src="img/น้ำพริกหนุ่ม.jpg" width="180" height="130" alt="น้ำพริกหนุ่ม" /></p>
            <p align="center"><a href="น้ำพริกหนุ่ม.html">น้ำพริกหนุ่ม</p></th>
            <th scope="row"><p><img src="img/แกงคั่วฟักไก่.png" width="180" height="130" alt="แกงคั่วฟักไก่" /></p>
            <p align="center"><a href="แกงคั่วฟักไก่.html">แกงคั่วฟักไก่</p></th>
            <th scope="row"><p><img src="img/น้ำพริกตาแดง.jpg" width="180" height="130" alt="น้ำพริกตาแดง" /></p>
            <p align="center"><a href="น้ำพริกตาแดง.html">น้ำพริกตาแดง</p></th>
        </tr>
        <tr>
            <th scope="row"><p><img src="img/แกงฮังเล.jpg" width="180" height="130" alt="แกงฮังเล" /></p>
            <p align="center"><a href="แกงฮังเล.html">แกงฮังเล</p></th>
            <th scope="row"><p><img src="img/แกงแคไก่.jpg" width="180" height="130" alt="แกงแคไก่ " /></p>
            <p align="center"><a href="แกงแคไก่.html">แกงแคไก่ </p></th>
            <th scope="row"><p><img src="img/แกงโฮะ.jpg" width="180" height="130" alt="แกงโฮะ" /></p>
            <p align="center"><a href="แกงโฮะ.html">แกงโฮะ</p></th>
            <th scope="row"><p><img src="img/แกงผักปั๋งใส่แหนม.jpg" width="180" height="130" alt="แกงผักปั๋งใส่แหนม" /></p>
            <p align="center"><a href="แกงผักปั๋งใส่แหนม.html">แกงผักปั๋งใส่แหนม</p></th>
        </tr>
        <tr>
            <th scope="row"><p><img src="img/แกงขนุนใส่ซี่โครงหมู.jpg" width="180" height="130" alt="แกงขนุนใส่ซี่โครงหมู" /></p>
            <p align="center"><a href="แกงขนุนใส่ซี่โครงหมู.html">แกงขนุนใส่ซี่โครงหมู</p></th>
            <th scope="row"><p><img src="img/แกงไก่ใส่ฟักหม่น.jpg" width="180" height="130" alt="แกงไก่ใส่ฟักหม่น " /></p>
            <p align="center"><a href="แกงไก่ใส่ฟักหม่น.html">แกงไก่ใส่ฟักหม่น </p></th>
            <th scope="row"><p><img src="img/ขนมจีนน้ำเงี้ยว.jpg" width="180" height="130" alt="ขนมจีนน้ำเงี้ยว " /></p>
            <p align="center"><a href="ขนมจีนน้ำเงี้ยว.html">ขนมจีนน้ำเงี้ยว </p></th>
            <th scope="row"><p><img src="img/ผัดยอดฟักแม้ว.jpg" width="180" height="130" alt="ผัดยอดฟักแม้ว " /></p>
            <p align="center"><a href="ผัดยอดฟักแม้ว.html">ผัดยอดฟักแม้ว </p></th>
        </tr>
       
        <br>
          <table align="center"  width="180" height="130" cellspacing= "0" cellspacing="0">  
            <font color="blue"><FONT SIZE="4"><B>➦ อาหารภาคอีสาน</B></Font>
            <caption align="top"><U> <font color="blue">แนะนำ สูตรอาหารต่างๆ ภาคตะวันออกเฉียงเหนือ สูตรอาหารที่ทำกินเอง อร่อยๆมาเสนอต่อคุณ</U></caption><br></FONT>
        <tr>
            <th scope="row"><p><img src="img/ต้มแซ่บเนื้อวัว.jpg" width="180" height="130" alt="ต้มแซ่บเนื้อวัว" /></p>
            <p align="center"><a href="ต้มแซ่บเนื้อวัว.html">ต้มแซ่บเนื้อวัว</p></th>
            <th scope="row"><p><img src="img/ลาบปลาบึก.jpg" width="180" height="130" alt="ลาบปลาบึก " /></p>
            <p align="center"><a href="ลาบปลาบึก.html">ลาบปลาบึก </p></th>
            <th scope="row"><p><img src="img/กบทอดกระเทียมพริกไทย.jpg" width="180" height="130" alt="กบทอดกระเทียมพริกไทย " /></p>
            <p align="center"><a href="กบทอดกระเทียมพริกไทย.html">กบทอดกระเทียมพริกไทย </p></th>
            <th scope="row"><p><img src="img/ปลาบึกผัดฉ่า.jpg" width="180" height="130" alt="ปลาบึกผัดฉ่า" /></p>
            <p align="center"><a href="ปลาบึกผัดฉ่า.html">ปลาบึกผัดฉ่า</p></th>
        </tr>
        <tr>
            <th scope="row"><p><img src="img/ลาบพวงไข่ไก่.jpg" width="180" height="130" alt="ลาบพวงไข่ไก่" /></p>
            <p align="center"><a href="ลาบพวงไข่ไก่.html">ลาบพวงไข่ไก่</p></th>
            <th scope="row"><p><img src="img/ไก่รวนปลาร้า.jpg" width="180" height="130" alt="ไก่รวนปลาร้า" /></p>
            <p align="center"><a href="ไก่รวนปลาร้า.html">ไก่รวนปลาร้า</p></th>
            <th scope="row"><p><img src="img/ต้มแซ่บปลาคัง.jpg" width="180" height="130" alt="ต้มแซ่บปลาคัง" /></p>
            <p align="center"><a href="ต้มแซ่บปลาคัง.html">ต้มแซ่บปลาคัง</p></th>
            <th scope="row"><p><img src="img/พล่าหนวดปลาหมึก.jpg" width="180" height="130" alt="พล่าหนวดปลาหมึก " /></p>
            <p align="center"><a href="พล่าหนวดปลาหมึก.html">พล่าหนวดปลาหมึก </p></th>
        </tr>
        <tr>
            <th scope="row"><p><img src="img/น้ำพริกปลาร้า.jpg" width="180" height="130" alt="น้ำพริกปลาร้า " /></p>
            <p align="center"><a href="น้ำพริกปลาร้า.html">น้ำพริกปลาร้า </p></th>
            <th scope="row"><p><img src="img/ก้อยไข่มดแดง.jpg" width="180" height="130" alt="ก้อยไข่มดแดง" /></p>
            <p align="center"><a href="ก้อยไข่มดแดง.html">ก้อยไข่มดแดง</p></th>
            <th scope="row"><p><img src="img/แกงผักหวานใส่ไข่มดแดง.jpg" width="180" height="130" alt="แกงผักหวานใส่ไข่มดแดง " /></p>
            <p align="center"><a href="แกงผักหวานใส่ไข่มดแดง.html">แกงผักหวานใส่ไข่มดแดง </p></th>
            <th scope="row"><p><img src="img/ไส้อ่อนผัดพริกเกลือ.jpg" width="180" height="130" alt="ไส้อ่อนผัดพริกเกลือ " /></p>
            <p align="center"><a href="ไส้อ่อนผัดพริกเกลือ.html">ไส้อ่อนผัดพริกเกลือ </p></th>
        </tr>
    </table>
    <br>
    <table>
            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0">  
            <h3 align="center"> <font color="blue"><B>เมนูอาหาร ตามวัตถุดิบ</B></h3></FONT>
            <h4><FONT SIZE="4"><font color="red"><B><Blink><button type="button" class="btn btn-outline-info">➦ เมนูหมู </button></Blink></B></FONT></h4>
            <caption align="top"><U> <font color="blue">เมนูหมูผัด คือ อาหารประเภทหมูที่ใช้เทคนิคการทำอาหาร ด้วยวิธีการผัด ซึ่งเป็นวิธีทำอาหารหลักๆ เมนูหมูผัดมากมายรายละเอียด ดังนี้</U></caption><br></FONT>
        
                <th scope="row"><p><img src="img/หมูผัดพริกไทยอ่อน.jpg" width="230" height="160" alt="หมูผัดพริกไทยอ่อน" /></p>
                <p align="center"><a href="หมูผัดพริกไทยอ่อน.html">หมูผัดพริกไทยอ่อน</p></th>
                <th scope="row"><p><img src="img/ผัดเปรี้ยวหวานหมู.jpg" width="230" height="160" alt="ผัดเปรี้ยวหวานหมู" /></p>
                <p align="center"><a href="ผัดเปรี้ยวหวานหมู.html">ผัดเปรี้ยวหวานหมู</p></th>
                <th scope="row"><p><img src="img/ผัดกะเพราหมู.jpg" width="230" height="160" alt="ผัดกะเพราหมู" /></p>
                <p align="center"><a href="ผัดกะเพราหมู.html">ผัดกะเพราหมู</p></th>
                <tr>
                <th scope="row"><p><img src="img/หมูผัดขิงกับข้าวโพด.jpg" width="230" height="160" alt="หมูผัดขิงกับข้าวโพด" /></p>
                <p align="center"><a href="หมูผัดขิงกับข้าวโพด.html">หมูผัดขิงกับข้าวโพด</p></th>
                <th scope="row"><p><img src="img/ผัดแขนงหมูสับ.jpg" width="230" height="160" alt="ผัดแขนงหมูสับ" /></p>
                <p align="center"><a href="ผัดแขนงหมูสับ.html">ผัดแขนงหมูสับ</p></th>
                <th scope="row"><p><img src="img/	หมูผัดพริกหยวก.jpg" width="230" height="160" alt="หมูผัดพริกหยวก" /></p>
                <p align="center"><a href="หมูผัดพริกหยวก.html">หมูผัดพริกหยวก</p></th>
                </tr>
                </table>
           
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูแกงหมู คือ อาหารประเภทแกงที่มีหมูเป็นส่วนประกอบ เป็นอาหารประเภทน้ำ สูตรอาหาร เมนูแกงจากหมู มีมากมายหลากหลายสูตรอาหาร ดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/แกงอ่อมหมู.jpg" width="230" height="160" alt="แกงอ่อมหมู" /></p>
                <p align="center"><a href="แกงอ่อมหมู.html">แกงอ่อมหมู</p></th>
                <th scope="row"><p><img src="img/ต้มจืดมะระซี่โครงหมู.jpg" width="230" height="160" alt="ต้มจืดมะระซี่โครงหมู" /></p>
                <p align="center"><a href="ต้มจืดมะระซี่โครงหมู.html">ต้มจืดมะระซี่โครงหมู</p></th>
                <th scope="row"><p><img src="img/แกงป่าหมู.png" width="230" height="160" alt="แกงป่าหมู" /></p>
                <p align="center"><a href="แกงป่าหมู.html">แกงป่าหมู</p></th>
                <tr>
               <th scope="row"><p><img src="img/ขาหมูพะโล้.jpg" width="230" height="160" alt="ขาหมูพะโล้ " /></p>
                <p align="center"><a href="ขาหมูพะโล้.html">ขาหมูพะโล้ </p></th>
                <th scope="row"><p><img src="img/แกงจืดเต้าหู้หมูสับ.jpg" width="230" height="160" alt="แกงจืดเต้าหู้หมูสับ " /></p>
                <p align="center"><a href="แกงจืดเต้าหู้หมูสับ.html">แกงจืดเต้าหู้หมูสับ </p></th>
                <th scope="row"><p><img src="img/กระเพาะหมูตุ๋น.png" width="230" height="160" alt="กระเพาะหมูตุ๋น" /></p>
                <p align="center"><a href="กระเพาะหมูตุ๋น.html">กระเพาะหมูตุ๋น</p></th>
              </tr>
              </table>
              
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูหมูทอด คือ อาหารทอดจากหมู สูตรอาหาร เมนูทอดจากหมู มีมากมายหลากหลายสูตรอาหาร ดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/หมูทอดกะปิ.jpg" width="230" height="160" alt="หมูทอดกะปิ" /></p>
                <p align="center"><a href="หมูทอดกะปิ.html">หมูทอดกะปิ</p></th>
                <th scope="row"><p><img src="img/พริกหยวกหมูสับ.jpg" width="230" height="160" alt="พริกหยวกหมูสับ" /></p>
                <p align="center"><a href="พริกหยวกหมูสับ.html">พริกหยวกหมูสับ</p></th>
                <th scope="row"><p><img src="img/ไส้อ่อนทอดกระเทียมพริกไทย.jpg" width="230" height="160" alt="ไส้อ่อนทอดกระเทียมพริกไทย" /></p>
                <p align="center"><a href="ไส้อ่อนทอดกระเทียมพริกไทย.html">ไส้อ่อนทอดกระเทียมพริกไทย</p></th>
                <tr>
               <th scope="row"><p><img src="img/ไส้อ่อนผัดพริกเกลือ.jpg" width="230" height="160" alt="ไส้อ่อนผัดพริกเกลือ" /></p>
                <p align="center"><a href="ไส้อ่อนผัดพริกเกลือ.html">ไส้อ่อนผัดพริกเกลือ</p></th>
                <th scope="row"><p><img src="img/หมูโสร่ง.jpg" width="230" height="160" alt="หมูโสร่ง" /></p>
                <p align="center"><a href="หมูโสร่ง.html">หมูโสร่ง</p></th>
                <th scope="row"><p><img src="img/หมูทอด.jpg" width="230" height="160" alt="หมูทอด" /></p>
                <p align="center"><a href="หมูทอด.html">หมูทอด</p></th>
              </tr>
              </table>

              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูยำหมู คือ อาหารประเภทยำที่มีเนื้อหมู สูตรอาหาร เมนูยำที่มีเนื้อหมูมีอะไรบ้าง</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ยำหมูยอ.jpg" width="230" height="160" alt="ยำหมูยอ" /></p>
                <p align="center"><a href="ยำหมูยอ.html">ยำหมูยอ</p></th>
                <th scope="row"><p><img src="img/พันหอม.jpg" width="230" height="160" alt="พันหอม" /></p>
                <p align="center"><a href="พันหอม.html">พันหอม</p></th>
                <th scope="row"><p><img src="img/บั๋นหมี่.jpg" width="230" height="160" alt="บั๋นหมี่" /></p>
                <p align="center"><a href="บั๋นหมี่.html">บั๋นหมี่</p></th> 
              </tr>
              </table>

              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูน้ำพริกจากหมู คือ น้ำพริกที่มีหมูเป็นส่วนประกอบ น้ำพริกหมูมีอะไรบ้าง สูตรอาหาร เมนูน้ำพริกจากหมู มีมากมายหลากหลายสูตรอาหาร ดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/น้ำพริกหมูกรอบ.png" width="230" height="160" alt="น้ำพริกหมูกรอบ" /></p>
                <p align="center"><a href="น้ำพริกหมูกรอบ.html">น้ำพริกหมูกรอบ</p></th>
                <th scope="row"><p><img src="img/น้ำพริกกากหมู.jpg" width="230" height="160" alt="น้ำพริกกากหมู" /></p>
                <p align="center"><a href="น้ำพริกกากหมู.html">น้ำพริกกากหมู</p></th>
                <th scope="row"><p><img src="img/กะปิหลน.jpg" width="230" height="160" alt="กะปิหลน" /></p>
                <p align="center"><a href="กะปิหลน.html">กะปิหลน</p></th>  
              </tr>
              </table>
                  
            <br>
            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0">  
            <h4><FONT SIZE="4"><font color="red"><B><Blink><button type="button" class="btn btn-outline-info">➦ เมนูไก่ </button></Blink></B></FONT></h4>
            <caption align="top"><U> <font color="blue">เมนูแกงไก่ สูตรอาหารประเภทแกง</U></caption><br></FONT>  
           
                <th scope="row"><p><img src="img/แกงมัสมั่นไก่.jpg" width="230" height="160" alt="แกงมัสมั่นไก่" /></p>
                <p align="center"><a href="แกงมัสมั่นไก่.html">แกงมัสมั่นไก่</p></th>
                <th scope="row"><p><img src="img/แกงเขียวหวานไก่.jpg" width="230" height="160" alt="	แกงเขียวหวานไก่" /></p>
                <p align="center"><a href="แกงเขียวหวานไก่.html">แกงเขียวหวานไก่</p></th>
                <th scope="row"><p><img src="img/ไก่ต้มระกำ.jpg" width="230" height="160" alt="ไก่ต้มระกำ" /></p>
                <p align="center"><a href="ไก่ต้มระกำ.html">ไก่ต้มระกำ</p></th>
            </tr>
            <tr>
                <th scope="row"><p><img src="img/แกงคั่วฟักไก่.png" width="230" height="160" alt="แกงคั่วฟักไก่" /></p>
                <p align="center"><a href="แกงคั่วฟักไก่.html">แกงคั่วฟักไก่</p></th>
                <th scope="row"><p><img src="img/ซุปตีนไก่.jpg" width="230" height="160" alt="ซุปตีนไก่" /></p>
                <p align="center"><a href="ซุปตีนไก่.html">ซุปตีนไก่</p></th>
                <th scope="row"><p><img src="img/แกงเผ็ดกล้วยดิบ.jpg" width="230" height="160" alt="แกงเผ็ดกล้วยดิบ" /></p>
                <p align="center"><a href="แกงเผ็ดกล้วยดิบ.html">แกงเผ็ดกล้วยดิบ</p></th>
          </tr>
           </table>

           <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูไก่ผัด สูตรอาหารต่างๆประเภทผัด</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ไก่ผัดเม็ดมะม่วงหิมพานต์.jpg" width="230" height="160" alt="ไก่ผัดเม็ดมะม่วงหิมพานต์" /></p>
                <p align="center"><a href="ไก่ผัดเม็ดมะม่วงหิมพานต์.html">ไก่ผัดเม็ดมะม่วงหิมพานต์</p></th>
                <th scope="row"><p><img src="img/ไก่ผัดขิง.jpg" width="230" height="160" alt="ไก่ผัดขิง" /></p>
                <p align="center"><a href="ไก่ผัดขิง.html">ไก่ผัดขิง</p></th>
                <th scope="row"><p><img src="img/ไก่ผัดเปรี้ยวหวาน.jpg" width="230" height="160" alt="ไก่ผัดเปรี้ยวหวาน" /></p>
                <p align="center"><a href="ไก่ผัดเปรี้ยวหวาน.html">ไก่ผัดเปรี้ยวหวาน</p></th>
                <tr>
               <th scope="row"><p><img src="img/ผัดพริกแกงไก่.jpg" width="230" height="160" alt="ผัดพริกแกงไก่" /></p>
                <p align="center"><a href="ผัดพริกแกงไก่.html">ผัดพริกแกงไก่</p></th>
                <th scope="row"><p><img src="img/ผัดกระเฉดไก่.png" width="230" height="160" alt="ผัดกระเฉดไก่" /></p>
                <p align="center"><a href="ผัดกระเฉดไก่.html">ผัดกระเฉดไก่</p></th>
                <th scope="row"><p><img src="img/ไก่ผัดแห้ว.jpg" width="230" height="160" alt="ไก่ผัดแห้ว" /></p>
                <p align="center"><a href="ไก่ผัดแห้ว.html">ไก่ผัดแห้ว</p></th>
              </tr>
              </table>

            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูไก่ทอด สูตรอาหารต่างๆประเภททอด</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ปีกไก่ยัดไส้.jpg" width="230" height="160" alt="ปีกไก่ยัดไส้" /></p>
                <p align="center"><a href="ปีกไก่ยัดไส้.html">ปีกไก่ยัดไส้</p></th>
                <th scope="row"><p><img src="img/ไก่ทอดขิง.png" width="230" height="160" alt="ไก่ทอดขิง" /></p>
                <p align="center"><a href="ไก่ทอดขิง.html">ไก่ทอดขิง</p></th>
                <th scope="row"><p><img src="img/ปีกไก่ทอดน้ำแดง.jpg" width="230" height="160" alt="ปีกไก่ทอดน้ำแดง" /></p>
                <p align="center"><a href="ปีกไก่ทอดน้ำแดง.html">ปีกไก่ทอดน้ำแดง</p></th>
                <tr>
               <th scope="row"><p><img src="img/ไก่ทอดคาราเกะ.jpg" width="230" height="160" alt="ไก่ทอดคาราเกะ" /></p>
                <p align="center"><a href="ไก่ทอดคาราเกะ<.html">ไก่ทอดคาราเกะ</p></th>
                <th scope="row"><p><img src="img/ไก่ทอดบอนชอน.png" width="230" height="160" alt="ไก่ทอดบอนชอน" /></p>
                <p align="center"><a href="ไก่ทอดบอนชอน.html">ไก่ทอดบอนชอน</p></th>
                <th scope="row"><p><img src="img/ปีกไก่คั่วพริกเกลือ.jpg" width="230" height="160" alt="ปีกไก่คั่วพริกเกลือ" /></p>
                <p align="center"><a href="ปีกไก่คั่วพริกเกลือ.html">ปีกไก่คั่วพริกเกลือ</p></th>
              </tr>
              </table>

           <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูยำไก่ สูตรอาหารประเภทยำ</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ไก่ผัดเส้นบุกต้มยำแห้ง.png" width="230" height="160" alt="ไก่ผัดเส้นบุกต้มยำแห้ง" /></p>
                <p align="center"><a href="ไก่ผัดเส้นบุกต้มยำแห้งด.html">ไก่ผัดเส้นบุกต้มยำแห้ง</p></th>
                <th scope="row"><p><img src="img/ยำจิ้นไก่.jpg" width="230" height="160" alt=" ยำจิ้นไก่" /></p>
                <p align="center"><a href="ยำจิ้นไก่.html">ยำจิ้นไก่</p></th>
                <th scope="row"><p><img src="img/ลาบไก่เส้นบุก.png" width="230" height="160" alt="ลาบไก่เส้นบุก" /></p>
                <p align="center"><a href="ลาบไก่เส้นบุก.html">ลาบไก่เส้นบุก</p></th>
                <tr>
              </table>



            <br>
            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0">
            <h4><FONT SIZE="4"><font color="red"><B><Blink><button type="button" class="btn btn-outline-info">➦ เมนูกุ้ง </button></Blink></B></FONT></h4>  
             <caption align="top"><U> <font color="blue"> สูตรอาหารแสนอร่อย เมนูกุ้ง รวมสูตรอาหารตั้งแต่ เมนูต้ม เมนูผัด เมนูแกง เมนูทอด หรือ เมนูปิ้งย่าง มีดังนี้ </U></caption><br></FONT>
              <tr>
                <th scope="row"><p><img src="img/แกงส้มชะอมไข่.jpg" width="230" height="160" alt="แกงส้มชะอมกุ้ง" /></p>
                <p align="center"><a href="แกงส้มชะอมกุ้งhtml">แกงส้มชะอมกุ้ง </p></th>
                <th scope="row"><p><img src="img/กุ้งราดกระเทียมพริกไทย.png" width="230" height="160" alt="กุ้งราดกระเทียมพริกไทย" /></p>
                <p align="center"><a href="กุ้งราดกระเทียมพริกไทย.html">กุ้งราดกระเทียมพริกไทย </p></th>
                <th scope="row"><p><img src="img/กุ้งผัดไข่.jpg" width="230" height="160" alt="กุ้งผัดไข่" /></p>
                <p align="center"><a href="กุ้งผัดไข่.html">กุ้งผัดไข่</p></th>
             </tr>
            <tr>
                <th scope="row"><p><img src="img/ต้มยำกุ้ง.jpg" width="230" height="160" alt="ต้มยำกุ้ง" /></p>
                <p align="center"><a href="ต้มยำกุ้งด.html">ต้มยำกุ้ง</p></th>
                <th scope="row"><p><img src="img/น้ำพริกหยำ.jpg" width="230" height="160" alt="น้ำพริกหยำ" /></p>
                <p align="center"><a href="น้ำพริกหยำ .html">น้ำพริกหยำ </p></th>
                <th scope="row"><p><img src="img/ยำดอกขจรกุ้งสด.jpg" width="230" height="160" alt="ยำดอกขจรกุ้งสด" /></p>
                <p align="center"><a href="ยำดอกขจรกุ้งสด .html">ยำดอกขจรกุ้งสด </p></th>
            </tr>
            <tr>
                <th scope="row"><p><img src="img/กุ้งมังกรราดซอสข่า.png" width="230" height="160" alt="กุ้งมังกรราดซอสข่า" /></p>
                <p align="center"><a href="กุ้งมังกรราดซอสข่า.html">กุ้งมังกรราดซอสข่า</p></th>
                <th scope="row"><p><img src="img/แกงเลียงกุ้งสด.jpg" width="230" height="160" alt="แกงเลียงกุ้งสด" /></p>
                <p align="center"><a href="แกงเลียงกุ้งสด.html">แกงเลียงกุ้งสด</p></th>
                <th scope="row"><p><img src="img/กุ้งอบวุ้นเส้น.jpg" width="230" height="160" alt="กุ้งอบวุ้นเส้น" /></p>
                <p align="center"><a href="กุ้งอบวุ้นเส้น.html">กุ้งอบวุ้นเส้น</p></th>
            </tr>
           </table> 
           
            <br>
            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0">  
            <h4><FONT SIZE="4"><font color="red"><B><Blink><button type="button" class="btn btn-outline-info">➦ เมนูไข่ </button></Blink></B></FONT></h4>
             <caption align="top"><U> <font color="blue"> เมนูไข่ทอด สูตรอาหารประเภทไข่ ที่ใช้การทอด มีดังนี้ </U></caption><br></FONT>
              <tr>
                <th scope="row"><p><img src="img/ไข่ดาวลูกเขย.jpg" width="230" height="160" alt="ไข่ดาวลูกเขย" /></p>
                <p align="center"><a href="ไข่ดาวลูกเขย.html">ไข่ดาวลูกเขย</p></th>
                <th scope="row"><p><img src="img/ไข่กระทะ.jpg" width="230" height="160" alt="ไข่กระทะ" /></p>
                <p align="center"><a href="ไข่กระทะ.html">ไข่กระทะ</p></th>
                <th scope="row"><p><img src="img/ไข่ลูกเขย.jpg" width="230" height="160" alt="ไข่ลูกเขย" /></p>
                <p align="center"><a href="ไข่ลูกเขย.html">ไข่ลูกเขย</p></th>
              </tr>
              </table>
                
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูแกงไข่ สูตรอาหารประเภทแกงที่มีไข่เป็นส่วนประกอบ มีอะไรบ้าง</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ไข่พะโล้.jpg" width="230" height="160" alt="ไข่พะโล้" /></p>
                <p align="center"><a href="ไข่พะโล้.html">ไข่พะโล้</p></th>
                <th scope="row"><p><img src="img/แกงจืดไข่ม้วน.jpg" width="230" height="160" alt="แกงจืดไข่ม้วน" /></p>
                <p align="center"><a href="แกงจืดไข่ม้วน.html">แกงจืดไข่ม้วน</p></th>
                <th scope="row"><p><img src="img/แกงส้มชะอมไข่1.jpg" width="230" height="160" alt="แกงส้มชะอมไข่" /></p>
                <p align="center"><a href="แกงส้มชะอมไข่.html">แกงส้มชะอมไข่</p></th>
              <tr>
               <th scope="row"><p><img src="img/ต้มยำไข่เจียว.jpg" width="230" height="160" alt="ต้มยำไข่เจียว" /></p>
                <p align="center"><a href="ต้มยำไข่เจียว.html">ต้มยำไข่เจียว</p></th>
                <th scope="row"><p><img src="img/แกงจืดไข่น้ำ 2 สี.jpg" width="230" height="160" alt="แกงจืดไข่น้ำ 2 สี" /></p>
                <p align="center"><a href="แกงจืดไข่น้ำ 2 สี.html">แกงจืดไข่น้ำ 2 สี</p></th>
                <th scope="row"><p><img src="img/ซุปไข่.jpg" width="230" height="160" alt="ซุปไข่" /></p>
                <p align="center"><a href="ซุปไข่.html">ซุปไข่</p></th>
              </tr>
              </table>

              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูไข่ผัด อาหารประเภทผัดที่มีไข่เป็นส่วนประกอบ มีดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/เต้าหู้หน้าไข่เห็ดหอม.jpg" width="230" height="160" alt="เต้าหู้หน้าไข่เห็ดหอม" /></p>
                <p align="center"><a href="เต้าหู้หน้าไข่เห็ดหอม.html">เต้าหู้หน้าไข่เห็ดหอม</p></th>
                <th scope="row"><p><img src="img/แกงไข่ไล่ทุ่ง.jpg" width="230" height="160" alt="แกงไข่ไล่ทุ่ง" /></p>
                <p align="center"><a href="แกงไข่ไล่ทุ่ง.html">แกงไข่ไล่ทุ่ง</p></th>
                <th scope="row"><p><img src="img/มะระผัดไข่เค็ม.jpg" width="230" height="160" alt="มะระผัดไข่เค็ม" /></p>
                <p align="center"><a href="มะระผัดไข่เค็ม.html">มะระผัดไข่เค็ม</p></th>
              <tr>
               <th scope="row"><p><img src="img/ข้าวผัดไข่.jpg" width="230" height="160" alt="ข้าวผัดไข่" /></p>
                <p align="center"><a href="ข้าวผัดไข่.html">ข้าวผัดไข่</p></th>
                <th scope="row"><p><img src="img/ไข่ราดซอส.jpg" width="230" height="160" alt="ไข่ราดซอส" /></p>
                <p align="center"><a href="ไข่ราดซอส.html">ไข่ราดซอส</p></th>
                <th scope="row"><p><img src="img/ดอกขจรผัดไข่กุ้งสด.png" width="230" height="160" alt="ดอกขจรผัดไข่กุ้งสด" /></p>
                <p align="center"><a href="ดอกขจรผัดไข่กุ้งสด.html">ดอกขจรผัดไข่กุ้งสด</p></th>
              </tr>
              </table>

              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูยำไข่ อาหารประเภทยำที่มีไข่เป็นส่วนประกอบ มีดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ไข่ต้มทรงเครื่อง.jpg" width="230" height="160" alt="ไข่ต้มทรงเครื่อง" /></p>
                <p align="center"><a href="ไข่ต้มทรงเครื่อง.html">ไข่ต้มทรงเครื่อง</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/พันหอม.jpg" width="230" height="160" alt="พันหอม" /></p>
                <p align="center"><a href="พันหอม.html">พันหอม</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/ยำไข่ดาว.jpg" width="230" height="160" alt="ยำไข่ดาว" /></p>
                <p align="center"><a href="ยำไข่ดาว.html">ยำไข่ดาว</FONT></p></th></FONT>
              <tr>
               <th scope="row"><p><img src="img/ก้อยไข่มดแดง.jpg" width="230" height="160" alt="ก้อยไข่มดแดง" /></p>
                <p align="center"><a href="ก้อยไข่มดแดง.html">ก้อยไข่มดแดง</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/ส้มตำไข่ฟู.png" width="230" height="160" alt="ส้มตำไข่ฟู" /></p>
                <p align="center"><a href="ส้มตำไข่ฟู.html">ส้มตำไข่ฟู</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/น้ำพริกไข่เค็ม.jpg" width="230" height="160" alt="น้ำพริกไข่เค็ม" /></p>
                <p align="center"><a href="น้ำพริกไข่เค็ม.html">น้ำพริกไข่เค็ม</FONT></p></th></FONT>
              </tr>
              </table>

              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูไข่นึ่ง สูตรอาหารประเภทนึ่งที่มีไข่เป็นส่วนประกอบ มีดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/หมูสับนึ่งไข่เค็ม.jpg" width="230" height="160" alt="หมูสับนึ่งไข่เค็ม" /></p>
                <p align="center"><a href="หมูสับนึ่งไข่เค็ม.html">หมูสับนึ่งไข่เค็ม</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/ไข่ตุ๋นนมสด.jpg" width="230" height="160" alt="ไข่ตุ๋นนมสด" /></p>
                <p align="center"><a href="ไข่ตุ๋นนมสด.html">ไข่ตุ๋นนมสด</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/ไข่ตุ๋นทรงเครื่อง.png" width="230" height="160" alt="ไข่ตุ๋นทรงเครื่อง" /></p>
                <p align="center"><a href="ไข่ตุ๋นทรงเครื่อง.html">ไข่ตุ๋นทรงเครื่อง</FONT></p></th></FONT>
              <tr>
              </table>

              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">ขนมไข่ สูตรอาหารประเภทขนมหวานที่มีไข่เป็นส่วนประกอบ มีดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ทองเอก.jpg" width="230" height="160" alt="ทองเอก" /></p>
                <p align="center"><a href="ทองเอก.html">ทองเอก</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/ขนมทองหยอด.jpg" width="230" height="160" alt="ขนมทองหยอด" /></p>
                <p align="center"><a href="ขนมทองหยอด.html">ขนมทองหยอด</FONT></p></th></FONT>
                <th scope="row"><p><img src="img/ขนมทองหยิบ.jpg" width="230" height="160" alt="ขนมทองหยิบ" /></p>
                <p align="center"><a href="ขนมทองหยิบ.html">ขนมทองหยิบ</FONT></p></th></FONT>
              </table>
  
            <br>
            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0">  
            <h4><FONT SIZE="4"><font color="red"><B><Blink><button type="button" class="btn btn-outline-info">➦ เมนูปลา </button></Blink></B></FONT></h4>
            <caption align="top"><U> <font color="blue">เมนูปลาผัด สูตรอาหารประเภทผัดจากปลา มีดังนี้</U></caption><br></FONT>
            <tr>
                <th scope="row"><p><img src="img/ปลากะพงผัดสะตอ.jpg" width="230" height="160" alt="ปลากะพงผัดสะตอ" /></p>
                <p align="center"><a href="ปลากะพงผัดสะตอ.html">ปลากะพงผัดสะตอ</p></th>
                <th scope="row"><p><img src="img/ผัดชะอมปลาชอนทอดกรอบ.jpg" width="230" height="160" alt="ผัดชะอมปลาชอนทอดกรอบ" /></p>
                <p align="center"><a href="ผัดชะอมปลาชอนทอดกรอบ.html">ผัดชะอมปลาชอนทอดกรอบ</p></th>
                <th scope="row"><p><img src="img/ปลาช่อนจู่ขิง.jpg" width="230" height="160" alt="ปลาช่อนจู่ขิง" /></p>
                <p align="center"><a href="ปลาช่อนจู่ขิง.html">ปลาช่อนจู่ขิง</p></th>
             </tr>
            <tr>
                <th scope="row"><p><img src="img/ปลาหิมะผัดผงกะหรี่.png" width="230" height="160" alt="ปลาหิมะผัดผงกะหรี่" /></p>
                <p align="center"><a href="ปลาหิมะผัดผงกะหรี่.html">ปลาหิมะผัดผงกะหรี่</p></th>
                <th scope="row"><p><img src="img/ผัดเผ็ดปลาดุก.jpg" width="230" height="160" alt="ผัดเผ็ดปลาดุก" /></p>
                <p align="center"><a href="ผัดเผ็ดปลาดุก.html">ผัดเผ็ดปลาดุก</p></th>
                <th scope="row"><p><img src="img/ปลาดุกผัดพริกสด.jpg" width="230" height="160" alt="ปลาดุกผัดพริกสด" /></p>
                <p align="center"><a href="ปลาดุกผัดพริกสด.html">ปลาดุกผัดพริกสด</p></th>
             </tr>
            </table>

            </table>
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูแกงปลา สูตรอาหารประเภทแกงจากปลา มีดังนี้ </U></caption><br></FONT>
                <th scope="row"><p><img src="img/แกงกะทิสายบัวปลาทู.jpg" width="230" height="160" alt="แกงกะทิสายบัวปลาทู" /></p>
                <p align="center"><a href="แกงกะทิสายบัวปลาทู.html">แกงกะทิสายบัวปลาทู</p></th>
                <th scope="row"><p><img src="img/ปลาทูต้มขมิ้น.jpg" width="230" height="160" alt="ปลาทูต้มขมิ้น" /></p>
                <p align="center"><a href="ปลาทูต้มขมิ้น.html">ปลาทูต้มขมิ้น </p></th>
                <th scope="row"><p><img src="img/ต้มยำปลาช่อนใบมะขามอ่อน.jpg" width="230" height="160" alt="ต้มยำปลาช่อนใบมะขามอ่อน" /></p>
                <p align="center"><a href="ต้มยำปลาช่อนใบมะขามอ่อน.html">ต้มยำปลาช่อนใบมะขามอ่อน</p></th>
              <tr>
               <th scope="row"><p><img src="img/ต้มยำปลานิล.jpg" width="230" height="160" alt="ต้มยำปลานิล" /></p>
                <p align="center"><a href="ต้มยำปลานิล.html">ต้มยำปลานิล</p></th>
                <th scope="row"><p><img src="img/ข้าวต้มปลามิโซะ.jpg" width="230" height="160" alt="ข้าวต้มปลามิโซะ" /></p>
                <p align="center"><a href="ข้าวต้มปลามิโซะ.html">ข้าวต้มปลามิโซะ</p></th>
                <th scope="row"><p><img src="img/แกงไตปลา.jpg" width="230" height="160" alt="แกงไตปลา" /></p>
                <p align="center"><a href="แกงไตปลา.html">แกงไตปลา</p></th>
              </tr>
              </table>

              </table>
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูปลาทอด สูตรอาหารประเภททอดจากปลา มีดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/ปลานิลทอดกระเทียมพริกไทย.png" width="230" height="160" alt="ปลานิลทอดกระเทียมพริกไทย" /></p>
                <p align="center"><a href="ปลานิลทอดกระเทียมพริกไทย.html">ปลานิลทอดกระเทียมพริกไทย</p></th>
                <th scope="row"><p><img src="img/ปลาราดพริก.jpg" width="230" height="160" alt="ปลาราดพริก" /></p>
                <p align="center"><a href="ปลาราดพริก.html">ปลาราดพริก</p></th>
                <th scope="row"><p><img src="img/ปลาช่อนลุยสวน.jpg" width="230" height="160" alt="ปลาช่อนลุยสวน" /></p>
                <p align="center"><a href="ปลาช่อนลุยสวน.html">ปลาช่อนลุยสวน</p></th>
              <tr>
               <th scope="row"><p><img src="img/ปลากระพงทอดน้ำปลา.jpg" width="230" height="160" alt="ปลากระพงทอดน้ำปลา" /></p>
                <p align="center"><a href="ปลากระพงทอดน้ำปลา.html">ปลากระพงทอดน้ำปลา</p></th>
                <th scope="row"><p><img src="img/ปลาซาบะย่างซีอิ๋ว.jpg" width="230" height="160" alt="ปลาซาบะย่างซีอิ๋ว" /></p>
                <p align="center"><a href="ปลาซาบะย่างซีอิ๋วด.html">ปลาซาบะย่างซีอิ๋ว</p></th>
                <th scope="row"><p><img src="img/ไข่เจียวทูน่า.jpg" width="230" height="160" alt="ไข่เจียวทูน่า" /></p>
                <p align="center"><a href="ไข่เจียวทูน่า.html">ไข่เจียวทูน่า</p></th>
              </tr>
              </table>
           
              </table>
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูปลานึ่ง สูตรอาหารประเภทยำจากปลา มีดังนี้ </U></caption><br></FONT>
                <th scope="row"><p><img src="img/ปลาดอลลี่นึ่งมะนาว.jpg" width="230" height="160" alt="ปลาดอลลี่นึ่งมะนาว" /></p>
                <p align="center"><a href="ปลาดอลลี่นึ่งมะนาว.html">ปลาดอลลี่นึ่งมะนาว</p></th>
                <th scope="row"><p><img src="img/ปลากะพงนึ่งมะนาว.jpg" width="230" height="160" alt="ปลากะพงนึ่งมะนาว" /></p>
                <p align="center"><a href="ปลากะพงนึ่งมะนาว.html">ปลากะพงนึ่งมะนาว</p></th>
                <th scope="row"><p><img src="img/ปลาซาบะ ต้มมิโซะ.png" width="230" height="160" alt="ปลาซาบะ ต้มมิโซะ" /></p>
                <p align="center"><a href="ปลาซาบะ ต้มมิโซะ.html">ปลาซาบะ ต้มมิโซะ</p></th>
              <tr>
               <th scope="row"><p><img src="img/ปลาเก๋าลวกจิ้ม.jpg" width="230" height="160" alt="ปลาเก๋าลวกจิ้ม" /></p>
                <p align="center"><a href="ปลาเก๋าลวกจิ้ม.html">ปลาเก๋าลวกจิ้ม</p></th>
                <th scope="row"><p><img src="img/หมกปลาซิว.png" width="230" height="160" alt="หมกปลาซิว" /></p>
                <p align="center"><a href="หมกปลาซิว.html">หมกปลาซิว</p></th>
                <th scope="row"><p><img src="img/ห่อหมกปลามะพร้าวอ่อน.png" width="230" height="160" alt="ห่อหมกปลามะพร้าวอ่อน" /></p>
                <p align="center"><a href="ห่อหมกปลามะพร้าวอ่อน.html">ห่อหมกปลามะพร้าวอ่อน</p></th>
              </tr>
              </table>

              </table>
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูยำปลา สูตรอาหารประเภทยำจากปลา มีดังนี้ </U></caption><br></FONT>
                <th scope="row"><p><img src="img/ปลานิลลุยสวน.jpg" width="230" height="160" alt="ปลานิลลุยสวน" /></p>
                <p align="center"><a href="ปลานิลลุยสวน.html">ปลานิลลุยสวน</p></th>
                <th scope="row"><p><img src="img/ส้มตำปลาดุกฟู.png" width="230" height="160" alt="ส้มตำปลาดุกฟู" /></p>
                <p align="center"><a href="ส้มตำปลาดุกฟู.html">ส้มตำปลาดุกฟู</p></th>
                <th scope="row"><p><img src="img/ปลาดุกฟูคั่วกลิ้ง.jpg" width="230" height="160" alt="ปลาดุกฟูคั่วกลิ้ง" /></p>
                <p align="center"><a href="ปลาดุกฟูคั่วกลิ้ง.html">ปลาดุกฟูคั่วกลิ้ง</p></th>
              <tr>
               <th scope="row"><p><img src="img/ลาบปลาบึก.jpg" width="230" height="160" alt="ลาบปลาบึก" /></p>
                <p align="center"><a href="ลาบปลาบึก.html">ลาบปลาบึก</p></th>
                <th scope="row"><p><img src="img/สะเดาทรงเครื่อง.png" width="230" height="160" alt="สะเดาทรงเครื่อง" /></p>
                <p align="center"><a href="สะเดาทรงเครื่อง.html">สะเดาทรงเครื่อง</p></th>
                <th scope="row"><p><img src="img/ปลากระพงผัดต้มยำแห้ง.jpg" width="230" height="160" alt="ปลากระพงผัดต้มยำแห้ง" /></p>
                <p align="center"><a href="ปลากระพงผัดต้มยำแห้ง.html">ปลากระพงผัดต้มยำแห้ง</p></th>
              </tr>
              </table>

              </table>
              <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0"> 
              <caption align="top"><U> <font color="blue">เมนูน้ำพริกจากปลา สูตรอาหารประเภทน้ำพริกที่มีปลา มีดังนี้</U></caption><br></FONT>
                <th scope="row"><p><img src="img/น้ำพริกปลาสลิด.jpg" width="230" height="160" alt="น้ำพริกปลาสลิด" /></p>
                <p align="center"><a href="น้ำพริกปลาสลิด.html">น้ำพริกปลาสลิด</p></th>
                <th scope="row"><p><img src="img/น้ำพริกอ่องปลากระป๋อง.png" width="230" height="160" alt="น้ำพริกอ่องปลากระป๋อง" /></p>
                <p align="center"><a href="น้ำพริกอ่องปลากระป๋อง.html">น้ำพริกอ่องปลากระป๋อง</p></th>
                <th scope="row"><p><img src="img/น้ำพริกปลาย่าง.jpg" width="230" height="160" alt="น้ำพริกปลาย่าง" /></p>
                <p align="center"><a href="น้ำพริกปลาย่าง.html">น้ำพริกปลาย่าง</p></th>
              </table>

            <br>
            <table align="center"  width="230" height="160" cellspacing= "0" cellspacing="0">  
            <h4><FONT SIZE="4"><font color="red"><B><Blink><button type="button" class="btn btn-outline-info">➦ เมนูเนื้อวัว </button></Blink></B></FONT></h4>
             <caption align="top"><U> <font color="blue"> เมนูเนื้อ ( beef recipes ) คือ อาหารที่ใช้เนื้อวัวเป็นวัตถุดิบ สูตรอาหาร เมนูเนื้อวัว ประโยชน์ของเนื้อวัว เนื้อวัวทำอะไรกินได้บ้าง เมนูต้ม เมนูผัด เมนูย่าง เมนูทอด แบบง่ายๆสำหรับคนชอบกินเนื้อ</U></caption><br></FONT>
             <caption align="top"><U> <font color="blue">สูตรอาหาร เมนูเนื้อวัว มีดังนี้</U></caption><br></FONT>
             <tr>
                <th scope="row"><p><img src="img/ต้มแซ่บเนื้อวัว.jpg" width="230" height="160" alt="ต้มแซ่บเนื้อวัว" /></p>
                <p align="center"><a href="ต้มแซ่บเนื้อวัว.html">ต้มแซ่บเนื้อวัว</p></th>
                <th scope="row"><p><img src="img/ผัดเผ็ดเนื้อใบยี่หร่า.jpg" width="230" height="160" alt="ผัดเผ็ดเนื้อใบยี่หร่า" /></p>
                <p align="center"><a href="ผัดเผ็ดเนื้อใบยี่หร่า.html">ผัดเผ็ดเนื้อใบยี่หร่า</p></th>
                <th scope="row"><p><img src="img/พุลโกกิ.jpg" width="230" height="160" alt="พุลโกกิ" /></p>
                <p align="center"><a href="พุลโกกิ.html">พุลโกกิ</p></th>
              </tr>
              <tr>
                <th scope="row"><p><img src="img/เนื้อผัดขิงอ่อน.jpg" width="230" height="160" alt="เนื้อผัดขิงอ่อน" /></p>
                <p align="center"><a href="เนื้อผัดขิงอ่อน.html">เนื้อผัดขิงอ่อน</p></th>
                <th scope="row"><p><img src="img/พะแนงเนื้อ.jpg" width="230" height="160" alt="พะแนงเนื้อ" /></p>
                <p align="center"><a href="พะแนงเนื้.html">พะแนงเนื้อ</p></th>
                <th scope="row"><p><img src="img/ชกเล็ก.jpg" width="230" height="160" alt="ชกเล็ก" /></p>
                <p align="center"><a href="ชกเล็ก/ลาบเนื้อดิบ.html">ชกเล็ก/ลาบเนื้อดิบ</p></t h>
              </tr>
              <tr>
               <th scope="row"><p><img src="img/เนื้อวัวผัดกระเทียม.jpg" width="230" height="160" alt="เนื้อวัวผัดกระเทียม" /></p>
                <p align="center"><a href="เนื้อวัวผัดกระเทียม.html">เนื้อวัวผัดกระเทียม</p></th>
                <th scope="row"><p><img src="img/เนื้อผัดพริกไทยดำ.jpg" width="230" height="160" alt="เนื้อวัวผัดพริกไทยดำ" /></p>
                <p align="center"><a href="เนื้อวัวผัดพริกไทยดำ.html">เนื้อวัวผัดพริกไทยดำ</p></th>
                <th scope="row"><p><img src="img/ผัดกะเพราเนื้อ.jpg" width="230" height="160" alt="ผัดกะเพราเนื้อ" /></p>
                <p align="center"><a href="ผัดกะเพราเนื้อ.html">ผัดกะเพราเนื้อ</p></th>
              </tr>
              </table>
    
      <br>
            <tr>
            <td><button type="button" class="btn btn-outline-info"> <a href="indexhome.php" class="text-white"> ย้อนกลับ </a> </button> </td>
            <td><button class="btn btn-info"> <a href="indexhome.php" class="text-white">หน้าหลัก</a> </button> </td>
            <td><button type="button" class="btn btn-outline-info"> <a href="สูตรอาหาร.php" class="text-white"> ถัดไป </a> </button> </td>
            </tr>
       <br>
   
</body>

</html>
