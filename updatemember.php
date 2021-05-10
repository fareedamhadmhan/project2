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
$con = new mysqli($servername, $username, $password, $databasename );
mysqli_query($con, "SET NAMES 'utf8' ");

if(count($_POST)>0) {                                  	
  mysqli_query($con,"UPDATE users set email = '" . $_POST['email'] . "', username = '" . $_POST['username'] . "',
  password = '" . $_POST['password'] . "' WHERE email ='". $_POST['email'] . "'");


echo "<script type='text/javascript','varchar(30)/javascript'>";
echo "alert('บันทึกข้อมูลเรียบร้อย !');";
echo "window.location= 'member.php';";
echo "</script>";

}

$result = mysqli_query($con,"SELECT * FROM users WHERE id ='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en-Us">    
  <head>
    <title>สมาชิก</title>
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
    <font color="red"> ***กรุณากรอกข้อมูล จัดการข้อมูลสมาชิก***</font>
    </div>
    </div>

    <div class="form-group" >
    <div class="col-sm-2" align="left"> E-mail : </div>
    <div class="col-sm-5" align="left">
    <input name="email" type="varchar(100)" required class="form-control" value="<?php echo $row['email']; ?>">
    </div> 
    </div>   

    <div class="form-group">
    <div class="col-sm-2" align="left">Username : </div>
    <div class="col-sm-5" align="left">
    <input  name="username" type="varchar(100)" required class="form-control" value="<?php echo $row['username']; ?> ">
    </div>
    </div>

    <div class="form-group">Password: </div>
    <div class="col-sm-5" align="left">
    <input  name="password" type="varchar(100)" required class="form-control" value="<?php echo $row['password']; ?> ">
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


     
        