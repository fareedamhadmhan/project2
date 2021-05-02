<?php
  include '../connect.php';
?>  

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
        <input type="text"  SIZE="35" placeholder="ค้นหาจากชื่อเมนู,วัตถุดิบ,ประเภทอาหาร,นานาชาติ,สุขภาพ/ลดน้ำหนัก,เบเกอรี่ และเครื่องดื่ม" name="search1">
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

<!-- กรอกข้อมูล -->
<h2 align="center">จัดการสูตรอาหาร ➕</h2>
<?php  
        // if(isset($_POST['save'])){
            
        //     $manu_name=$_POST['manu_name'];
        //     $Ingredients=$_POST['Ingredients'];
        //     $cook=$_POST['cook'];
        //     $image=$_POST['image'];
        //     $for_people=$_POST['for_people'];
        //     $explain=$_POST['explain'];

        //     $sql= "INSERT INTO `ตารางสูตรอาหาร` (`manu_name`, `Ingredients`, `cook`,`for_people`,'image','explain')
        //     VALUES ('$manu_name','$Ingredients','$cook','$image','$for_people','$explain')";
           
        //         if(mysqli_query($con,$sql)){
        //             echo "<script type='text/javascript','varchar(50)/javascript'>";
        //             echo "<img src='ตารางสูตรอาหาร/".$row['image']."' >";
        //             echo"<p>".$row['image']."</p>";
        //             echo "alert('บันทึกข้อมูลเรียบร้อย !')";
        //             echo "window.location='index.php';";
        //             echo "</script>";
        //         }else{
        //              echo "error : " . $sql . "
        //         " .mysqli_error($con);
        //         }
        //         mysqli_close($con);  
        // }
    ?>  

  <form id="data" method="post" action="" enctype="multipart/form-data">
    <center>
        <table border="0">
          <tr>
            <td align="center">ใส่ภาพอาหารที่ทำเสร็จ เป็นแรงบันดาลใจให้เพื่อนๆ ทำตามสูตรของเรา</td>
          </tr>
          <tr><td><br></td></tr>
          <tr>
            <td align="center"><input type="file" name="file" ></td>
          </tr>
          <tr><td><br></td></tr>
          <tr>
            <td align="center"><label> ชื่อเมนูอาหาร </label></td>
          </tr>
          <tr>
            <td align="center"><textarea id="manu_name"  name="manu_name" rows="2" cols="100" placeholder="กรอกชื่อเมนูอาหารของคุณ" style="resize:none" input type="varchar(20)" class="form-control "></textarea></td>
          </tr>
          <tr><td><br></td></tr>
          <tr>
            <td align="center"><label> อธิบายสั้น ๆ เกี่ยวกับเมนูนี้</label></td>
          </tr>
          <tr>
            <td align="center"><textarea id="explain"  name="explain" rows="2" cols="100" placeholder="เล่าเคล็ดลับ/ที่มา #เล่าเรื่องราวความพิเศษของสูตรอาหารของคุณ" style="resize:none" input type="varchar(20)" class="form-control "></textarea></td>
          </tr>
          <tr><td><br></td></tr>
          <tr>
            <td align="center"><label>สำหรับ</label></td>
          </tr>
          <tr>
            <td align="center"><textarea id="number_p"  name="number_p" rows="1" cols="100" placeholder="กี่คน" style="resize:none" input type="varchar(20)" class="form-control "></textarea></td>
          </tr>
          <tr><td><br></td></tr>
          <tr>
            <td align="center"><label>เวลาที่ใช้</label></td>
          </tr>
          <tr>
            <td align="center"><textarea id="time"  name="time" rows="1" cols="100" placeholder="1 ชม. 30 น." style="resize:none" input type="varchar(20)" class="form-control "></textarea></td>
          </tr>
          <tr><td><br></td></tr>
          <tr>
            <td align="center"><label>ส่วนผสม</label></td>
          </tr>
          <tr>
            <td align="center"><textarea  id="Ingredients" name="Ingredients" rows="2" cols="100" placeholder="กรอกส่วนผสมของวัตถุดิบอาหารของคุณ " style="resize:none" input type="text" class="form-control "></textarea></td>
          </tr>
          <tr><td><br></td></tr>
          <tr>
            <td align="center"><label>วิธีทำ</label></td>
          </tr>
          <tr>
            <td align="center"><textarea id="cook" name="cook" rows="2" cols="100" placeholder="กรอกวิธีทำเมนูอาหารของคุณ" style="resize:none" input type="text" class="form-control "></textarea></td>
          </tr>
          <tr><td><br></td></tr>
          <tr>
            <td align="center" ><label>หมวดหมู่อาหาร</label></td>
          </tr>
          <tr><td><br></td></tr>
          <tr>
            <td>
            <table border="0">
              <tr>
                <td><label>ประเภทอาหาร</label></td>
              </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูน้ำพริก" id="1"> เมนูน้ำพริก &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูกับข้าว" id="2"> เมนูกับข้าว &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูอาหารจีน" id="3 "> เมนูอาหารจีน &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="อาหารเย็น" id="4 "> อาหารเย็น &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูอาหารมังสวิรัติ" id="5 "> เมนูอาหารมังสวิรัติ &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูอาหารเหนือ" id="6"> เมนูอาหารเหนือ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูแกง" id="7"> เมนูแกง &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="อาหารเด็ก" id="8"> อาหารเด็ก &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=foodtype VALUE="เมนูก๋วยเตี๋ยว" id="9"> เมนูก๋วยเตี๋ยว &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูซุป" id="10"> เมนูซุป &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูสเต็ก" id="11">เมนูสเต็ก &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูอาหารจานเดียว"id="12"> เมนูอาหารจานเดียว &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูอาหารภาคกลาง" id="13"> เมนูอาหารภาคกลาง &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูอาหารอีสาน"  id="14"> เมนูอาหารอีสาน&nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูอาหารเช้า" id="15"> เมนูอาหารเช้า &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="สลัด" id="16">สลัด &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="ของหวาน"id="17"> ของหวาน &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="ของว่าง" id="18"> ของว่าง &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="เมนูอาหารอิตาเลียน"  id="19"> เมนูอาหารอิตาเลียน&nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="กับแกล้ม" id="20"> กับแกล้ม &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="น้ำจิ้ม"id="21"> น้ำจิ้ม &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=food_type VALUE="อาหารทำขาย"id="22"> อาหารทำขาย &nbsp;</TD>
                  </tr>
              <tr><td><br></td></tr>
              <tr>
                <td><label>วัตถุดิบ</label></td>
              </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="ขนมปังปิง" id="1"> ขนมปังปิง &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="อะโวคาโด" id="2"> อะโวคาโด &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูกุ้ง" id="3"> เมนูกุ้ง &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูชีส" id="4"> เมนูชีส &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูปลา" id="5"> เมนูปลา &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูปลาหมึก" id="6"> เมนูปลาหมึก &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูปู" id="7"> เมนูปู &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูผลไม้" id="8"> เมนูผลไม้ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูผัก" id="9"> เมนูผัก &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูสามชั้น" id="10"> เมนูสามชั้น &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูหมู"  id="11">เมนูหมู &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูหอย" id="12">เมนูหอย &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูอกไก่" id="13"> เมนูอกไก่ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูอาหารทะเล" id="14"> เมนูอาหารทะเล&nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูเต้าหู้" id="15"> เมนูเต้าหู้ &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูเนื้อวัว" id="16"> เมนูเนื้อวัว &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูเป็ด" id="17"> เมนูเป็ด &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูเป็ด" id="18"> เมนูเป็ด &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูเส้น" id="19"> เมนูเส้น &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูแซลมอน" id="20"> เมนูแซลมอน &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูไก่" id="21"> เมนูไก่ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูไข่" id="22"> เมนูไข่ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูไข่เค็ม" id="23"> เมนูไข่เค็ม &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูใส้กรอก" id="24"> เมนูใส้กรอก &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="หม้ออบลมร้อน" id="25"> หม้ออบลมร้อน &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="เมนูผัก" id="26"> เมนูผัก &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="ทะเล" id="27"> ทะเล &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="หม้อทอดไร้น้ำมัน" id="28"> หม้อทอดไร้น้ำมัน &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=material VALUE="หม้อหุงข้าว" id="29">หม้อหุงข้าว &nbsp;</TD>
       
                  </tr>
              <tr><td><br></td></tr>
              <tr>
                <td><label>เบเกอรี่ และเครื่องดื่ม</label></td>
              </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=bakery_drink VALUE="เค้ก" id="1"> เค้ก &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=bakery_drink VALUE="พาย" id="2"> พาย &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=bakery_drink VALUE="สูตรน้ำปั่น" id="3"> สูตรน้ำปั่น &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=bakery_drink VALUE="ค็อกเทล" id="4"> ค็อกเทล &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=bakery_drink VALUE="ขนมปัง" id="5"> ขนมปัง &nbsp;</TD>
                  </tr>
              <tr><td><br></td></tr>
              <tr>
                <td><label>อุปกรณ์/วิธีทำ</label></td>
              </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=cook_method VALUE="เมนูต้ม" id="1"> เมนูต้ม &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=cook_method VALUE="เมนูทอด" id="2"> เมนูทอด &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=cook_method VALUE="เมนูนึ่ง" id="3"> เมนูนึ่ง &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=cook_method VALUE="เมนูผัด" id="4"> เมนูผัด &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=cook_method VALUE="เมนูยำ" id="5"> เมนูยำ &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=cook_method VALUE="เมนูย่าง" id="6"> เมนูย่าง &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=cook_method VALUE="เมนูหม้อหุงข้าว" id="7"> เมนูหม้อหุงข้าว &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=cook_method VALUE="เมนูหม้ออบลมร้อน" id="8"> เมนูหม้ออบลมร้อน &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=cook_method VALUE="เมนูอบ" id="9"> เมนูอบ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=cook_method VALUE="เมนูไมโครเวฟ" id="10"> เมนูไมโครเวฟ &nbsp;</TD>
                  </tr>
              <tr><td><br></td></tr>
              <tr>
                <td width="20%"><label>วันเทศกาล/วันสำคัญ</label></td>
              </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=Day VALUE="เทศกาลเจ" id="1"> เทศกาลเจ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=Day VALUE="วันแม่แห่งชาติ " id="2"> วันแม่แห่งชาติ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=Day VALUE="วาเลนไทน์" id="3"> วาเลนไทน์ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=Day VALUE="วันคริสมาสต์" id="4"> วันคริสมาสต์ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=Day VALUE="วันสงกรานต์" id="5"> วันสงกรานต์ &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=Day VALUE="ตรุษจีน" id="6"> ตรุษจีน &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=Day VALUE="ฮัลโลวีน" id="7"> ฮัลโลวีน &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=Day VALUE="ปาร์ตี้" id="8"> ปาร์ตี้ &nbsp;</TD>
                  </tr>
              <tr><td><br></td></tr>
              <tr>
                <td><label>นานาชาติ</label></td>
              </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=international VALUE="อาหารไทย" id="1"> อาหารไทย &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=international VALUE="อาหารจีน" id="2"> อาหารจีน &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=international VALUE="อาหารญี่ปุ่น" id="3"> อาหารญี่ปุ่น &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=international VALUE="อาหารเวียดนาม" id="4"> อาหารเวียดนาม &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=international VALUE="อาหารอิตาลี" id="5"> อาหารอิตาลี &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=international VALUE="อาหารตุรกี" id="6"> อาหารตุรกี &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=international VALUE="อาหารอินเดีย" id="7"> อาหารอินเดีย &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=international VALUE="อาหารมาเลเซีย" id="8"> อาหารมาเลเซีย &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=international VALUE="อาหารฟิลิปปินส์" id="9"> อาหารฟิลิปปินส์ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=international VALUE="อาหารเกาหลี" id="10"> อาหารเกาหลี &nbsp;</TD>
                  </tr>
              <tr><td><br></td></tr>
              <tr>
                <td><label>สุขภาพ/ลดน้ำหนัก</label></td>
              </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=health VALUE="คลีน"  id="1"> คลีน &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=health VALUE="มังสวิรัติ" id="2"> มังสวิรัติ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=health VALUE="ไร้แป้ง" id="3"> ไร้แป้ง &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=health VALUE="ไขมันต่ำ" id="4"> ไขมันต่ำ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=health VALUE="โปรตีน" id="5"> โปรตีน&nbsp;</TD>
                  </tr>
              <tr><td><br></td></tr>
              <tr>
                <td><label>อาหารท้องถิ่น</label></td>
              </tr>
                  <tr>
                    <TD><INPUT TYPE=Checkbox Name=local_food VALUE="อาหารอีสาน"  id="1"> อาหารอีสาน &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=local_food VALUE="อาหาเหนือ" id="2"> อาหาเหนือ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=local_food VALUE="อาหารใต้" id="3">  อาหารใต้ &nbsp;</TD>
                    <TD><INPUT TYPE=Checkbox Name=local_food VALUE="อาหารกลาง" id="4"> อาหารกลาง&nbsp;</TD>  
                  </tr>
                  <tr><td><br></td></tr>
                  <tr><td><br></td></tr>
                  <tr>
                    <td  width="20%"><button class="btn-success btn" name="save" id="add" value="add" onclick="test()">เพิ่มสูตรอาหาร </button></td>
                    <td  width="20%"><button class="btn btn-warning"  name="edit" value="edit"><a href="updateสูตร.php" class="text-white">แก้ไขสูตรอาหาร</a></button></td>
                    <td  width="20%"><button class="btn btn-danger" > ลบ </button></td>
                  </tr>
            </table>
            </td>
          </tr>
        </table>
    </center>
  </form>


  <script>

    function test(){
      var formData = new FormData(document.forms.namedItem("data"));

      $.ajax({
            url: "upload_menu.php",
            type: 'POST',
            data: formData,
            async: false,
            success: function(data) {
            },
            cache: false,
            contentType: false,
            processData: false
        });
    
    }
    
  </script>
