<!DOCTYPE html>
<html lang="en">    
  <head>
    <title>Addmember</title>
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
     <li><a href="สูตรอาหาร.php" class="text-white">จัดการสูตรอาหาร</a></li>
     <li><a href="ประเภทอาหาร.php" class="text-white">จัดการประเภทอาหาร</a></li>
     <li><a href="วัตถุดิบ.php" class="text-white">จัดการวัตถุดิบ</a></li>
     <!-- <li><a href="วัตถุดิบทดแทน.php" class="text-white">จัดการวัตถุดิบทดแทน</a></li> -->
     <li><a href="ผู้ดูแลระบบ.php" class="text-white">จัดการข้อมูลผู้ดูแลระบบ</a></li>
     <li class="active"><a href="member.php" class="text-white"><U>จัดการข้อมูลสมาชิก</U></a></li>
     <li><a href="index.php" class="text-white">หน้าหลัก</a></li>
  
  </ul><br>
      <div class="input-group" class="text-dark">
        <form action="" method="GET">
  
        <label>ค้นหาสมาชิก</label>
        <input type="text" placeholder="กรุณากรอกรหัสผ่าน" name="search">
        <input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary" >
      </form>
      </div>
      </div>
        

<meta charset="utf-8">
<?php
include 'connection.php';

if(isset($_POST['save'])){

    
    $member_Email = $_POST['member_Email'];
    $member_Password = $_POST['member_Password'];
   
   $sql = "INSERT INTO member (member_Email,member_Password)
   VALUES ('$member_Email','$member_Password')";  
    if (mysqli_query($con, $sql)) {
        echo "<script type='text/javascript','varchar(50)/javascript'>";
        echo "alert('บันทึกข้อมูลเรียบร้อย !');";
        echo "window.location='member.php';";
        echo "</script>";
       } else {
        echo "Error: " . $sql . "
    " . mysqli_error($con);
       }
       mysqli_close($con);
  }
?>

<html>
<table>
    <body >
    <h1>เพิ่มข้อมูลลงในตาราง</h1>
        <form method="post">
        <div class="form-group" >
        <div class="col-sm-2" align="right"></div>
          <div class="col-sm-5" align="left">
          <input type="hidden" name="id" class="txtField">
          </div>
      </div>
      <div class="form-inline">
       <label>อีเมล์สมาชิก : </label>
       <textarea type="varchar(50)" id="member_Email"  name="member_Email" rows="2" cols="100" placeholder="กรอกชื่อเมนูอาหารของคุณ" style="resize:none" input type="varchar(50)" class="form-control "></textarea>
       <br><br>

       <label>รหัสผ่าน  :  </label>
       <textarea type="varchar(8)"  class="form-control" id="member_Password"  name="member_Password" rows="2" cols="100" placeholder="กรอกชื่อเมนูอาหารของคุณ" style="resize:none" input type="varchar(8)" class="form-control "></textarea>
       <br><br>
       </div>
      
       <div class="form-group">
       <div class="col-sm-2"> </div>
       <div class="col-sm-6">
          
          <table align="left">
          <tr>
          <td><h5 align="left"><button class="btn-success btn"type="Submit" name="save" value="submit">บันทึกข้อมูล</button></h5></td>
          <td><h5 align="left"><button type="reset" class="btn btn-danger">Reset</button></h5></td>
          <td><button class="btn btn-info"> <a href="index.php" class="text-white">หน้าหลัก</a> </button> </td>
        </tr>
          </table>
          
         
          </div>          
      </div>

        </form>
    </body>
</html>