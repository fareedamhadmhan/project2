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
     <li><a href="../index.php" class="text-white">หน้าหลัก</a></li>
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
            <td align="center"><input type="file" name="fileupload" id="fileupload" ></td>
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
            <td align="center"><label>ส่วนผสม / อุปกรณ์</label></td>
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
                    <TD><INPUT TYPE=radio Name=food_type VALUE="1" id="food_type"> น้ำพริก &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="2" id="food_type"> กับข้าว &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="3" id="food_type"> อาหารเย็น &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="4" id="food_type"> อาหารมังสวิรัติ &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="5"id="food_type"> น้ำจิ้ม &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="7" id="food_type"> แกง &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="8" id="food_type"> อาหารเด็ก &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="9" id="food_type"> ก๋วยเตี๋ยว &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="10" id="food_type"> ซุป &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="5"id="food_type"> มุสลิม &nbsp;</TD> 
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="11" id="food_type"> สเต็ก &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="12"id="food_type"> อาหารจานเดียว &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="15" id="food_type"> อาหารเช้า &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="5"id="food_type"> เบเกอร์รี่ &nbsp;</TD> 
                    <TD><INPUT TYPE=radio Name=food_type VALUE="5"id="food_type"> เครื่องดื่ม &nbsp;</TD> 
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="16" id="food_type"> สลัด &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="17"id="food_type"> ของหวาน &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="18" id="food_type"> ของว่าง &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="19" id="food_type"> กับแกล้ม &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=food_type VALUE="5"id="food_type"> คลีน &nbsp;</TD> 
                  </tr>
              <tr><td><br></td></tr>
              <tr>
                <td width="20%"><label>วันเทศกาล/วันสำคัญ</label></td>
              </tr>
                  <tr>
                    <TD><INPUT TYPE=radio Name=fastival VALUE="1" id="1"> เทศกาลเจ &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=fastival VALUE="2 " id="2"> วันแม่แห่งชาติ &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=fastival VALUE="3" id="3"> วาเลนไทน์ &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=fastival VALUE="4" id="4"> วันคริสมาสต์ &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=fastival VALUE="5" id="5"> วันสงกรานต์ &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=radio Name=fastival VALUE="6" id="6"> ตรุษจีน &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=fastival VALUE="7" id="7"> ฮัลโลวีน &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=fastival VALUE="8" id="8"> ปาร์ตี้ &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=fastival VALUE="9" id="8"> อื่นๆ &nbsp;</TD>
                  </tr>
              <tr><td><br></td></tr>
              <tr>
                <td><label>นานาชาติ</label></td>
              </tr>
                  <tr>
                    <TD><INPUT TYPE=radio Name=international VALUE="1" id="1"> อาหารไทย &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=international VALUE="2" id="2"> อาหารจีน &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=international VALUE="3" id="3"> อาหารญี่ปุ่น &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=international VALUE="4" id="4"> อาหารเวียดนาม &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=international VALUE="5" id="5"> อาหารอิตาลี &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=radio Name=international VALUE="6" id="6"> อาหารตุรกี &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=international VALUE="7" id="7"> อาหารอินเดีย &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=international VALUE="8" id="8"> อาหารมาเลเซีย &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=international VALUE="9" id="9"> อาหารฟิลิปปินส์ &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=international VALUE="10" id="10"> อาหารเกาหลี &nbsp;</TD>
                  </tr>
                  <tr>
                    <TD><INPUT TYPE=radio Name=international VALUE="6" id="6"> อื่นๆ &nbsp;</TD>
                  </tr>

              <tr><td><br></td></tr>
              <tr>
                <td><label>ภูมิภาคอาหาร</label></td>
              </tr>
                  <tr>
                    <TD><INPUT TYPE=radio Name=local_food VALUE="1"  id="1"> อาหารอีสาน &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=local_food VALUE="2" id="2"> อาหาเหนือ &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=local_food VALUE="3" id="3">  อาหารใต้ &nbsp;</TD>
                    <TD><INPUT TYPE=radio Name=local_food VALUE="4" id="4"> อาหารกลาง&nbsp;</TD>  
                  </tr>
                  <tr><td><br></td></tr>
                  <tr><td><br></td></tr>
                  <tr>
                    <td  width="20%"><button class="btn-success btn" name="save" id="add" value="add" onclick="upload_menu()">เพิ่มสูตรอาหาร </button></td>
                    <!-- <td  width="20%"><button class="btn btn-warning"  name="edit" value="edit" onclick="edit_menu()">แก้ไขสูตรอาหาร</button></td>
                    <td  width="20%"><button class="btn btn-danger" > ลบ </button></td> -->
                  </tr>
            </table>
            </td>
          </tr>
        </table>
    </center>
  </form>


  <script>

    function upload_menu(){
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
