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

if(count($_POST)>0) {                                  	
mysqli_query($conn,"UPDATE system_admin set admin_Email = '" . $_POST['admin_Email'] . "', admin_User = '" . $_POST['admin_User'] . "',
admin_Password = '" . $_POST['admin_Password'] . "' WHERE admin_Email  ='". $_POST['admin_Email'] . "'");

echo "<script type='text/javascript'>";
echo "alert('บันทึกข้อมูลเรียบร้อย !');";
echo "window.location= 'ผู้ดูแลระบบ.php';";
echo "</script>";
}

$result = mysqli_query($conn,"SELECT * FROM system_admin WHERE admin_Email ='" . $_GET['admin_Email'] . "'");
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en-Us">    
  <head>
    <title>ผู้ดูแลระบบ</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<html>
    <style>
    from{
        width: 100%;
        height: 100%;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #ff8080;
        resize: none;
    }
    </style>
   
<body>
<form name="frmUser" method="post">
    <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-3" align="left">
    <font color="red"> ***กรุณากรอกข้อมูล จัดการข้อมูลผู้ดูแลระบบ***</font>
    </div>
    </div>

    <div class="form-group" >
    <div class="col-sm-2" align="left"> E-mail : </div>
    <div class="col-sm-5" align="left">
    <input type="varchar(30)" name="admin_Email" class="form-control" value="<?php echo $row['admin_Email']; ?>">
    </div> 
    </div>     

    <div class="form-group">
    <div class="col-sm-2" align="left">Username : </div>
    <div class="col-sm-5" align="left">
    <input  name="admin_User" type="varchar(50)" required class="form-control" value="<?php echo $row['admin_User']; ?> ">
    </div>
    </div>

    <div class="form-group">Password: </div>
    <div class="col-sm-5" align="left">
    <input  name="admin_Password" type="varchar(8)" required class="form-control" value="<?php echo $row['admin_Password']; ?> ">
    </div>
    </div>
     
  
        
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


     
        