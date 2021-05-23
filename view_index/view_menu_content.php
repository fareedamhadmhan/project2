<!DOCTYPE html>
<html lang="en-Us">    
  <head>
    <title>Cooking World ทุกมื้อให้เราดูแลคุณ</title>
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
<!-- <img src= "https://generali.co.th/genhealthylife/wp-content/uploads/thumbnail-4bfaa953a151e95bb68315ec158dadc4.jpeg" width="833px" height="400px"> -->
<div class="container-fluid">  
  <div class="row content">
    <div class="col-sm-3 sidenav">
    <h1 align="center">Cooking World</h1>
    <h1 align="center">ทุกมื้อให้เราดูแลคุณ</h1>  
      
     <ul class="nav nav-pills nav-stacked">
     <li class="active"><a href="../index.php" class="text-white"><U>หน้าหลัก</U></a></li>
     <li><a href="register_system/login.php" class="text-white">จัดการสูตรอาหาร</a></li>
     <li><a href="ประเภทอาหาร.php" class="text-white">จัดการประเภทอาหาร</a></li>
     <li><a href="วัตถุดิบ.php" class="text-white">จัดการวัตถุดิบ</a></li>
     <li><a href="วิธีการ.php" class="text-white">จัดการวิธีการ</a></li>
     <li><a href="ผู้ดูแลระบบ.php" class="text-white">จัดการข้อมูลผู้ดูแลระบบ</a></li>
     <li><a href="users_system/member.php" class="text-white">จัดการข้อมูลสมาชิก</a></li>
 
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


<?php 
include "../connect.php";

$name = $_GET["name"];
$sql_food_type = "SELECT * FROM food_type WHERE food_type='$name' ";
$result = $con->query($sql_food_type);
foreach($result as $row){
 $id_type = $row["ID"];
}

$sql_menu_pic = "SELECT * FROM menu INNER JOIN attach_file ON menu.menu_name = attach_file.menu_name WHERE menu.active='1' and menu.menu_name ='$name' ";
@$result_pic = $con->query($sql_menu_pic);
foreach($result_pic as $row_pic){
    $path = $row_pic["path_file"];
    $name = $row_pic["menu_name"];    
    $detail = $row_pic["detail"];     
    $Ingredients = $row_pic["Ingredients"];   
    $cook = $row_pic["cook"];   
    $for_people = $row_pic["for_people"];   
}
?>
<center>
  <br><br>
  <table width='900'>
   <tr>
    <td align='center'><h3><?=$name;?></h3></td>
   </tr>
   <tr><td><br></td></tr>
   <tr>
    <td align='center'><img src="../register_system/<?=$path;?>" width="280" height="250"></td>
   </tr>
  </table>

  <table border='0' width='900'>
   <tr><td><br></td></tr>
   <tr>
    <td width='150'><h4><B>รายละเอียดเมนู:<B></h4> </td>
    <td width='750'><h4><?=$detail;?></h4></td>
   </tr>
   <tr><td><br></td></tr>
   <tr>
    <td width='150'><h4><B>ส่วนผสม:</B><h4> </td>
    <td width='750'><h4><?=$Ingredients;?></h4></td>
   </tr>
   <tr><td><br></td></tr>
   <tr>
   <td width='150'><h4><B>สำหรับ: <B><h4> </td>
    <td width='750'><h4><?=$for_people;?></h4></td>
   </tr>
   <tr><td><br></td></tr>
   <tr>
    <td width='150'><h4><B>วิธีทำ : <B><h4> </td>
    <td width='750'><h4><?=$cook;?></h4></td>
   </tr>
  </table>

 


<center>