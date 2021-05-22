<head>
    <title>อาหารเมนูแกง</title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css">
    <href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>


    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 4500px}
    
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
     <li><a href="ผู้ดูแลระบบ.php" class="text-white">จัดการข้อมูลผู้ดูแลระบบ</a></li>
     <li><a href="member.php" class="text-white">จัดการข้อมูลสมาชิก</a></li>
     
    </ul><br>
    <form action="" method="get">
    <label>ค้นหาเมนูอาหาร</label>
    <div class="input-group" class="text-dark" bgcolor="#FF3366">
      <input type="text"  SIZE="30" placeholder="ค้นหาชื่อเมนูอาหาร,วัตถุดิบ,ประเภทอาหาร" name="search1">
      <button name="search" value="ค้นหา" class="btn btn-sm btn-primary">ค้นหา</button>
  </form>
  </div>
  </div>
  
      <center>
      <div class="col-lg-9">
      <div class="container" class="col-md-8">
      <form method="post">
      <table border="2" >
      <h3 align="center"> <font color="blue"><B>รวมสูตรเด็ด เมนูแกง พร้อมวิธีทำง่ายๆ ใครๆ ก็ทำได้</B></h3></FONT> <br>
    

      <?php
      include "connect.php";

      
      $sql = "SELECT * FROM menu INNER JOIN attach_file ON menu.menu_name = attach_file.menu_name WHERE menu.active='1' and food_type='6' ";
      $result = $con->query($sql);
      $intRows = 0;

      while($objResult = mysqli_fetch_array($result))
        {
        $intRows++;
        $data[$intRows] = $objResult;
        }

      if($intRows > 0){
        $columns = 3;
        $rows = array_chunk($data, $columns);

      }echo "<table border='0'>\n";
      foreach ($rows as $rowObject) {
       echo "<tr>";
       foreach ($rowObject as $objResult) {
        echo "<td>
         <center>
         <a href='".$objResult["menu_name"].".html'><img width='230' height='170' src='register_system/". $objResult["path_file"] ."'>&nbsp;</a><br />".$objResult["menu_name"]."</font><br><br>
         </center>
         </td>";
       }
       if($cnum = count($rowObject)){
          for($col=$cnum;$col<$columns;$col++){
          echo '<td> </td>';
          }
       }
       echo "</tr>\n";
      }
      echo "</table>\n";

    ?>
        </form>
       </div>
      </div>

 

</body>
</html>
    </center>
  
