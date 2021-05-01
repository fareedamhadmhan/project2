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
     <li class="active"><a href="ประเภทอาหาร.php" class="text-white"><U>จัดการประเภทอาหาร</U></a></li>
     <li><a href="วัตถุดิบ.php" class="text-white">จัดการวัตถุดิบ</a></li>
     <!-- <li><a href="วัตถุดิบทดแทน.php" class="text-white">จัดการวัตถุดิบทดแทน</a></li> -->
     <li><a href="ผู้ดูแลระบบ.php" class="text-white">จัดการข้อมูลผู้ดูแลระบบ</a></li>
     <li><a href="member.php" class="text-white">จัดการข้อมูลสมาชิก</a></li>
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

<meta charset= "utf-8">
<title>INSERT</title>
<?php
        include 'connection.php';
       
        if(isset($_POST['save'])){
            
            $foodtype_Name=$_POST['foodtype_Name'];
    
            $sql= "INSERT INTO `foodtype`(`foodtype_Name`) 
            VALUES ('$foodtype_Name')";
           
                if(mysqli_query($con,$sql)){
                    echo "<script type='varchar(50)/javascript'>";
                    echo "alert('บันทึกข้อมูลเรียบร้อย !')";
                    echo "window.location='index.php';";
                    echo "</script>";
                }else{
                     echo "error : " . $sql . "
                " .mysqli_error($con);
                }
                mysqli_close($con);  
        }
    ?> 
     <body>
     <h2 aling="center"><font color="red">ตารางแก้ไขประเภทอาหาร เพิ่มชื่อประเภทอาหารดังนี้ </font></h2>
        <form method="post">
        <div class="form-group">
        <div class="form-inline">
       <label >ชื่อประเภทอาหาร :	</label><br>
        <textarea id="foodtype_Name"  name="foodtype_Name" rows="5" cols="130" placeholder="กรอกชื่อประเภทอาหารของคุณ" style="resize:none" input type="varchar(50)" class="form-control "></textarea>
        <br><br>
     <tr aling="center">
        <button class="btn btn-info"><a href="index.php">หน้าหลัก</a></button>
        <button class="btn btn-success" type="Submit" name= "save" value="submit">บันทึกข้อมูล</button>
     </tr>

        </div>
        </fieldset>
    </body>
</html>
