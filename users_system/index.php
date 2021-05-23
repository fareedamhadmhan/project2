<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>UPLOAD FILE</title>
</head>
<body>
<?php
  include "../connect.php";
  @$id = $_GET["id"];

  $query = "SELECT * FROM users WHERE id='$id' "; 

  $result = mysqli_query($con, $query); 
  echo "<table border='1' align='center' width='500'>";
  echo "<tr align='center' bgcolor='#CCCCCC'><td>UserName</td><td> Email </td></tr>";
  while($row = mysqli_fetch_array($result)) { 
    echo "<tr>";
    echo "<td>" .$row["username"] .  "</td> ";
    echo "<td>".$row['email']."</td>";
    echo "</tr>";
  }
  echo "</table>";
  mysqli_close($con);
?>
<br/>

<form action="add_file_db.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" id="id" value="<?=$id;?>">
  <p>&nbsp;</p>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D6D6">Form Upload&nbsp;File</td>
    </tr>
    <tr>
      <td width="126" bgcolor="#EDEDED">&nbsp;</td>
      <td width="574" bgcolor="#EDEDED">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#EDEDED">ใส่รูปของท่าน: </td>
      <td bgcolor="#EDEDED"><label>
        <input type="file" name="upload_file" id="upload_file"  required="required"/>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#EDEDED">&nbsp;</td>
      <td bgcolor="#EDEDED">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EDEDED">&nbsp;</td>
      <td bgcolor="#EDEDED"><input type="submit" name="button" id="button" value="Upload" /></td>
    </tr>
    <tr>
      <td bgcolor="#EDEDED">&nbsp;</td>
      <td bgcolor="#EDEDED">&nbsp;</td>
    </tr>
  </table>
</form>
<br>
    <table  align="center">
        <tr>
          <td><button type="button" class="btn btn-outline-info"> <a href="../users_system/member.php" class="text-white"> ย้อนกลับ </a> </button> </td>
          <td><button  type="button" class="btn btn-outline-info"> <a href="../index.php" class="text-white">หน้าหลัก</a> </button></td>
        </tr>
    </table> 
</body>
</html>