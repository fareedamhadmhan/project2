<html>
   <head>
   <meta charset="UTF-8">
   </head>
   <body>
      <div align="center">
   <button  class="btn-danger btn"> <a href="insertผู้ดูแลระบบ.php"> <h5>เพิ่มข้อมูล</h5> </a> </button></div>
   <button class="btn-danger btn"> <a href="indexhome.php"> หน้าหลัก </a> </button></div>
   
<div class="container">
 
      <table border='3' align='center' class="table table-dark" border="3" width='1000'>
     
   <tr align='center'>
  
            <th>Email</th>
            <th>Username</th>   
            <th>Password</th> 
            <th>Edit</th>
            <th>delete</th>
            
            
   </tr>
<?php
include 'connection.php'; 
$query = "SELECT * FROM system_admin ORDER BY admin_Email asc";  
$result = mysqli_query($con, $query); 

while($row = mysqli_fetch_array($result)) { 
   ?>
   
   <tr>
      <td align='center'><?php echo $row['admin_Email'];?></td>
      <td><?php echo $row['admin_User'];?></td>
      <td><?php echo $row['admin_Password'];?></td>

    
      <td align='center'> <button class="btn-warning btn"> <a href="updateผู้ดูแลระบบ.php?id=<?php echo $row['admin_Email']; ?>" class="text-white"> แก้ไข </a> </button> </td>
      <td align='center'> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $row['admin_Email']; ?>" class="text-white"> ลบ </a> </button> </td>
   </tr>
  
<?php

}
?>

</table>
</div>
   </body>
</html>