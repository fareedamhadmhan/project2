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
  <href="https: //maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
      /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
      .row.content {
        height: 2500px
      }

      /* Set gray background color and 100% height */
      .sidenav {
        background-color: #fac240;
        color: #0a3389;
        height: 100%;
      }

      /* Set black background color, white text and some padding */
      footer {
        background-color: #0902f4;
        color: lightcoral;
        padding: 15px;
      }

      /* On small screens, set height to 'auto' for sidenav and grid */
      @media screen and (max-width: 767px) {
        .sidenav {
          height: auto;
          padding: 15px;
        }

        .row.content {
          height: auto;
        }
      }
    </style>
</head>

<body topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF" text="#000000" alink="#003399" link="#003399" vlink="#003399">
  <img src="https://helenathailand.co/wp-content/uploads/elementor/thumbs/HelenaTemp_Ver3_02-07_salisa_V1cover_web-orvb0fhg506ba7og5u08yzzdsgkccpe122qwafxagg.jpg" width="1690px" height="500px">
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
            <input type="text" SIZE="35" placeholder="ค้นหาจากชื่อเมนู,วัตถุดิบ,ประเภทอาหาร,นานาชาติ,สุขภาพ/ลดน้ำหนัก,เบเกอรี่ และเครื่องดื่ม" name="search1">
            <button name="search" value="ค้นหา" class="btn btn-sm btn-primary">ค้นหา</button>
        </form>
      </div>
    </div>

    <?php
    if (isset($_REQUEST['search']) && $_REQUEST['search'] == "ค้นหา") {
      $file = $_REQUEST['search1'];
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

    <h2 align="center">แก้ไขสูตรอาหาร</h2>
    <center>
      <form id="data" method="post" action="" enctype="multipart/form-data">

        <table border="0">
          <tr>
            <td align="center">**กรุณากรอกชื่ออาหารของคุณให้ครบทุกตัวอักษร เพื่อการค้นหาที่ถูกต้อง</td>
          </tr>
          <tr>
            <td><br></td>
          </tr>
          <tr>
            <td align="center"><label> ชื่อเมนูอาหาร </label></td>
          </tr>
          <tr>
            <td align="center"><textarea id="manu_name" name="manu_name" rows="2" cols="100" placeholder="กรอกชื่อเมนูอาหารของคุณ" style="resize:none" input type="varchar(20)" class="form-control "></textarea></td>
          </tr>
        </table>

      </form>
      <button class="btn btn-light" onclick="edit_menu()">ค้นหา</button>
      <br><br>
      <div id="content">กำลังรอกดค้นหา.....</div>
    </center>


    <script>
      function edit_menu() {
        var formData = new FormData(document.forms.namedItem("data"));
        $.ajax({
          url: "edit_menu_content.php",
          type: 'POST',
          data: formData,
          async: false,
          success: function(data) {
            $("#content").html(data);
          },
          cache: false,
          contentType: false,
          processData: false
        });
      }

      function edit_menu_submit() {
        var formData = new FormData(document.forms.namedItem("data1"));
        $.ajax({
          url: "edit_menu_content_save.php",
          type: 'POST',
          data: formData,
          async: false,
          success: function(data) {
            alert(data);
          },
          cache: false,
          contentType: false,
          processData: false
        });
      }
    </script>