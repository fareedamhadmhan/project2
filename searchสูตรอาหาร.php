<html> 
<title>searchสูตรอาหาร</title>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css">
   
</head>
<body bgcolor="#CCFFCC">
<div class="col-lg-12"> 

ชื่อเมนูอาหาร :
         <input type="text"  name="search">
         <button class="btn-success btn" type="Submit" name="save" value="submit">ค้นหาข้อมูล</button>
        <body background="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/ICS_Quebec.svg/1024px-ICS_Quebec.svg.png">
        <div class="modal-body">
        <div class="container"  class="row" class="col-lg-9">
        <table id="example" class="table table-striped table-bordered table table-dark "class= "border=3" style="width:100%">
            
        <h1 align="center">ตารางค้นหาข้อมูลสูตรอาหาร</h1>
        <h1 align="center">
                <button class="btn btn-success"> <a href="insertmenu.php" class="text-white"> เพิ่มข้อมูล </a> </button>
                <button class="btn btn-Warning"> <a href="updatemenu.php" class="text-white"> แก้ไขข้อมูล </a> </button>
                <button class="btn btn-danger"> <a href="deletemenu.php" class="text-white"> ลบข้อมูล </a> </button> </h1>
   
   
    <tr align='center'>
        <td>ชื่อเมนูอาหาร</td>
        <td>ส่วนผสม</td>
        <td>วิธีทำ</td>
        <td>รูป</td>
        <td>แก้ไข</td>
        <td>วิธีทำ</td>
       
    <br>     
    </tr>
    
    <?php
    
        include('connection.php');

        if(isset($_POST['save'])){
            $manu_name =$_POST['searchสูตรอาหาร'];
        }

        $query = "SELECT * FROM ตารางสูตรอาหาร ORDER BY manu_name asc";
        $result = mysqli_query($con, $query);

        while($row = mysqli_fetch_array($result)) {
    ?>
        <tr>
                <td align='center'><?php echo $row['manu_name'];?></td>
                <td><?php echo $row['Ingredients'];?></td>
                <td><?php echo $row['Gastronomy'];?></td>
                <td><?php echo $row['images'];?></td>
                
                <td align='center'> <button class="btn-warning btn"> <a href="updateสูตรอาหาร.php?id=<?php echo $row['id']; ?>" 
                    class="text-white"> แก้ไข </a> </button> </td>
                <td align='center'> <button class="btn-danger btn"> <a href="deleteสูตรอาหาร.php?id=<?php echo $row['id']; ?>" 
                    class="text-white"> ลบ </a> </button> </td>
                </tr>
                
                <?php
                    }
                ?>
        </table>
        <br>
                <tr>
                    <td><button type="button" class="btn btn-outline-info"> <a href="วัตถุดิบ.php" class="text-white"> ย้อนกลับ </a> </button> </td>
                    <td><button class="btn btn-info"> <a href="index.php" class="text-white">หน้าหลัก</a> </button> </td>
                    <td><button type="button" class="btn btn-outline-info"> <a href="ผู้ดูแลระบบ.php" class="text-white"> ถัดไป </a> </button> </td>
                </tr>
        </div>
        </div>
    
          
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
    </body> 
</body>
</html>