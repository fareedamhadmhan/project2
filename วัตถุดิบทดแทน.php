<!DOCTYPE html>
<html lang="en">    
  <head>
    <title>ระบบแนะนำเมนูอาหารจากวันหมดอายุ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css">
    <href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>


    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 2000px}
    
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
     <li><a href="วิธีการ.php" class="text-white">จัดการวิธีการ</a></li>
     <li class="active"><a href="วัตถุดิบทดแทน.php" class="text-white"><U>จัดการวัตถุดิบทดแทน</U></a></li>
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

<html>
<title>จัดการวัตถุดิบทดแทน</title>
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
<h2 align="center">จัดการวัตถุดิบทดแทน</h2>
    
    <?php
         include("connect.php");
         if(isset($_POST['save'])){
            
            
            $alternative_materials_Name =$_POST['alternative_materials_ Name'];
            $material_Name  =$_POST['material_Name'];
          
           
            $sql= "INSERT INTO `alternative_materials` (`alternative_materials_ Name`,`material_Name`) 
            VALUES ('$alternative_materials_Name','$material_Name');";
           
                if(mysqli_query($connect,$sql)){
                    echo "new record create successfully ";
                }else{
                    echo "error : " . $sql . "
                    " .mysqli_error($connect);
                }mysqli_close($connect);  
        }
    ?>

<table>
    <h3 align="center">สร้างข้อมูลวัตถุดิบทดแทนสำหรับมาทดแทนวัตถุดิบหลักที่ไม่สามารถหาได้หรือไม่เพียงพอ </h3>
    <h4 align="center">ป้อนข้อมูลวัตถุดิบทดแทน</h4>
    
    <br>
    <tr>
    <td>
    <form action=""> 
         <strong>   ชื่อวัตถุดิบ :</strong><br>          
         <textarea rows="8" cols="170" placeholder="กรอกชื่อวัตถุดิบ" style="resize:none" type="varchar(50)" class="form-control" name="material_Name"></textarea> 
         <br>
    </form>
    </td>
    </tr>

    <tr>
    <td>
    <form action="" > 
         <strong>  ชื่อวัตถุดิบทดแทน :</strong><br>           
            <textarea rows="8" cols="170" placeholder="กรอกชื่อวัตถุดิบทดแทน" style="resize:none" type="varchar(50)" class="form-control" name="alternative_materials_ Name"></textarea>
    <br>
    </form>
    </td>
    </tr>

          
    <table align="center">
     <tr>
      <td><h3 align="center"><button class="btn-success btn" type="Submit" name="save" value="submit">เพิ่ม</a></button></h3></td>
      <td><h3 align="center"><button class="btn btn-warning" type="Submit" name="save" value="submit"><a href="insertวัตถุดิบทดแทน.php" class="text-white">แก้ไข</a></button></h3></td>
      <td><h3 align="center"><button class="btn btn-danger" type="Submit" name="save" value="submit"><a href="deleteวัตถุดิบทดแทน.php?=<?php echo $row['alternative_materials_ Name']; ?>" class="text-white">ลบ</button></h3></td> 
    </tr>
    </table>
         
<br> 
             
            <ul class="pager">  
            <tr>
              <li><a href="วิธีการ.php" class="text-white"> ย้อนกลับ </a></li> 
              <li><a href="index.php" class="text-white">หน้าหลัก</a></li>
              <li><a href="ผู้ดูแลระบบ.php" class="text-white"> ถัดไป </a></li>
            </tr>
            </ul>

        </form>
    </div>
    </table>
 </body> 
 </html>