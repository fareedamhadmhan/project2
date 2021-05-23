
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
     <li class="active"><a href="index.php" class="text-white"><U>หน้าหลัก</U></a></li>
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
<br>
<div class="col-md-7">
    <div class="container" class="col-md-8">
     <form method="post">    

       <table>
        <h3 align="center"> <font color="blue"><B>เมนูอาหาร/สูตรอาหาร</B></h3></FONT>
        <h4><FONT SIZE="4"><font color="red"><B><Blink><img src="https://club.hihonor.com/global/global_data/images/2019/4/30/f65c8fe33351110e3b74fd0f131c80bb.gif"width="5%" height="10%" > เมนูใหม่/เมนูแนะนำรายสัปดาห์ </Blink></B></FONT></h4>
        <table align="center"  width="180" height="130" cellspacing= "0" cellspacing="0">  
            
            <th scope="row"><p><img src="img/กุ้งราดซอสมะขาม.jpg" width="200" height="130" alt="กุ้งราดซอสมะขาม" /></p>
            <p align="center"><a href="กุ้งราดซอสมะขาม1.html">กุ้งราดซอสมะขาม</a></FONT></p></th></FONT>
            <th scope="row"><p><img src="img/น้ำพริกอ่อง.png" width="200" height="130" alt="น้ำพริกอ่อง" /></p>
            <p align="center"><a href="น้ำพริกอ่อง.html">น้ำพริกอ่อง</p></th>
            <th scope="row"><p><img src="img/ปูผัดผงกะหรี่.jpg" width="200" height="130" alt="ปูผัดผงกะหรี่" /></p>
            <p align="center"><a href="ปูผัดผงกะหรี่.html">ปูผัดผงกะหรี่</p></th>
            <th scope="row"><p><img src="img/ขนมปังหน้าหมูขอบฮอทดอกชีส.jpg" width="200" height="130" alt="ขนมปังหน้าหมูขอบฮอทดอกชีส" /></p>
            <p align="center"><a href="ขนมปังหน้าหมูขอบฮอทดอกชีส.html">ขนมปังหน้าหมูขอบฮอทดอกชีส</p></th>
            <tr>
            <th scope="row"><p><img src="img/พะแนงเนื้อ.jpg" width="200" height="130" alt="พะแนงเนื้อ" /></p>
            <p align="center"><a href="พะแนงเนื้อ.html">พะแนงเนื้อ</p></th>
            <th scope="row"><p><img src="img/แกงมัสมั่นไก่.jpg" width="200" height="130" alt="แกงมัสมั่นไก่" /></p>
            <p align="center"><a href="เมนูแกงมัสมั่นไก่.html">แกงมัสมั่นไก่</p></th>
            <th scope="row"><p><img src="img/พล่ากุ้ง.jpg" width="200" height="130" alt="พล่ากุ้ง" /></p>
            <p align="center"><a href="พล่ากุ้ง.html">พล่ากุ้ง</p></th>
            <th scope="row"><p><img src="img/หมูตุ๋นยาจีน1.jpg" width="200" height="130" alt="หมูตุ๋นยาจีน" /></p>
            <p align="center"><a href="หมูตุ๋นยาจีน1.html">หมูตุ๋นยาจีน</p></th>
            </tr>
            </table>

  
         <h3> <font color="#000000"><B>หมวดอาหาร</B></h3></FONT>
         <h4> <font color="#696969"><B><U>ประเภทอาหาร</U></B></h4></FONT>
         <table align="center"  width="150" height="70" cellspacing= "0" cellspacing="0">                 
         <tr> 
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูน้ำพริก" /></p>
            <p align="center"><a href="view_index/view_content.php?type=น้ำพริก">น้ำพริก</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูกับข้าว" /></p>
            <p align="center"><a href="view_index/view_content.php?type=กับข้าว">กับข้าว</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารเย็น" /></p>
            <p align="center"><a href="view_index/view_content.php?type=อาหารเย็น"> อาหารเย็น</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูอาหารมังสวิรัติ" /></p>
            <p align="center"><a href="view_index/view_content.php?type=อาหารมังสวิรัติ">อาหารมังสวิรัติ</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="น้ำจิ้ม" /></p>
            <p align="center"><a href="view_index/view_content.php?type=น้ำจิ้ม">น้ำจิ้ม</a></p></th>
        </tr> 

         <tr>  
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูแกง" /></p> 
            <p align="center"><a href="view_index/view_content.php?type=แกง">แกง</p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารเด็ก " /></p> 
            <p align="center"><a href="view_index/view_content.php?type=อาหารเด็ก">อาหารเด็ก </p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูก๋วยเตี๋ยว" /></p> 
            <p align="center"><a href="view_index/view_content.php?type=ก๋วยเตี๋ยว">ก๋วยเตี๋ยว</p></th> 
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูซุป" /></p> 
            <p align="center"><a href="view_index/view_content.php?type=ซุป">ซุป</p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูซุป" /></p> 
            <p align="center"><a href="view_index/view_content.php?type=มุสลิม">มุสลิม</p></th>
        </tr> 

        <tr>  
          <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูสเต็ก" /></p> 
          <p  align="center"><a href="view_index/view_content.php?type=สเต็ก">สเต็ก</p></th> 
          <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูอาหารจานเดียว" /></p> 
          <p align="center"><a href="view_index/view_content.php?type=อาหารจานเดียว">อาหารจานเดียว</a></p></th>
          <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารเช้า" /></p> 
          <p align="center"><a href="view_index/view_content.php?type=อาหารเช้า">อาหารเช้า</p></th>
          <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เบเกอร์รี่" /></p> 
          <p align="center"><a href="view_index/view_content.php?type=เบเกอร์รี่">เบเกอร์รี่</p></th>
          <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เครื่องดื่ม" /></p> 
          <p align="center"><a href="view_index/view_content.php?type=เครื่องดื่ม">เครื่องดื่ม </p></th>
        </tr> 

        <tr> 
         <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="สลัด" /></p> 
         <p align="center"><a href="view_index/view_content.php?type=สลัด">สลัด</p></th>
         <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="ของหวาน" /></p> 
         <p align="center"><a href="view_index/view_content.php?type=ของหวาน">ของหวาน</p></th>
         <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="ของว่าง" /></p> 
         <p align="center"><a href="view_index/view_content.php?type=ของว่าง">ของว่าง</p></th>
         <th scope="row"><p><img src="img/1.png" width="150" height="70" alt=" กับแกล้ม" /></p> 
         <p align="center"><a href="view_index/view_content.php?type=กับแกล้ม"> กับแกล้ม</p></th>  
         <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="คลีน" /></p> 
         <p align="center"><a href="view_index/view_content.php?type=คลีน">คลีน</p></th>
        </tr>   
        <tr>  
         <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="ไร้แป้ง" /></p>
         <p align="center"><a href="view_index/view_content.php?type=ไร้แป้ง">ไร้แป้ง</a></p></th>  
         <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="ไขมันต่ำ" /></p>
         <p align="center"><a href="view_index/view_content.php?type=ไขมันต่ำ">ไขมันต่ำ</a></p></th>  
         <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="โปรตีน" /></p>
         <p align="center"><a href="view_index/view_content.php?type=โปรตีน">โปรตีน</a></p></th> 
         <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูฟิวชั่น" /></p>
         <p align="center"><a href="view_index/view_content.php?type=ฟิวชั่น">ฟิวชั่น </a></p></th> 
         <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อื่นๆ" /></p>
         <p align="center"><a href="view_index/view_content.php?type=อื่นๆ"> อื่นๆ </a></p></th>
        </tr>  

       </table>

          <h4><font color="#696969"><B><U>วัตถุดิบ</U></B></h4></FONT>
         <table align="center"  width="150" height="70" cellspacing= "0" cellspacing="0">  
         <tr>   
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="ขนมปังปิง" /></p>
            <p align="center"><a href="ขนมปังปิง.html">ขนมปังปิ้ง</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูกุ้ง" /></p>
            <p align="center"><a href="เมนูกุ้ง.html">กุ้ง</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูชีส" /></p>
            <p align="center"><a href="เมนูชีส.html">ชีส</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูปลา" /></p>
            <p align="center"><a href="ปลา.html">ปลา</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูปลาหมึก" /></p>
            <p align="center"><a href="เมนูปลาหมึก.html">ปลาหมึก</a></p></th> 
          </tr>
          <tr>   
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูปู" /></p>
            <p align="center"><a href="เมนูปู.html">ปู</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูผลไม้" /></p>
            <p align="center"><a href="เมนูผลไม้.html">ผลไม้</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="หมูสามชั้น " /></p>
            <p align="center"><a href="หมูสามชั้น.html">หมูสามชั้น </a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูหมู" /></p>
            <p align="center"><a href="เมนูหมู.html">หมู</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูหอย" /></p>
            <p align="center"><a href="เมนูหอย.html">หอย</a></th>
          </tr>
          <tr>  
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt=อกไก่/></p>
            <p align="center"><a href="อกไก่.html">อกไก่</a></p></th> 
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูเต้าหู้" /></p>
            <p align="center"><a href="เมนูเต้าหู้.html">เต้าหู้ </a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูเนื้อวัว" /></p>
            <p align="center"><a href="เนื้อวัว.html">เนื้อวัว</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูเป็ด" /></p>
            <p align="center"><a href="เมนูเป็ด.html">เป็ด</a></p></th>  
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูเส้น" /></p>
            <p align="center"><a href="เมนูเส้น.html">เส้น</a></p></th>
          </tr>
          <tr>  
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูเห็ด" /></p>
            <p align="center"><a href="เมนูเห็ด.html">เห็ด</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูแซลมอน" /></p>
            <p align="center"><a href="เมนูแซลมอน.html">แซลมอน</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูไก่" /></p>
            <p align="center"><a href="เมนูไก่.html">ไก่</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูไข่" /></p>
            <p align="center"><a href="เมนูไข่.html">ไข่</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูไข่เค็ม" /></p>
            <p align="center"><a href="เมนูไข่เค็ม.html">ไข่เค็ม</a></p></th>
          </tr>
          <tr> 
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูใส้กรอก" /></p>
            <p align="center"><a href="เมนูใส้กรอก.html">ใส้กรอก</a></p></th>  
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เมนูผัก" /></p>
            <p align="center"><a href="เมนูผัก.html">ผัก</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อื่นๆ" /></p>
            <p align="center"><a href="อื่นๆวัตถุดิบ.html"> อื่นๆ </a></p></th>
          </tr>
      </table>  

        <h4><font color="#696969"><B><U>วันเทศกาล/วันสำคัญ</U></B></h4></FONT>
        <table align="center"  width="150" height="70" cellspacing= "0" cellspacing="0">  
         <tr>   
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="เทศกาลเจ" /></p>
            <p align="center"><a href="view_index/view_content_fastival.php?type=เทศกาลเจ"> เทศกาลเจ</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="วันแม่แห่งชาติ" /></p>
            <p align="center"><a href="view_index/view_content_fastival.php?type=วันแม่แห่งชาติ">วันแม่แห่งชาติ</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="วาเลนไทน์" /></p>
            <p align="center"><a href="view_index/view_content_fastival.php?type=วาเลนไทน์"> วาเลนไทน์</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="วันคริสมาสต์" /></p>
            <p align="center"><a href="view_index/view_content_fastival.php?type=วันคริสมาสต์">วันคริสมาสต์</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="วันสงกรานต์" /></p>
            <p align="center"><a href="view_index/view_content_fastival.php?type=วันสงกรานต์"> วันสงกรานต์</a></p></th>
        </tr>
        <tr> 
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="ตรุษจีน" /></p>
            <p align="center"><a href="view_index/view_content_fastival.php?type=ตรุษจีน">ตรุษจีน</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="ฮัลโลวีน" /></p>
            <p align="center"><a href="view_index/view_content_fastival.php?type=ฮัลโลวีน"> ฮัลโลวีน</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="ปาร์ตี้" /></p>
            <p align="center"><a href="view_index/view_content_fastival.php?type=ปาร์ตี้"> ปาร์ตี้</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อื่นๆ" /></p>
            <p align="center"><a href="view_index/view_content_fastival.php?type=อื่นๆ"> อื่นๆ </a></p></th>
          </tr>
        
      </table>
  
         <h4><font color="#696969"><B><U>นานาชาติ</U></B></h4></FONT>
         <table align="center"  width="150" height="70" cellspacing= "0" cellspacing="0">  
         <tr>   
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารไทย" /></p>
            <p align="center"><a href="view_index/view_content_international.php?type=อาหารไทย"> อาหารไทย</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt=" อาหารจีน" /></p>
            <p align="center"><a href="view_index/view_content_international.php?type=อาหารจีน">อาหารจีน </a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารญี่ปุ่น" /></p>
            <p align="center"><a href="view_index/view_content_international.php?type=อาหารญี่ปุ่น">อาหารญี่ปุ่น </a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารเวียดนาม" /></p>
            <p align="center"><a href="view_index/view_content_international.php?type=อาหารเวียดนาม">อาหารเวียดนาม </a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารอิตาลี" /></p>
            <p align="center"><a href="view_index/view_content_international.php?type=อาหารอิตาลี">อาหารอิตาลี</a></p></th>
          </tr>
          <tr>   
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารตุรกี" /></p>
            <p align="center"><a href="view_index/view_content_international.php?type=อาหารตุรกี">อาหารตุรกี</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารอินเดีย" /></p>
            <p align="center"><a href="view_index/view_content_international.php?type=อาหารอินเดีย">อาหารอินเดีย</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารมาเลเซีย" /></p>
            <p align="center"><a href="view_index/view_content_international.php?type=อาหารมาเลเซีย">อาหารมาเลเซีย</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารฟิลิปปินส์" /></p>
            <p align="center"><a href="view_index/view_content_international.php?type=อาหารฟิลิปปินส์">อาหารฟิลิปปินส์</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารเกาหลี" /></p>
            <p align="center"><a href="view_index/view_content_international.php?type=อาหารเกาหลี">อาหารเกาหลี</a></p></th>
          </tr>
          <tr>   
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อื่นๆ" /></p>
            <p align="center"><a href="view_index/view_content_international.php?type=อื่นๆ">อื่นๆ</a></p></th>
          </tr>
          </table>

      <h4><font color="#696969"><B><U>ภูมิภาคอาหาร</U></B></h4></FONT>
         <table align="center"  width="150" height="70" cellspacing= "0" cellspacing="0">  
         <tr>   
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารอีสาน" /></p>
            <p align="center"><a href="view_index/view_content_local_food.php?type=อาหารอีสาน">อาหารอีสาน</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารเหนือ " /></p>
            <p align="center"><a href="view_index/view_content_local_food.php?type=อาหารเหนือ">อาหารเหนือ</a></p></th>
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารใต้" /></p>
            <p align="center"><a href="view_index/view_content_local_food.php?type=อาหารใต้">อาหารใต้</a></p></th>  
            <th scope="row"><p><img src="img/1.png" width="150" height="70" alt="อาหารกลาง" /></p>
            <p align="center"><a href="view_index/view_content_local_food.php?type=อาหารกลาง">อาหารกลาง</a></p></th>  
          
        </tr>
        </table>
  
      <br>
     
      <tr>
            <td><button type="button" class="btn btn-outline-info"> <a href="member.php" class="text-white"> ย้อนกลับ </a> </button> </td>
            <td><button class="btn btn-info"> <a href="index.php" class="text-white">หน้าหลัก</a> </button> </td>
            <td><button type="button" class="btn btn-outline-info"> <a href="สูตรอาหาร.php" class="text-white"> ถัดไป </a> </button> </td>
       </tr>
       <br>

      </from>
    </div>
  </div>
    
</body>
</html>
<!-- 
<script>
  function view(data){
    var data_1 = data;
    var pmeters = 'data_1='+data_1;
  
    $.ajax({
        type: "POST",
        url: "view_index/view_content.php",
        data: pmeters,
        success: function(resPonse) {
          alert(resPonse);
        }
    });
  }
</script> -->
