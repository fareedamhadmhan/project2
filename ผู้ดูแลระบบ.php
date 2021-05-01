<!DOCTYPE html>
<html lang="en">    
  <head>
    <title>ผู้ดูแลระบบ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
     <li><a href="วิธีการ.php" class="text-white">จัดการวิธีการ</a></li>
     <!-- <li><a href="วัตถุดิบทดแทน.php" class="text-white">จัดการวัตถุดิบทดแทน</a></li> -->
     <li  class="active"><a href="ผู้ดูแลระบบ.php" class="text-white"><U>จัดการข้อมูลผู้ดูแลระบบ</U></a></li>
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
        
      <br>
      <div class="col-lg-9">
      <h1 align="center">จัดการข้อมูลผู้ดูแลระบบ<button class="btn btn-success"> <a href="insertผู้ดูแลระบบ.php" class="text-white"> เพิ่ม </a> </button> </h1>  
      <h2 align="center">ลงทะเบียนผู้ดูแลระบบ</h2>
      <div class="container"class ="col-lg-12">
      <br> 
      <table id=system_admin class="table table-dark table-striped" border="4" style="width:100%" >
         <thead>
            <tr align="center">
            <td><B>Email</B></td>
            <td><B>Username</B></td>
            <td><B>Password</B></td>
            <td><B>Edit</B></td>
            <td><B>delete</B></td>
            </tr>
            </thead>
            
            <?php  
                include 'connection.php';

                $query = "SELECT * FROM `system_admin` ORDER BY admin_Email asc";
                $result = mysqli_query($con,$query);

                while($row=mysqli_fetch_array($result)){
                ?>
       
                    <tr>
                    <td align='center'> <?php echo $row['admin_Email'];?></td>
                    <td align='center'> <?php echo $row['admin_User'];?></td>
                    <td align='center'> <?php echo $row['admin_Password'];?></td>
                    <td align='center'> <button class="btn-warning btn"> <a href="updateผู้ดูแลระบบ.php?admin_Email=<?php echo $row['admin_Email']; ?>" class="text-white"> แก้ไข </a> </button> </td>
                    <td align='center'> <button class="btn-danger btn"> <a href="deleteผู้ดูแลระบบ.php?admin_Email=<?php echo $row['admin_Email']; ?>" class="text-white"> ลบ </a> </button> </td>
                    </tr>
                <?php
                    }
                ?>
                </div>
                </div>
                <table>
                <tr>
                <td><button type="button" class="btn btn-outline-info"> <a href="วัตถุดิบทดแทน.php" class="text-white"> ย้อนกลับ </a> </button> </td>
                <td><button  type="button" class="btn btn-outline-info"> <a href="index.php" class="text-white">หน้าหลัก</a> </button></td>
                <td><button type="button" class="btn btn-outline-info"> <a href="index.php" class="text-white"> ถัดไป </a> </button> </td>
                </tr>
                </table> 
    </table>   
</body>
</html>