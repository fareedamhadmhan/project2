<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>แก้ไขข้อมูล</title>

<?php
    error_reporting(0); 
    $conn = new mysqli('localhost', 'root', '', 'project2');
    if($conn->connect_errno){
        die("Error [".$conn->connect_errno."]" . $conn->connect_error);
    }
?>


</head>
<body>
    <h1>Edit Page แก้ไขข้อมูลสมาชิก</h1>
    <h2> <a href="index.php">หนัาหลัก</a> <a href="add.php">เพิ่มข้อมูล</a>    <a href="search.php">ค้นหาข้อมูล</a>    <a href="edit.php">แก้ไขข้อมูล</a>    <a href="delete.php">ลบข้อมูล</a></h2>

    <form action="edit.php">
        <table class="table table-striped table-responsive">
            <tr>
                <th>Email</th>
                <td><input type="varchar(30)	" name="keyword"></td>
                <td><input type="submit" name="submit" value="สืบค้น"></td>
            </tr>
        </table>
    </form>

<?php        
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'บันทึกข้อมูล'){
        $sql = "update menu set ";
        $sql .= " admin_Email  = '".$_REQUEST['admin_Email ']."', ";
        $sql .= " admin_User = '".$_REQUEST['admin_User']."' ";
        $sql .= " where admin_Email  = '".$_REQUEST['admin_Email']."' ";
        $r = $conn->query($sql);

        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $id = $_REQUEST['admin_Email '];
            $name = $_REQUEST['admin_User'];
            $price = $_REQUEST['admin_Password'];
        }else{
            echo "update complete!!!!!! <br> Click <a href='index.php'>Back</a> to home page";
            exit;
        }
    }

    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'สืบค้น'){
        $sql = "select * from system_admin ";
        $sql = $sql . " where admin_Email = '".$_REQUEST['keyword']."' ";
        $rs = $conn->query($sql);
        if ($rs->num_rows == 0){
            echo "--------------  No match record---------------";
            exit;
        }else{
            $row = $rs->fetch_array();
            $id = $row['admin_Email'];
            $name = $row['admin_User'];
            $price = $row['admin_Password'];
?>

<form action="edit.php" method="get">
            <input type="varchar(30)" value="<?php echo $id;?>" name="admin_Email" />
        <table>
            <tr>
                <th>Email</th>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <th>ชื่อเมนู</th>
                <td><input type="text" name="menu_name" required  maxlength="50" value="<?php echo $name;?>"/></td>
                <th>Username</th>
                <td><input type="number" name="menu_price" maxlength="4" min=0 max=9999 value="<?php echo $price;?>"/></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="บันทึกข้อมูล" name='submit'> <input type="reset" /> </td>  
            </tr>
        
        </table>
    </form>

<?php


        }
    }
    
    
    
    
?>    
 

</body>
</html>