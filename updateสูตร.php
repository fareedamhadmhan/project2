<html>
  <head>
  <meta charset="utf-8">
  </head>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "project2";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename );
mysqli_query($conn, "SET NAMES 'utf8' ");


// <!DOCTYPE html>
// <html lang="en-Us">
// <head>
//   <title>แก้ไขตารางสูตรอาหาร</title>
//   <meta charset="utf-8">
//   <meta name="viewport" content="width=device-width, initial-scale=1">
//   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
//   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
//   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

// </head>
// <body background="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/ICS_Quebec.svg/1024px-ICS_Quebec.svg.png">



// <div class="container">
//<h2><font color="red"> ***กรุณากรอกข้อมูลการจัดการสูตรอาหาร***</font></h2>
// <?php
//         include 'connection.php';
       
        if(count($_POST)>0) {                                  	
          mysqli_query($conn,"UPDATE ตารางสูตรอาหาร set manu_name = '" . $_POST['manu_name'] . "', Ingredients = '" . $_POST['Ingredients'] . "',
          Gastronomy = '" . $_POST['Gastronomy'] . "',images='" . $_POST['images'] . "'  WHERE manu_name   ='". $_POST['manu_name'] . "'");
       
          echo "<script type='text/javascript'>";
          echo "alert('บันทึกข้อมูลเรียบร้อย !');";
          echo "window.location= 'สูตรอาหาร.php';";
          echo "</script>";
          }
          $result = mysqli_query($conn,"SELECT * FROM ตารางสูตรอาหาร WHERE manu_name='" . $_GET['manu_name'] . "'");
          $row= mysqli_fetch_array($result);
          ?>
<html>
  <style>
  form {
    width: 100%;
    height: 100%;
    padding: 12px 20px;
     box-sizing: border-box; 
     border: 2px solid #ccc;
    border-radius: 4px; 
    background-color: #f8f8f8;
    resize: none;

}
  </style>
<head>
</head>
<body>
<form name="frmUser" method="post">
       <div class="form-group">
       <div class="col-sm-2">  </div>
       <div class="col-sm-5" align="left">
       <h2><font color="red"> ***กรุณากรอกข้อมูลการจัดการสูตรอาหาร***</font></h2> 
       </div>
       </div>
       <div class="form-group" >
       <div class="form-group">
       <div class="col-sm-2" align="left"> ชื่อเมนูอาหาร :</div>
          <div class="col-sm-4" align="left">
            <input  name="name" type="text" required class="form-control" value="<?php echo $row['manu_name']; ?> "/>
          </div>
      </div>
        
        <div class="form-group">
        <div class="col-sm-2" align="left">  ส่วนผสม : </div>
          <div class="col-sm-3" align="left"> 
          <input type="text"name="Ingredients" required class="form-control" value="<?php echo $row['Ingredients']; ?>">
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2" align="left"> วิธีทำ : </div>
          <div class="col-sm-3" align="left">
            <input  name="Gastronomy" type="text" required class="form-control" value="<?php echo $row['Gastronomy']; ?>"/>
          </div>
        </div>
    
   
      <div class="form-inline">  
       <h5 class="text-left"><B> &nbsp;&nbsp;UPLOAD IMAGE</h5>
       <?php if(!empty($statusMsg)){?>
       <p class="status <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
       <?php } ?>  
          <form action ="สูตรอาหาร.php" method="post" enctype="multipart/form-data">
          <label> &nbsp; Select Image File:</label>
          <input type ="file" name="image" class="form-control">
          <input type="submit" name="upload"value="UPLOAD" class="btn btn-success my-3">
      
       </div>  
       </div>
       </div>
       </form>

    <!-- <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div> -->
    
    <!-- <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
       <button class="btn-success" type="Submit" name="save" value="submit">บันทึกข้อมูล</button>
       <button class="btn btn-primary"><a href="updateสูตรอาหาร.php"  class="btn btn-outline-info" class="text-dark"> กลับสู่หน้าเมนูอาหาร</a> </button> 
      </div>
    </div>
  </form>
</div>
<br>
</body>
</html>
  -->

  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-5">
    <h3 align="left"><button class="btn-success" type="Submit" name="save" value="submit">บันทึกข้อมูล</button></h3>
    <td><button class="btn btn-info"> <a href="index.php" class="text-white">หน้าหลัก</a> </button> </td>
    
    
    </div>          
    </div>
  
   </form>
 </div>
</body>
</html>

