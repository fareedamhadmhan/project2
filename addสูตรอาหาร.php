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
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #fac240;
      color:azure;
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
  <img src= "https://taokaemai.com/wp-content/uploads/2018/02/Cooking.png" width="100%" height="50%">
  <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
    <h1 align="center">Cooking World</h1>
    <h1 align="center">เสกสรรอาหารด้วยมือเรา</h1>  
    <!-- <h1 align="center">Clear Fridge</h1>
    <h1 align="center">ระบบแนะนำเมนูอาหาร</h1>  
    <h1 align="center">จากวันหมดอายุ</h1>   -->
     <ul class="nav nav-pills nav-stacked">
     <li class="active"><a href="สูตรอาหาร.php" class="text-white">จัดการสูตรอาหาร</a></li>
     <li><a href="ประเภทอาหาร.php" class="text-white">จัดการประเภทอาหาร</a></li>
     <li><a href="วัตถุดิบ.php" class="text-white">จัดการวัตถุดิบ</a></li>
     <li><a href="วัตถุดิบทดแทน.php" class="text-white">จัดการวัตถุดิบทดแทน</a></li>
     <li><a href="ผู้ดูแลระบบ.php" class="text-white">จัดการข้อมูลผู้ดูแลระบบ</a></li>
     <li><a href="member.php" class="text-white">จัดการข้อมูลสมาชิก</a></li>
     <li><a href="indexhome.php" class="text-white">หน้าหลัก</a></li>
      
      </ul><br>
      <div class="input-group" class="text-dark" bgcolor="#FF3366">
        <form action="" method="GET">   
        <label>ค้นหาเมนูอาหาร</label>
        <input type="text" placeholder="กรอกชื่อเมนูอาหาร" name="search" >
        <input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary" >
      </form>
      </div>
      </div>

<html>
<title>จัดการสูตรอาหาร</title>
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
<h2 align="center">จัดการสูตรอาหาร</h2>
  
          <?php
        include 'connection.php';
       
        if(isset($_POST['save'])){
            
            $manu_name=$_POST['manu_name'];
            $Ingredients=$_POST['Ingredients'];
            $Gastronomy=$_POST['Gastronomy'];
            
            $sql= "INSERT INTO `ตารางสูตรอาหาร` (`manu_name`, `Ingredients`, `Gastronomy`) 
            VALUES ('$manu_name','$Ingredients','$Gastronomy')";
           
                if(mysqli_query($con,$sql)){
                  echo "<script type='text/javascript','varchar(50)/javascript'>";
                    echo "alert('บันทึกข้อมูลเรียบร้อย !')";
                    echo "window.location='indexhome.php'";
                    echo "</script>";
                }else{
                     echo "error : " . $sql . "
                " .mysqli_error($con);
                }
                mysqli_close($con);  
        }
    ?> 
        <table>
        <h3 align="center">สร้างสูตรอาหารสำหรับเป็นข้อมูลพื้นฐานให้ Mobile Application ป้อนข้อมูลสูตรอาหาร</h3>
        <br>
        <form method="post">
        <div class="form-group" >
        <div class="col-sm-2" align="right"></div>
          <div class="col-sm-5" align="left">
          <input type="hidden" name="id" class="txtField">
          </div>
      </div>
       <div class="form-inline">
       <label >ชื่อเมนูอาหาร</label><br>
        <textarea id="manu_name"  name="manu_name" rows="5" cols="100" placeholder="กรอกชื่อเมนูอาหารของคุณ" style="resize:none" input type="varchar(20)" class="form-control "></textarea>
        <br><br>
       <label > ส่วนผสม </label><br>
        <textarea id="Ingredients" name="Ingredients" rows="15" cols="100" placeholder="กรอกส่วนผสมของวัตถุดิบอาหารของคุณ " style="resize:none" input type="text" class="form-control "></textarea>
        <br><br>
       <label > วิธีทำ  </label><br>
       <textarea id="Gastronomy" name="Gastronomy" rows="20" cols="100" placeholder="กรอกวิธีทำเมนูอาหารของคุณ" style="resize:none" input type="text" class="form-control "></textarea>  
       <br><br>
      </div>
      
       <div class="form-group">
       <div class="col-sm-2"> </div>
       <div class="col-sm-6">

       <table align="left">
       <tr>
          <td><h5 align="left"><button class="btn-success btn"type="Submit" name="save" value="submit">เพิ่มสูตรอาหาร</button></h5></td>
          <td><h5 align="center"><button class="btn btn-danger" type="Submit" name="save" value="submit"><a href="deleteสูตรอาหาร.php?manu_name=<?php echo $row['manu_name']; ?>" class="text-white">ลบสูตรอาหาร</a></button></h5></td>
        </tr>
        </table>
        

   <ul class="pager">  
    <li><a href="indexhome.php">กลับหน้าหลัก</a></li>
    <li><a href="ประเภทอาหาร.php"> ถัดไป </a></li> 
  </ul>
</table>
</body>
</html>



