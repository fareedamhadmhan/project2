<head>
    <title>อาหารจานเดียว</title></title>
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
      <h3 align="center"> <font color="blue"><B>รวมสูตรเด็ด เมนูอาหารจานเดียว พร้อมวิธีทำง่ายๆ ใครๆ ก็ทำได้</B></h3></FONT> <br>
      <table align="center"  width="500" height="150" cellspacing= "0" cellspacing="0">  

      <?php
      include "connect.php";
      
      $sql = "SELECT * FROM menu INNER JOIN attach_file ON menu.menu_name = attach_file.menu_name";
      $result = $con->query($sql);
      foreach($result as $row){
        $path = $row["path_file"];
    
     ?>
    
       <!-- <tr>   
       <td> 
          <img src='register_system/<?=$path;?>' width= '100' height ='100'><br>
          <a href="ข้าวผัดแฮม"><font color="#4169E1"> <?php echo $row["menu_name"];?></font></a>
        </td> -->
      
        <tr>
         <td>  
            <img src='register_system/<?=$path;?>' width="250" height="180"><br>
            <a href=""><?php echo $row["menu_name"];?><font color="#4169E1"></th></a></font>
         </td>
       </tr>
       
       <?php
        
      }
    ?>
        </table>
        </form>
       </div>
      </div>

 

</body>
</html>
    </center>
  
