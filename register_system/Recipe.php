<!-- <?php
include'upload.php';
?>   -->

<html>
  <head>
  <meta charset="utf-8">
  </head>
</html>


<!DOCTYPE html>
<html lang="en-US">    
  <head>
    <title>สูตรอาหาร</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css">
    <href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>


    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 2500px}
    
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
     <li class="active"><a href="Recipe.php" class="text-white"><U>จัดการสูตรอาหาร</U></a></li>
     <li><a href="ประเภทอาหาร.php" class="text-white">จัดการประเภทอาหาร</a></li>
     <li><a href="วัตถุดิบ.php" class="text-white">จัดการวัตถุดิบ</a></li>
     <li><a href="วิธีการ.php" class="text-white">จัดการวิธีการ</a></li>
     <!-- <li><a href="วัตถุดิบทดแทน.php" class="text-white">จัดการวัตถุดิบทดแทน</a></li> -->
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

      <?php
    if (isset($_REQUEST['search']) && $_REQUEST['search'] == "ค้นหา"){
        $file=$_REQUEST['search1'];
        include "../project2/$file/home.php";
    }
    ?>

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
<h2 align="center">จัดการสูตรอาหาร ➕</h2>


<?php
//         include 'connection.php';
       
        if(isset($_POST['save'])){
            
            $manu_name=$_POST['manu_name'];
            $Ingredients=$_POST['Ingredients'];
            $cook=$_POST['cook'];
            $image=$_POST['image'];
            $for_people=$_POST['for_people'];
            $explain=$_POST['explain'];

            $sql= "INSERT INTO `ตารางสูตรอาหาร` (`manu_name`, `Ingredients`, `cook`,`for_people`,'image','explain')
            VALUES ('$manu_name','$Ingredients','$cook','$image','$for_people','$explain')";
           
                if(mysqli_query($con,$sql)){
                    echo "<script type='text/javascript','varchar(50)/javascript'>";
                    echo "<img src='ตารางสูตรอาหาร/".$row['image']."' >";
                    echo"<p>".$row['image']."</p>";
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

  

<table>
        <!-- <h4 align="center"><U>เขียนสูตรอาหาร</U></h4> -->
        <form method="post">
        <div class="form-group" >
        <div class="col-sm-2" align="right"></div>
          <div class="col-sm-5" align="left">
          <input type="hidden" name="id" class="txtField">
          </div>
      </div>
  
      <div class="form-inline" align="center">
        <p>ใส่ภาพอาหารที่ทำเสร็จ</p>
        <p>เป็นแรงบันดาลใจให้เพื่อนๆ ทำตามสูตรของเรา</p>

        
       <!-- <label> Select Image File</label> -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" >
        <!-- <input type="submit" value="upload" name="submit"> -->
        </form>
        <br><br>
       
        <label> ชื่อเมนูอาหาร </label><br>
        <textarea id="manu_name"  name="manu_name" rows="2" cols="100" placeholder="กรอกชื่อเมนูอาหารของคุณ" style="resize:none" input type="varchar(20)" class="form-control "></textarea>
        <br><br>
        
        <label> อธิบายสั้น ๆ เกี่ยวกับเมนูนี้</label><br>
        <textarea id="explain"  name="explain" rows="2" cols="100" placeholder="เล่าเคล็ดลับ/ที่มา #เล่าเรื่องราวความพิเศษของสูตรอาหารของคุณ" style="resize:none" input type="varchar(20)" class="form-control "></textarea>
        <br><br>

       <label>สำหรับ</label><br>
       <textarea id="int(100)"  name="int(100)" rows="1" cols="100" placeholder="กี่คน" style="resize:none" input type="varchar(20)" class="form-control "></textarea>
        <br><br>

      <label>เวลาที่ใช้</label><br>
       <textarea id="int(100)"  name="int(100)" rows="1" cols="100" placeholder="1 ชม. 30 น." style="resize:none" input type="varchar(20)" class="form-control "></textarea>
        <br><br>

       <label>ส่วนผสม  </label><br>
       <textarea  id="Ingredients" name="Ingredients" rows="2" cols="100" placeholder="กรอกส่วนผสมของวัตถุดิบอาหารของคุณ " style="resize:none" input type="text" class="form-control "></textarea>
       &nbsp;<button class="btn btn-dark" type="button" title="ลบส่วนผสม"> ... </button><br>
       <button class="btn btn-dark" type="button" onClick="blinkit()" > + เพิ่มส่วนผสม </button>
   
        <br><br>
       <label>วิธีทำ </label><br>
       <textarea id="cook" name="cook" rows="2" cols="100" placeholder="กรอกวิธีทำเมนูอาหารของคุณ" style="resize:none" input type="text" class="form-control "></textarea>  
       &nbsp;<button class="btn btn-dark" type="button" title="ลบวิธีทำ"> ... </button><br>
       <button class="btn btn-dark" type="button" onClick="blinkit()" > + เพิ่มวิธีทำ </button>
       <br><br>
       </div> 
       </form>

       <!-- <div class="form-inline">  
       <h5 class="text-left"><B> &nbsp;&nbsp;UPLOAD IMAGE</h5>
       <?php if(!empty($statusMsg)){?>
       <p class="status <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
       <?php } ?>  
          <form action ="สูตรอาหาร.php" method="post" enctype="multipart/form-data">
          <label> &nbsp; Select Image File:</label>
          <input type ="file" name="image" class="form-control">
          <div>
          &nbsp;&nbsp;&nbsp;&nbsp;<textarea name="text" cols="50" rows="4" placeholder="Say something about this image..."></textarea>   
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="upload" value="Upload Image" class="btn btn-success my-3">
          </div>
       </div>  
       </div>
       </div>
       </form> -->

           
       
      
        <FORM >
        <div class="form-inline" align="center">
        <h4><B>&nbsp; หมวดหมู่อาหาร</B></h4>
        <p><i>เลือกแท็กที่เกี่ยวข้องกับเมนูนี้* </i></p>
        <p><B>&nbsp;<U>ประเภทอาหาร</B></U></p>
        <TABLE align="center">
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="เมนูน้ำพริก" >เมนูน้ำพริก &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="เมนูกับข้าว">เมนูกับข้าว &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="เมนูอาหารจีน">เมนูอาหารจีน &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="อาหารเย็น">อาหารเย็น &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="เมนูอาหารมังสวิรัติ">เมนูอาหารมังสวิรัติ &nbsp;</TD>
        <TR><TD><INPUT TYPE=Checkbox Name=foodtype VALUE="เมนูอาหารเหนือ">เมนูอาหารเหนือ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="เมนูแกง">เมนูแกง &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="อาหารเด็ก">อาหารเด็ก &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="เมนูก๋วยเตี๋ยว">เมนูก๋วยเตี๋ยว &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="เมนูซุป">เมนูซุป &nbsp;</TD></TR>
        <TR><TD><INPUT TYPE=Checkbox Name=foodtype VALUE="สลัด">สลัด &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="ของหวาน">ของหวาน &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="ของว่าง">ของว่าง &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="เมนูอาหารอิตาเลียน">เมนูอาหารอิตาเลียน &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="กับแกล้ม">กับแกล้ม &nbsp;</TD></TR>
        <TR><TD><INPUT TYPE=Checkbox Name=ปfoodtype VALUE="น้ำจิ้ม">น้ำจิ้ม &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="อาหารทำขาย">อาหารทำขาย &nbsp;</TD></TR>
        </TABLE>
        </FORM>
        
        <FORM align="center">
        <TABLE align="center">
        <br><p><B>&nbsp;<U>วัตถุดิบ</B></U></p>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="ขนมปังปิง" >ขนมปังปิง &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="อะโวคาโด">อะโวคาโด &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูกุ้ง">เมนูกุ้ง &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูชีส">เมนูชีส &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูหอย">เมนูหอย &nbsp;</TD>
        
        <TR><TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูปลาหมึก">เมนูปลาหมึก &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูปู">เมนูปู &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูผลไม้">เมนูผลไม้ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูใส้กรอก">เมนูใส้กรอก &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูปลา">เมนูปลา &nbsp;</TD></TR>

        <TR><TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูไข่เค็ม">เมนูไข่เค็ม &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูไข่">เมนูไข่ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูไก่">เมนูไก่ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูแซลมอน">เมนูแซลมอน &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูเห็ด">เมนูเห็ด &nbsp;</TD></TR>
        
        <TR><TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูเส้น">เมนูเส้น &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูเป็ด ">เมนูเป็ด &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูเนื้อวัว">เมนูเนื้อวัว &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="หม้ออบลมร้อน">หม้ออบลมร้อน &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูผัก ">เมนูผัก &nbsp;</TD></TR>
        
        <TR><TD><INPUT TYPE=Checkbox Name=material VALUE="หมูสามชั้น">หมูสามชั้น &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="ทะเล">ทะเล &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูเส้น">เมนูเส้น &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="หม้อทอดไร้น้ำมัน">หม้อทอดไร้น้ำมัน &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=material VALUE="หม้อหุงข้าว">หม้อหุงข้าว &nbsp;</TD></TR>
  
        <TR><TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูเต้าหู้">เมนูเต้าหู้ &nbsp;</TD></TR>
        </TABLE>
        </FORM>

        <FORM align="center">
        <TABLE align="center">
        <br><p><B>&nbsp;<U>เบเกอรี่ และเครื่องดื่ม </B></U></p>
        <TD><INPUT TYPE=Checkbox Name=เบเกอรี่และเครื่องดื่ม VALUE="เค้ก" >เค้ก &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=เบเกอรี่และเครื่องดื่ม VALUE="พาย">พาย &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=เบเกอรี่และเครื่องดื่ม VALUE="สูตรน้ำปั่น">สูตรน้ำปั่น &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=เบเกอรี่และเครื่องดื่ม VALUE="ค็อกเทล">ค็อกเทล &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=เบเกอรี่และเครื่องดื่ม VALUE="ขนมปัง">ขนมปัง &nbsp;</TD>
        </TABLE>
        </FORM>

        <FORM align="center">
        <TABLE align="center">
        <br><p><B>&nbsp;<U> อุปกรณ์/วิธีทำ </B></U></p>
        <TD><INPUT TYPE=Checkbox Name=วิธีทำการทำ VALUE="เมนูต้ม" >เมนูต้ม &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=วิธีทำการทำ VALUE="เมนูทอด">เมนูทอด &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=วิธีทำการทำ VALUE="เมนูนึ่ง">เมนูนึ่ง &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=วิธีทำการทำ VALUE="เมนูผัด">เมนูผัด &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=วิธีทำการทำ VALUE="เมนูยำ">เมนูยำ &nbsp;</TD>
       
        <TR><TD><INPUT TYPE=Checkbox Name=วิธีทำการทำ VALUE="เมนูย่าง">เมนูย่าง &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=วิธีทำการทำ VALUE="เมนูหม้อหุงข้าว">เมนูหม้อหุงข้าว &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=วิธีทำการทำ VALUE="เมนูหม้ออบลมร้อน">เมนูหม้ออบลมร้อน &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=วิธีทำการทำ VALUE="เมนูอบ">เมนูอบ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=วิธีทำการทำ VALUE="เมนูไมโครเวฟ">เมนูไมโครเวฟ &nbsp;</TD></TR>

        </TABLE>
        </FORM>

        <FORM align="center">
        <TABLE align="center">
        <br><p><B>&nbsp;<U> วันเทศกาล/วันสำคัญ </B></U></p>
        <TD><INPUT TYPE=Checkbox Name=Day VALUE="เทศกาลเจ" >เทศกาลเจ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=Day VALUE="วันแม่แห่งชาติ ">วันแม่แห่งชาติ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=Day VALUE="วาเลนไทน์">วาเลนไทน์ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=Day VALUE="วันคริสมาสต์">วันคริสมาสต์ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=Day VALUE="วันสงกรานต์">วันสงกรานต์ &nbsp;</TD>
       
        <TR><TD><INPUT TYPE=Checkbox Name=Day VALUE="ตรุษจีน">ตรุษจีน &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=Day VALUE="ฮัลโลวีน">ฮัลโลวีน &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=Day VALUE="ปาร์ตี้">ปาร์ตี้ &nbsp;</TD></TR>
        </TABLE>
        </FORM>

        <FORM align="center">
        <TABLE align="center">
        <br><p><B>&nbsp;<U>นานาชาติ</B></U></p>
        <TD><INPUT TYPE=Checkbox Name=นานาชาติ VALUE="อาหารไทย" >อาหารไทย &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=นานาชาติ VALUE="อาหารจีน">อาหารจีน &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=นานาชาติ VALUE="อาหารญี่ปุ่น">อาหารญี่ปุ่น &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=นานาชาติ VALUE="อาหารเวียดนาม">อาหารเวียดนาม &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=นานาชาติ VALUE="อาหารอิตาลี">อาหารอิตาลี &nbsp;</TD>
       
        <TR><TD><INPUT TYPE=Checkbox Name=นานาชาติ VALUE="อาหารตุรกี">อาหารตุรกี &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=นานาชาติ VALUE="อาหารอินเดีย">อาหารอินเดีย &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=นานาชาติ VALUE="อาหารมาเลเซีย">อาหารมาเลเซีย &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=นานาชาติ VALUE="อาหารฟิลิปปินส์">อาหารฟิลิปปินส์ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=นานาชาติ VALUE="อาหารเกาหลี">อาหารเกาหลี &nbsp;</TD></TR>

        </TABLE>
        </FORM>

        <FORM align="center">
        <TABLE align="center">
        <br><p><B>&nbsp;<U>สุขภาพ/ลดน้ำหนัก</B></U></p>
        <TD><INPUT TYPE=Checkbox Name=สุขภาพลดน้ำหนัก VALUE="คลีน" >คลีน &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=สุขภาพลดน้ำหนัก VALUE="มังสวิรัติ">มังสวิรัติ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=สุขภาพลดน้ำหนัก VALUE="ไร้แป้ง">ไร้แป้ง &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=สุขภาพลดน้ำหนัก VALUE="ไขมันต่ำ">ไขมันต่ำ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=สุขภาพลดน้ำหนัก VALUE="โปรตีน">โปรตีน&nbsp;</TD>
        </TABLE>
        </FORM>

        <FORM align="center">
        <TABLE align="center">
        <br><p><B>&nbsp;<U>อาหารท้องถิ่น</B></U></p>
        <TD><INPUT TYPE=Checkbox Name=อาหารท้องถิ่น VALUE="อาหารอีสาน" >อาหารอีสาน &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=นอาหารท้องถิ่น VALUE="อาหาเหนือ">อาหาเหนือ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=อาหารท้องถิ่น VALUE="อาหารใต้">อาหารใต้ &nbsp;</TD>
        <TD><INPUT TYPE=Checkbox Name=อาหารท้องถิ่น VALUE="อาหารกลาง">อาหารกลาง&nbsp;</TD>       
        </TABLE>
        </form> 
              

       <br>
        <table align="center">
        <tr>
         
          <td><button class="btn-success btn" type="submit" name="save" value="submit">เพิ่มสูตรอาหาร </button></td>
          <td><button class="btn btn-warning" type="submit" name="save" value="submit"><a href="updateสูตร.php" class="text-white">แก้ไขสูตรอาหาร</a></button></td> 
          <td><button class="btn btn-danger" type="button" > ลบ </button></td>
          <!-- <td><h3 align="center"><button class="btn btn-info"type="submit" name="save" value="submit"><a href="updateสูตรอาหาร.php" class="text-white">ดูรายการอาหารทั้งหมด</a></button></h3></td> -->
        </tr>
        </table>
<!--         
<ul class="pager">
  <li> <a href="index.php" class="text-white"> ย้อนกลับ </a></li>
  <li><a href="index.php">กลับหน้าหลัก</a></li>
  <li><a href="ประเภทอาหาร.php"> ถัดไป </a></li> 

</ul>
</div>
</table>
</body>
</html> -->
