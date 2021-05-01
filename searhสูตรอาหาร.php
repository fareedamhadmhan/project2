<html>
<title>search</title>
<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<script>
    $(document).ready(function() {
        $('#example').searhสูตรอาหาร();
    });
</script>
</head>

<head>
    <h1 align="center">ตารางค้นหาข้อมูลสูตรอาหาร</h1>
    <h1 align="center">
        

</head>

<head>
    <meta charset="utf-8">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <script>
        $(document).ready(function() {
            $('#example').searhสูตรอาหาร();
        });
    </script>
</head>

<div class="col-lg-12"> 
<br>
ชื่อเมนูอาหาร :
         <input type="text"  name="search">
         <button class="btn-success btn" type="Submit" name="save" value="submit">ค้นหาข้อมูล</button>

    <br>
    <div class="container"  class="row" class="col-lg-9">
        <table id="example" class="table table-striped table-bordered table table-dark "class= "border=3" style="width:100%">
       
            <thead>
            <br>
                <tr align='center'>
                <strong><td>ชื่อเมนูอาหาร</td></strong>
                <strong><td>ส่วนผสม</td></strong>
                <strong> <td>วิธีทำ</td></strong>
                  
                </tr>
            </thead>

            <?php
            include 'connection.php';

            $query = "SELECT * FROM ตารางสูตรอาหาร ORDER BY manu_name asc";
            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td align='center'><?php echo $row['manu_name']; ?></td>
                    <td align='center'><?php echo $row['Ingredients']; ?></td>
                    <td align='center'><?php echo $row['Gastronomy']; ?></td>
                    
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
        </div>
</body>
</html>

