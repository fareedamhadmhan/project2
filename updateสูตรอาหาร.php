<?php
    include "connection.php";
 
    $sql = "SELECT * FROM ตารางสูตรอาหาร";
    if( isset($_GET['search']) ){
    $manu_name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM ตารางสูตรอาหาร WHERE manu_name ='$manu_name' ";
   }
    
 ?>



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
      background-color:#fac240;
      color:#0a3389;
      height: 100%;
    }
     
    /* Set black background color, white text and some padding */
    footer {
      background-color: #00000f;
      color:black;
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


<head>
<style>
table, th, td {
    border: 5px solid black;
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
     <li class="active"><a href="สูตรอาหาร.php" class="text-white"><U>จัดการสูตรอาหาร</U></a></li>
     <li><a href="ประเภทอาหาร.php" class="text-white">จัดการประเภทอาหาร</a></li>
     <li><a href="วัตถุดิบ.php" class="text-white">จัดการวัตถุดิบ</a></li>
     <!-- <li><a href="วัตถุดิบทดแทน.php" class="text-white">จัดการวัตถุดิบทดแทน</a></li> -->
     <li><a href="ผู้ดูแลระบบ.php" class="text-white">จัดการข้อมูลผู้ดูแลระบบ</a></li>
     <li><a href="member.php" class="text-white">จัดการข้อมูลสมาชิก</a></li>
    
  
  </ul><br>
      <div class="input-group" class="text-dark">
        <form action="" method="GET">
  
        <label>ค้นหาสมาชิก</label>
        <input type="text" placeholder="กรุณากรอกรหัสผ่าน" name="search">
        <input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary" >
      </form>
      </div>
      </div>

    <br>
    <div class="col-lg-9">
    <U><h2  align="center">แก้ไขรายการสูตรอาหาร</h2></U> 
    <div class="container" class="col-md-8">
    <body>

    <div class="col*lg-12">
    <div class="row">
      <form action="" method="post" id="example"  enctype="multipart/form-data">
      <div style="width:120% height=100%;" >
        <table border="2" id="example" class="table-bordered table table-dark" cellpadding="5",cellspacing="5">
            <thead>
                <tr align='center'><div class="col*lg-12">
                    <td bgcolor="pink"><B>ชื่อเมนูอาหาร</td>
                    <td bgcolor="pink"><B>ส่วนผสม </td>
                    <td bgcolor="pink"><B>วิธีทำ</td>
                    <td bgcolor="pink"><B>รูป</td> 
                    <td bgcolor="pink"><B>แก้ไข</td>
                    <td bgcolor="pink"><B>ลบ</td>    
                </tr>
            </thead>
           

            <?php
                 include "connection.php";
                 $sql = "SELECT * FROM ตารางสูตรอาหาร";
                  if( isset($_GET['search']) ){
                    $manu_name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
                    $sql = "SELECT * FROM ตารางสูตรอาหาร WHERE manu_name ='$manu_name' ";
                    }
                        $result = $con->query($sql);
                 ?>
                
                <?php
                    while($row = $result->fetch_assoc()){
                ?>


                
                <tr>
                    <td align='center' bgcolor="FFF0F5"><?php echo $row['manu_name']; ?></td>
                    <td align='center'><?php echo $row['Ingredients']; ?></td>
                    <td align='center'bgcolor="FFF0F0"><?php echo $row['Gastronomy']; ?></td>
                    <td ><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="image" style="width:50% height=50%;" >'; ?></td>
                    <td align='center'> <button class="btn-warning btn"> <a href="updateสูตร.php?manu_name=<?php echo $row['manu_name']; ?>" class="text-white"> แก้ไข </a> </button> </td>
                    <td align='center'> <button class="btn-danger btn"> <a href="deleteสูตรอาหาร.php?manu_name=<?php echo $row['manu_name']; ?>" class="text-white"> ลบ </a> </button> </td>
                </tr>
            <?php
            }
            ?>
            
        </table>
        <tr>
                <td><button type="button" class="btn btn-outline-info"> <a href="วัตถุดิบ.php" class="text-white"> ย้อนกลับ </a> </button> </td>
                <td><button class="btn btn-info"> <a href="index.php" class="text-white">หน้าหลัก</a> </button> </td>
                <td><button type="button" class="btn btn-outline-info"> <a href="ผู้ดูแลระบบ.php" class="text-white"> ถัดไป </a> </button> </td>
        </tr>
    </div>
</div>
</div>
</body>
</html>

<script>
  $(document).ready(function(){
    $('#insert').click(function(){
      var image_name =$('#images').val();
      if(image_name == ''){
      alert("Please Select Image");
      return false;
    }else{
      var extension = $('#images').val().split('.').pop().toLowerCase();
       if(jQuery.inArray(extension,['gif','png','jpg','jpeg']) == -1){
         alert('Invalid Image File');
         $('#images').val('');
         return false;
       }
    }
  });
});
</script>